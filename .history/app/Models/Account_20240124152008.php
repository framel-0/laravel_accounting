<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'delivery_tag_code',
        'delivery_bag_code',
    ];

    public function type()
    {
        return $this->belongsTo(AccountType::class, 'type_id');
    }
}
