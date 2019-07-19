@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
        <div class="pull-left">

            <h1>Posts</h1>

           
        </div>
        <div class="pull-right">
                
                <a href="{{ route('posts.create') }}"  class="btn btn-success">Create New Posts</a>
        </div>
    </div>
</div>
@if($message=Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
            <td>{{$post->id}}</td>
            
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
            <form action="{{route('posts.destroy',$post->id)}}" method="post" role="form">
               
            <a href="{{ route('posts.show',$post->id)}}"  class="btn btn-info">Show</a>
            <a href="{{ route('posts.edit',$post->id)}}"  class="btn btn-primary">edit</a>
             

            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        
            

          
            {{--<input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Delete</button>--}}
           
            </form>
           
        </td>
    </tr>
    @endforeach
</tbody>
            
    </table>
</div>

@endsection






    {{--<p>post count:{{$post->count()}}</p>--}}

     {{--<tr>
        <td><a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{ route('posts.destroy', $post->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>--}}
    