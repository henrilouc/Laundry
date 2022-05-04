<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $fillable = [
        'multiplier',
        'user_type_id',
        'min',
        'max',
        'description',
        'created_at',
        'updated_at',
    ];
}
