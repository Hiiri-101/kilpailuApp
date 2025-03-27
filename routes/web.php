<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

/*
Route::get('/note', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note', [NoteController::class, 'store'])->name('note.storage');
Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
Route::post('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/{id}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');
*/

Route::resource('note', NoteController::class);

// Kirjautuminen
/*
Route::get('/', function () {
    return redirect('/login');
});
*/


//Route::get('/login', function () {
//    return view('kirjautuminen.login');
//});

//Route::post('/login', [CheckController::class, 'checkUser']);
#-


// Aloitus
Route::get('/sihteeri', function () {
    return view('aloitus.sihteeri');
});

Route::get('/tuomari', function () {
    return view('aloitus.tuomari');
});

Route::get('/paakayttaja', function () {
    return view('aloitus.paakayttaja');
});
#-


// Ajanotto
Route::get('/ajanotto', function () {
    return view('demo.ajanotto');
});
#-



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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing