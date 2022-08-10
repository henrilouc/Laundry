<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'value',
        'amount',
        'description',
        'status',
        'type',
        'single_purchase',
        'paymentReceipt',
        'created_at',
        'updated_at',
        'code',
        'discount'
    ];
}
