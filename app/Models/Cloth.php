<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    use HasFactory;
    protected $table = 'Clothes';
    protected $fillable = [
        'name',
        'description',
        'created_at',
        'updated_at',
        'inactivated_at'
    ];
}
