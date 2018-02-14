@extends('layouts.app')

@section('content')
<a class="btn btn-default" href="/"><< Back</a>


    <h1>{{$todo->text}}</h1>

    <h3>
    <!--will automatically call the show method -->
    <a href="todo/{{$todo->id}}">
       {{$todo->text}}
    </a>

    <span class="badge badge-pill badge-warning">
    {{$todo->due}}
    </span>

    </h3>

    <p>{{$todo->body}}</p>
    @endsection