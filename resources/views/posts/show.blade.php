@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>

<small>Written on {{$post->created_at}}</small>
<div>
    {{$post->body}}
</div>

<form method="POST" action="{{ route('post.comment', $post->id)}}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name"/>
        </div>
    <div class="form-group">
        <label for="comment">Comment</label>
        <div>
            <textarea name="comment" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>

 </form> 

<small>Written on {{$post->created_at}}</small>



<h3>List Of Comment on a Post:</h3>
 

{{-- @if(count($comments)>0)
@foreach($comments->all() as $comment)
<p>{{$comment->comment}}</p>
@endforeach
@else
<p>No Post Available</p>
@endif --}}
{{--<p>comment count:{{$comment->count()}}</p>--}}
    @foreach ($comment as $c)
        @if ($post->id == $c->post_id)
        
      <p>Name :{{ $c->name }}</p>
            <p>comment:  {{ $c->comment }}</p><br>
            
        @endif

        
@endforeach

@endsection