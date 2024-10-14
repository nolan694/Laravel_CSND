<?php

namespace App\Http\Controllers;
use App\Models\Character;


use Illuminate\Http\Request;

class ChaaracterController extends Controller
{
    public function index(){
        $characters = Character::all() ;
    //dd($characters);
    return view('index',compact('characters'));
    }

    public function show(int $character){
        return view('edit', compact('character'));
    }
    public function create(){
        return view('create');
    }
    public function store(){
        
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
        
    }

    public function edit($character){
        return view('edit', compact('character'));
    }

    public function update($character){
        $character -> label = request('label');
        $character -> price = request('price');
        $character -> desc = request('description');

        if(request('image'))  $character -> image_path = request('image');
        $character -> birth_date = request('date');
        $character -> save();
    
    return redirect('/characters/'.$c -> id);
    }

    public function destroy($character){
        $character->delete();
        return redirect('/characters')->with('success', 'Character deleted successfully');
    }
}
