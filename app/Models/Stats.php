<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;

    protected $table = 'stats';

    protected $fillable = [
        'player_id','points','average_points','games','duration'
    ];
}
