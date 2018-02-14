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

    <br>
    <br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-default">Edit</a>

        <!--delete -->
        {!! Form::open(['action' => ['TodosController@destroy',$todo->id],
        'method'=>'post',
        'class'=>'float-xs-right']) !!}

            <!--hidden field for method=put-->
            {{Form::hidden('_method','DELETE')}}
            {{Form::bsSubmit('delete me',['class'=>'btn btn-danger'])}}

        {!! Form::close() !!}

    @endsection