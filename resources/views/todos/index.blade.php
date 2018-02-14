@extends('layouts.app')

@section('content')
    <h1>to dos</h1>
    @if(count($todos)>0)
        @foreach($todos as $todo)
        <div class="card card-body bg-light">

            <h3>
            {{$todo->text}}

            <span class="badge badge-pill badge-warning">
            {{$todo->due}}
            </span>

            </h3>

        </div>
        @endforeach
    @endif
@endsection