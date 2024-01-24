<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiscalYear extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_year',
        'end_year'
    ];

    // ... existing code

    public static $rules = [
        'start_year' => 'required|integer|min:1900|max:2100',
        'end_year' => 'required|integer|min:1901|max:2101|gt:start_year',
    ];
}
