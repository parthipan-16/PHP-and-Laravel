@extends('layouts.app')

@section('content')
<h1> Task List.</h1>
@foreach($tasks as $t)
<div class="card @if($t->isCompleted()) border-success @endif" style="margin: bottom 20px;">
    <div class="card-body">
        <p>
            @if($t ->isCompleted())
            <span class="badge badge-success">Completed</span>
            @endif {{$t->Description}}
        </p>
        @if(!$t ->isCompleted())
        <form action="/task/{{ $t->id }}" method="POST">
            @csrf
            @method('PATCH')
            <button input="submit" class="btn btn-light btn-block">Complete</button>

        </form>
        @else
        <form action="/task/{{ $t->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button input="submit" class="btn btn-danger btn-block">DELETE </button>

        </form>
        @endif
    </div>
</div>
@endforeach
@endsection