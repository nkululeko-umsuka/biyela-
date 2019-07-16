@extends('layouts.app')

@section('content')
<h1>Create Comment</h1>

<a href="{{ url('/comments') }}">index</a>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif

  

<form method="POST" action="{{ route('comments.store') }}">
    <div class="form-group">
            @csrf
            
        <label for="comment">Comment</label>
        <div>
            <textarea name="comment" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>
</form>
@endsection