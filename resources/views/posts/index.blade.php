@extends('layouts.app')

@section('content')

<a href="{{ url('/posts/create') }}">create</a>
<h1>Posts</h1>



@if(count($posts)> 0 )

@foreach ($posts as $post )
    <div class="well">
    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
     <small>Written on {{$post->created_at}}</small>

    {{--<p>post count:{{$post->count()}}</p>--}}

     <tr>
        <td><a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('posts.destroy', $post->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
    </div>
@endforeach

@else
<p>No post found</p>
@endif


@endsection