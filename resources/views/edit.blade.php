@extends('layout')

@section('title', 'modification character')

    @section('main')
    
    <form action="/characters/{{$character -> id}}" method="post">
    @csrf
    @method('patch')

        <label for="label">label :</label>
        <input type="text" id="label" name="label" value ="{{$character -> label}}" required>

        <label for="price"> price :</label>
        <input type="text" id="price" name="price" value = "{{$character -> price}}" required>

        <label for="description">description :</label>
        <input type="text" id="description" name="description"  value = "{{$character -> desc}}"required>

        <label for="image">image :</label>
        <input type="text" id="image" name="image" value = "{{$character -> image_path}}">

        <label for="date">date :</label>
        <input type="date" id="date" name="date"  value = "{{$character -> birth_date}}" required>

        <button>valider</button>
    </form>
    @endsection