<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    use HasFactory;

    public function likes(){
        return $this->belongsToMany(User::class, 'song_like')->withTimeStamps();
    }

    // public function getsong(){
    //     return $this->hasmany('App\Models\liked_song');
    // }
}
