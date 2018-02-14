@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>

    {!! Form::open(['action' => 'TodosController@store','method'=>'post']) !!}

        <div class="form-group">
            {{Form::label('name', 'name')}}
            {{ Form::text('name', '',['class'=>'form-control','placeholder'=>'enter name']) }}
        </div>


        <div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        </div>


    {!! Form::close() !!}

@endsection