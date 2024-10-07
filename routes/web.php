<?php

use App\Models\Character;
use Illuminate\Support\Facades\Route;
use Nette\Utils\ArrayList;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/characters/{id}/edit',function($id){
    $character = Character::find($id);
    return view('edit', compact('character'));
});

Route::get('/characters/create',function(){
    return view('create');
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
Route::patch('characters/{id}', function($id){
    $c = Character::find($id);
    $c -> label = request('label');
    $c -> price = request('price');
    $c -> desc = request('description');
    if(request('image'))  $c -> image_path = request('image');
    $c -> birth_date = request('date');
    $c -> save();
    
    return redirect('/characters/'.$c -> id);

});

Route::delete('/characters/{id}', function($id){
    $c = Character::find($id);
    $c->delete();
    return redirect('/characters')->with('success', 'Character deleted successfully');
});

Route::get('/characters/{id}', function($id){
    $character = Character::find($id);
    return view('show',compact('character'));
});
Route::post('/characters', function(){
    //dd(request('price'));

    // valider la ressource
    $validation = request() -> validate([
        'label' => 'required|string|max:19',
        'price' => 'required|decimal:0,2',
        'description' => 'required|string',
        'image' => 'string',
        'date' => 'required|date',

    ]);

    // créer la nouvelle ressource
    $c = new Character;
    $c -> label = request('label');
    $c -> price = request('price');
    $c -> desc = request('description');
    if(request('image'))  $c -> image_path = request('image');
    $c -> birth_date = request('date');
    $c -> save();

    return redirect('/characters/'.$c -> id);
});