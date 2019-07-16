@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

<a href="{{ url('/posts') }}">index</a>


@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif


<form method="POST" action="{{ route('posts.store') }}">
    <div class="form-group">
        @csrf
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title"/>
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <div>
            <textarea name="body" cols="60" rows="10"></textarea>
        </div>
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    

@endsection