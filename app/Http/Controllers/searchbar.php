<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
class searchbar extends Controller
{
    //
    // function playlist(Request $req)
    // {
    //     $search=$req['search']??"";
    //     if($search!=''){
    //         //where
    //         $list=song::where('title','=',$search)->get();
    //     }else{
    //         $list= song::all();
    //     }
    //     return view('playlist', ['songs'=>$list]);
    // }
}
