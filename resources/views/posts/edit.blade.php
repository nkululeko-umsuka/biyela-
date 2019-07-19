@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit post
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif


  
<form  action="{{route('posts.update',$post->id)}}" method="post" role="form">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="_method" value="PUT">
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group{{$errors->has('title')?'has-error':''}}">
    <strong>Title</strong>
    <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="title">
    <span class="text-danger">{{$errors->first('title')}}</span>
    </div>        
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('body')?'has-error':''}}">
            <strong>Body</strong>
            <input type="text" name="body" value="{{ $post->body }}" class="form-control" placeholder="body">
            <span class="text-danger">{{$errors->first('body')}}</span>
</div>
<button type="submit" class="btn btn-primary">update</button>
</form>
   
  </div>
</div>
@endsection
