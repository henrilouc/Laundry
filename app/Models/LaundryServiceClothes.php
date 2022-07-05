<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryServiceClothes extends Model
{
    use HasFactory;
    protected $fillable = [
        'laundry_service_id',
        'cloth_id',
        'amount',
        'created_at',
        'updated_at'
    ];
}
