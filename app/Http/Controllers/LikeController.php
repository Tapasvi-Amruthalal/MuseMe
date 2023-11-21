<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Blade;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\DB;
use App\Models\song;
use App\Models\User;
use App\Models\liked_song;
class LikeController extends Controller
{
    //functions for liking
    public function like(Request $req){
        $song=new liked_song;
        $check=DB::table('liked_songs')
        ->where('song_id', $req)
        ->exists();
        if($check==true){
            echo "nadakullla";
        }
        else{

            $song->song_id=$req->song;
            // $user=Auth::user();
            // $id=Auth::id();
            $user=auth()->user();//getting logger id
            $song->user_id=$user->id;
            // DB::insert('insert into song_like values(? ?)', [$song_id, auth()->id()]);
            $song->save();//saving data
            return redirect()->route('songlist');
        }
        // return Blade::render("$song");
    }
    public function unlike(Request $req){
        $user = auth()->user();
        
        $query = DB::table('liked_songs')
            ->where('song_id', $req->song)
            ->where('user_id', $user->id);
        
        // dd($query->toSql(), $query->get());
    
        // Uncomment the following line when you are sure the query is correct
        $query->delete();
        
        return redirect()->route('songlist');
    }
    
    public function show(){
        // $list= liked_song::all();
        // return view('liked', ['songs'=>$list]);
        
        $curr_user=auth()->user();
        $id=$curr_user->id;
        // $list= liked_song::where('user_id',$id)
        // ->get();
        
        $data=DB::table('songs')
                ->join('liked_songs', 'liked_songs.song_id','songs.song_id')
                ->where('user_id', $id)
                ->get();
        // return $data;
        return view('liked', ['sings'=>$data]);
    }
}