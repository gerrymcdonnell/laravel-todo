@extends('layouts.app')

   @section('content')
       <h1>to dos</h1>
       @if(count($todos)>0)
           @foreach($todos as $todo)
           <div class="card card-body bg-light">

               <h3>
               <!--will automatically call the show method -->
               <a href="todo/{{$todo->id}}">
                   {{$todo->text}}
               </a>

               <span class="badge badge-pill badge-warning">
               {{$todo->due}}
               </span>

               </h3>

               <span class="badge badge-pill badge-primary">
                   {{ \Carbon\Carbon::parse($todo->created_at)->format('d/m/Y')}}
               </span>

           </div>
           @endforeach
       @endif
   @endsection