<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CsvController extends Controller
{
  public function store(Request $request)
  {

    $request->validate([
      'csv_file' => 'required|file|max:10240|mimes:csv', // Max 10MB
    ]);

    try {
      // Get the file from the request
      $file = $request->file('csv_file');

      // Generate a unique filename
      $filename = time() . '_' . $file->getClientOriginalName();


      // Store the file
      $path = $file->storeAs('csv/', $filename);

      // Generate the public URL
      $url = Storage::url($path);

      return response()->json([
        'success' => true,
        'message' => 'File uploaded successfully',
        'path' => $path,
        'url' => $url
      ]);

    } catch (\Exception $e) {
      return response()->json([
        'success' => false,
        'message' => 'File upload failed: ' . $e->getMessage()
      ], 500);
    }
  }
}
