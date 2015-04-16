@extends('app')

@section('title')
    Test
@stop

@section('content')


    <h1>About</h1>

    @if (sizeof($people) != 3)
        <h3>People I Like:</h3>
        <ul>
            @foreach ($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>

    @endif

@stop