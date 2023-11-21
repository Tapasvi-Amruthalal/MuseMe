<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\search;
use Illuminate\Http\Request;
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



Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');


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