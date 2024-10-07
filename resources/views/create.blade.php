@extends('layout')

@section('title', 'création character')

    @section('main')
    
    <form action="/characters" method="post">
    @csrf
        <div>
            <label for="label">label :</label>
            <input type="text" id="label" name="label" value = "{{old('label')}}">
            @error('label') <p>{{$message}}</p> @enderror
        </div>

        <div>
            <label for="price"> price :</label>
            <input type="text" id="price" name="price" value = "{{old('price')}}">
            @error('price') <p>{{$message}}</p> @enderror
        </div>

        <div>
            <label for="description">description :</label>
            <input type="text" id="description" name="description" value = "{{old('description')}}">
            @error('description') <p class="text-red-500">{{$message}}</p> @enderror
        </div>

        <div>
            <label for="image">image :</label>
            <input type="text" id="image" name="image" value = "{{old('image')}}">
            @error('image') <p>{{$message}}</p> @enderror
        </div>

        <div>
            <label for="date">date :</label>
            <input type="date" id="date" name="date" value = "{{old('date')}}">
            @error('date') <p>{{$message}}</p> @enderror
        </div>
        <button>valider</button>
    </form>
    @endsection