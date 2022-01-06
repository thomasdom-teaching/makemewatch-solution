<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $casts = [
        'genres' => 'array',
        'schedule' => 'array',
        'rating' => 'array',
        'network' => 'array',
        'webChannel' => 'array',
        'externals' => 'array',
        'image' => 'array',
    ];
}
