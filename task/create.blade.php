@extends('layouts.app')

@section('content')
<h4> New Task started.</h4>
@if($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


<form method="POST" action="/task">
    <div class="form-group">
        @csrf
        <label for="Description">Task Description </label>
        <input class="form-control" name="Description" />
    </div>

    <!-- @error('Description')
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @enderror -->
    <div class="form-group">
        <button type="submit" class=" btn btn-primary">CreateTask</button>

    </div>
</form>
@endsection