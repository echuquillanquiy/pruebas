<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apellidos extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'user_id'
    ];
}
