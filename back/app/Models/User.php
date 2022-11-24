<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'email',
        'password',
        'word_count'
    ];

    protected $hidden = [
        'password',
        'is_admin'
    ];
}
