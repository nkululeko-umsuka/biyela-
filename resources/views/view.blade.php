@extends('layouts.app')

@section('content')
<div class= "container">
    <div class="row">
        <div class="col-md-8">
        <h2>{{$post->title}}</h2>
        <p class="lead">{!!$post->body!!}</p>
        </div>



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


     <div class="col-md-8" id="commentsForm">

            <h1>Nkululeko Comments</h1>

            <form method="POST" action="{{ route('comments.store',$post->id) }}">
                    <div class="form-group">
                            @csrf
                        <label for="comment">Comment</label>
                        <div>
                            <textarea name="comment" cols="150" rows="2"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Comment</button>
                </form>

        </div>
    </div>
</div>


<div class="col-md-8">
<h2>Numnber of comments<span><small>{{$post->commets->count()}}</small></span></h2>
@foreach($post->comments as $comment )
<div class="comment">
    <div class="author">
        <div class="authorName">
        <h3>{{$comment->Name}}</h3>
        <small>Added At: {{$comment->created_at}}</small>

        </div>
    </div>
    <div class="commentBody">
        {{strip_tags($comment->comment)}}
    </div>
</div>
    
@endforeach
</div>






















