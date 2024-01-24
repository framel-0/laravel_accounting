<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'account_type_id'
    ];

    public function account_type()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }
}
