<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class liked_song extends Model
{
    protected $table = 'liked_songs';

    use HasFactory;
    protected $fillable=[
        'song_id',
        'user_id'
    ];
    
}
