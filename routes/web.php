<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\WelcomeController;

// Kirjautuminen
/*
Route::get('/', function () {
    return redirect('/login');
});
*/


//Route::get('/login', function () {
//    return view('');
//});

//Route::post('/login', [CheckController::class, 'checkUser']);
#-

Route::get('/', function () {
    return view('sivut.kirjautuminen');
});

// Aloitus
Route::get('/sihteeri', function () {
    return view('sivut.sihteeri');
});

Route::get('/tuomari', function () {
    return view('sivut.tuomari');
});

Route::get('/paakayttaja', function () {
    return view('sivut.paakayttaja');
});
#-


// Ajanotto
Route::get('/ajanotto', function () {
    return view('sivut.ajanotto');
});
#-


#--

use App\Livewire\Counter;

Route::get('/counter', Counter::class);



//Route::get('/process', 'Redirect@toRoute');


// ex. test
/*
use App\Http\Controllers\PostController;

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
*/

/*
//another ex.
use App\Models\User;

Route::get('/user/{user}', function (User $user) {
    return $user;
});
*/

/*
Route::get('/test', function () {
    DB::table('kayttajat')->get();

    dd(DB::getQueryLog());
});
*/