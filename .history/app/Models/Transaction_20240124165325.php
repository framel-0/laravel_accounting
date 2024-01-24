<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'description',
        'account_id',
        'amount',
        'is_debit',
        'fiscal_year_id',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function fiscalYear()
    {
        return $this->belongsTo(FiscalYear::class);
    }

}
