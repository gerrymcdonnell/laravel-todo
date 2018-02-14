@extends('layouts.app')

@section('content')

<a class="btn btn-default" href="/todo/{{$todo->id}}}}"> back</a>

    <h1>Edit Todo</h1>

    {!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'post']) !!}

        {{Form::bsText('text',$todo->text)}}

        {{Form::bsTextArea('body',$todo->body)}}

        {{Form::bsText('due',$todo->due)}}

        //hidden field for method=put
         {{Form::hidden('_method','PUT')}}

        {{Form::bsSubmit('Edit me',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}

@endsection