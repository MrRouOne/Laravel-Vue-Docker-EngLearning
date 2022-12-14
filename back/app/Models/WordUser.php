<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WordUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'word_id',
        'status',
    ];
}
