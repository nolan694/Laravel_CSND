@extends('layout')

@section('title', content: 'all characters')

@section('main')

    <table>
        <thead>
            <tr>
                <th> ID</th>
                <th> Label</th>
                <th> Price</th>
                <th> Description</th>
                <th> Birth Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($characters as $character)
            <tr>
                <td> {{$character->id}}</td>
                <td> {{$character->label}}</td>
                <td> {{$character->price}}</td>
                <td> {{$character->desc}}</td>
                <td> {{$character->birth_date}}</td>
                <img src="{{$character -> image_path}}" alt="Texte alternatif"  height="150">
                <td><a href="/characters/{{$character -> id}}">More info</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
