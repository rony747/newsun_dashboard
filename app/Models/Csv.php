<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
  protected $guarded = [];
  public function expenses()
  {
    return $this -> hasMany(Expense::class);
  }
}
