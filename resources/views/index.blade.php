@extends('layout')

@section('title', content: 'all characters')



@section('main')
<div>
    <a href="/characters/create"><button id = "edit">create</button></a>
</div>
    <table>
        <thead>
            <tr>
                <th> ID</th>
                <th> Label</th>
                <th> Price</th>
                <th> Description</th>
                <th> Birth Date</th>
                <th> Image</th>
                <th> Autre</th>

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
                <td><img src="{{$character -> image_path}}"  height="150"></td>
                <td>
                    <div>
                        <a href="/characters/{{$character -> id}}">More info</a>
                    </div>

                    <div>
                        <form action="/characters/{{$character -> id}}" method="post">
                            @csrf
                            @method('delete')
                            <button id = "delete">delete</button>
                        </form>
                    </div>

                    <div>
                        <a href="/characters/{{$character -> id}}/edit"><button id = "edit">edit</button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
