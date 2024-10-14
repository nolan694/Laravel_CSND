<?php

use App\Http\Controllers\ChaaracterController;
use App\Models\Character;
use Illuminate\Support\Facades\Route;
use Nette\Utils\ArrayList;


Route::resource('/characters', ChaaracterController::class);

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/characters/{id}/edit',action: [ChaaracterController::class, 'edit']);

// Route::get('/characters/create',[ChaaracterController::class, 'create']);

Route::get('/home', function () {
    $nom = 'Nolan' ;
    // return view(view: 'home', [
    //     'nom' => $nomutilisateur,
    // ]);
    return view('home', compact('nom'));
});

Route::get('/test', function(){
    $character = Character::find(1);
    dump($character -> user);
});

// Route::get('/characters', [ChaaracterController::class, 'index']);

// Route::patch('characters/{id}', [ChaaracterController::class, 'update']);

// Route::delete('/characters/{id}', [ChaaracterController::class, 'delete']);

// Route::get('/characters/{id}', [ChaaracterController::class, 'show']);
 
// Route::post('/characters', [ChaaracterController::class, 'store']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
