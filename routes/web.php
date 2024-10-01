<?php

use Illuminate\Support\Facades\Route;

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

