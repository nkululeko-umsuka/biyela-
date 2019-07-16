@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>

<small>Written on {{$post->created_at}}</small>
<div>
    {{$post->body}}
</div>




<form method="POST" action="{{ route('post.comment')}}">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="body">Comment</label>
        <div>
            <textarea name="body" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>
    {{-- <a href="{{route('post.comment')}}" class="btn btn-primary">Comment</a> --}}
</form>


<small>Written on {{$post->created_at}}</small>

@endsection