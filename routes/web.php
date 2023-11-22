<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\searchbar;
use App\Http\Controllers\search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/home');
})->name('home');

    
// Route::get('get', function () {
//     $session =session()->all();
//     echo "<pre>";
//     print_r($session);
//     echo "<pre>";
// });

// Route::get('set', function(Request $req){
//     $req->session()->put('user_name', 'new_user_name');
//     $req->session()->put('user_id', '123');

//     return redirect('get');
// });

Route::get('/home','App\Http\Controllers\MuseController@home')->name('home');
Route::get('/liked','App\Http\Controllers\MuseController@liked');
Route::get('/playlist','App\Http\Controllers\MuseController@playlist');
Route::get('/chords','App\Http\Controllers\MuseController@chords');

Route::get('/playlist/{search}', [searchbar::class, 'playlist'])->name('playlist');


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');

// Route::post('/logout', [AuthManager::class, 'logout'])->name('logout');



// Route::post('/logout', function () {
//     Auth::logout();
//     return redirect('/');
// })->name('logout');
//controllers for Likes:
Route::post('back-to-december/{song}/liked', [ LikeController::class,'like'])->middleware('auth')->name('liked');    
Route::post('back-to-december/{song}/unliked', [ LikeController::class,'unlike'])->middleware('auth')->name('unliked');    

Route::get('liked', [ LikeController::class,'show'])->middleware('auth')->name('songlist');    

// Route::post('song/{search}', [ search::class,'view'])->name('searchquery');    
// Route::get('search', [ search::class,'view'])->name('searchlist');    

//songs:
Route::get('/back-to-december', function () {
    return view('songs.back-to-december');
})->name('back-to-december');

Route::get('/flowers', function () {
    return view('songs.flowers');
})->name('flowers');

Route::get('/cruelsummer', function () {
    return view('songs.cruelsummer');
})->name('cruelsummer');

Route::get('/vampire', function () {
    return view('songs.vampire');
})->name('vampire');

Route::get('/nonsense', function () {
    return view('songs.nonsense');
})->name('nonsense');

Route::get('/ceilings', function () {
    return view('songs.ceilings');
})->name('ceilings');

Route::get('/eatyouryoung', function () {
    return view('songs.eatyouryoung');
})->name('eatyouryoung');

Route::get('/onemorelight', function () {
    return view('songs.onemorelight');
})->name('onemorelight');

Route::get('/paralyzed', function () {
    return view('songs.paralyzed');
})->name('paralyzed');

Route::get('/justlikeyou', function () {
    return view('songs.justlikeyou');
})->name('justlikeyou');

Route::get('/willow', function () {
    return view('songs.willow');
})->name('willow');

Route::get('/graveyard', function () {
    return view('songs.graveyard');
})->name('graveyard');

Route::get('/seven', function () {
    return view('songs.seven');
})->name('seven');