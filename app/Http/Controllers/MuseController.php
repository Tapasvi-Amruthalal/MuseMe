<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    function playlist()
    {
        return view('playlist');
    }
    function chords()
    {
        return view('chords');
    }
}
