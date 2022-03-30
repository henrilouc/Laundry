<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryService extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'description',
        'kilo',
        'credit',
        'paymentReceipt',
        'created_at',
        'updated_at'
    ];


    public function laundryUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
