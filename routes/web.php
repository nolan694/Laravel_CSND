<?php

use App\Models\Character;
use Illuminate\Support\Facades\Route;
use Nette\Utils\ArrayList;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $nom = 'Nolan' ;
    // return view(view: 'home', [
    //     'nom' => $nomutilisateur,
    // ]);
    return view('home', compact('nom'));
});

Route::get('/characters', function(){
    $characters = Character::all() ;
    //dd($characters);
    return view('index',compact('characters'));

});

Route::get('/characters/',function(){



});