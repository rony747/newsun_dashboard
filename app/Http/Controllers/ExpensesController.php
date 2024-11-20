<?php

namespace App\Http\Controllers;

use App\Models\Csv;
use App\Models\Expense;
use Illuminate\Support\Facades\Storage;
use League\Csv\Reader;
use League\Csv\Statement;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExpensesController extends Controller
{


  public function processCsv($url)
  {
    $csvData = [];
    $csv     = Reader ::createFromPath(( $url ), 'r');
    $csv -> setHeaderOffset(0);
    $records              = $csv -> getRecords();
    $headers              = $csv -> getHeader();
    $csvData[ 'headers' ] = $headers;
    $csvData[ 'records' ] = $records;
    return $csvData;
  }

  public function uploadCsv(Request $request)
  {

    $request->validate([
      'csv_file' => 'required|file|max:10240|mimes:csv',
    ]);
    
    $file = $request->file('csv_file');
    $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . time() . '.' . $file->extension();
    $path = $file->storeAs('public/csv/', $filename);
    $url = storage_path('app/' . $path);
    
    $csvToDb = Csv::create([
        'path' => $filename,
        'original_name' => $file->getClientOriginalName()
    ]);

    if (!$csvToDb) return redirect()->back()->with('error', 'Storing failed');
    
    $csvData = $this->processCsv($url);
    
    foreach ($csvData['records'] as $record) {
      Expense::create([
        'description' => $record['Description'],
        'transaction_date' => \Carbon\Carbon::parse($record['Transaction Date'])->format('Y-m-d'),
        'posted_date' => \Carbon\Carbon::parse($record['Posted Date'])->format('Y-m-d'),
        'card_number' => $record['Card No.'],
        'Category' => $record['Category'],
        'debit' => $record['Debit'] ? $record['Debit'] : null,
        'credit' => $record['Credit'] ? $record['Credit'] : null,
        'csv_id' => $csvToDb->id
      ]);
    }

    return redirect('/expenses')->with('success', 'CSV data imported successfully');
  }


  public function index()
  {
    $csvs = Csv::withCount('expenses')->latest()->get();
    $selectedCsv = request('csv_id');
    
    $expenses = Expense::with('csv')
        ->when($selectedCsv, function($query) use ($selectedCsv) {
            return $query->where('csv_id', $selectedCsv);
        })
        ->latest()
        ->get();

    return view('pages.expenses.index', [
        'expenses' => $expenses,
        'csvs' => $csvs,
        'selectedCsv' => $selectedCsv
    ]);
  }
}
