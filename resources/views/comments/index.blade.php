@extends('layouts.app')

@section('content')

<a href="{{ route("comments.create")}}">create</a>
<h1>Comments</h1>


@if(count($comments)> 0 )

@foreach ($comments as $comment )
    <div class="well">
    <h3><a href="/comments/{{$comment->id}}">{{$comment->comment}}</a></h3>
     <small>Written on {{$comment->created_at}}</small>

     {{--<p>comment count:{{$comment->count()}}</p>--}}

     <tr>
        <td><a href="{{ route('comments.edit',$comment->id)}}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('comments.destroy', $comment->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>

    </div>
@endforeach

@else
<p>No Comment found</p>
@endif


@endsection