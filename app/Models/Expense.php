<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Csv;

class Expense extends Model
{
    /** @use HasFactory<\Database\Factories\ExpenseFactory> */
    use HasFactory;

    protected $fillable = [
        'description',
        'transaction_date',
        'posted_date',
        'card_number',
        'Category',
        'debit',
        'credit',
        'other',
        'csv_id'
    ];

    protected $casts = [
        'transaction_date' => 'date',
        'posted_date' => 'date'
    ];

    public function csv()
    {
        return $this->belongsTo(Csv::class);
    }
}
