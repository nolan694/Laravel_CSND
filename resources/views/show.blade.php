@extends('layout')

@section('title', $character -> label . "'s page")


@section('main')

<ul>
    <li>{{ $character-> user->name}}</li>
    <li>{{ $character -> label}}</li>
    <li>{{ $character -> price}}</li>
    <li>{{ $character -> desc}}</li>
    <li>{{ $character -> birth_date}}</li>
    <img src="{{$character -> image_path}}" alt="Texte alternatif"  height="150">
</ul>

@endsection






