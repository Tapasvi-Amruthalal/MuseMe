<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
class searchbar extends Controller
{
    //
    public function view(Request $req){
    //     $search= $req['search']?? "";
    //     if($search !=""){
    //         $songs=song::where('title', '=',$search)->get();
    //     }
    //     else{
    //         $songs=song::all();
    //     }
    //     // $songs=song::all();
    // // $data=compact('songs', 'search');
    //     return view('home', ['search'=>$songs]);
        return $req;

    }
}
