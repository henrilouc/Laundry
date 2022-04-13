<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'inactivated_at'
    ];

    const ADMIN     = 1;
    const GUEST     = 2;
    const USER      = 3;
}
