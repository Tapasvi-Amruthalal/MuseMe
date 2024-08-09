<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
class MuseController extends Controller
{
    //
    function home()
    {
        return view('home');
    }
    function liked()
    {
        return view('liked');
    }
    function playlist(Request $req)
    {
        $search=$req['search']??"";
        if($search!=''){
            //where
            $list=song::where('title','LIKE',"%$search%")->orwhere('artist','LIKE',"%$search%")->orwhere('genre','LIKE',"%$search%")->get();
        }else{
            $list= song::all();
        }
        return view('playlist', ['songs'=>$list]);
    }
    function chords()
    {
        return view('chords');
    }

    public function showsongs(){



    }

}
