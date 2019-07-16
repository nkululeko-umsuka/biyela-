@extends('layouts.app')

@section('content')
<a href="/comments" class="btn btn-default">Go Back</a>
<h1>{{$comment->comment}}</h1>

<small>Written on {{$comment->created_at}}</small>
<div>
    {{$comment->comment}}
</div>




<form method="POST" action="{{ route('comments.store') }}">
    
    <div class="form-group">
        <label for="comment">Comment</label>
        <div>
            <textarea name="comment" cols="150" rows="2"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Comment</button>
</form>


<small>Written on {{$comment->created_at}}</small>
<div>
    {{$comment->comment}}
</div>
@endsection