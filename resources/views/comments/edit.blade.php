@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit comment
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




    <form method="GET" action="{{ route('comments.update', $comment->id) }}">
        <div class="form-group">
                @csrf
                
            <label for="comment">Comment</label>
            <div>
                <textarea name="comment" cols="150" rows="2"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>    
  </div>
</div>
@endsection
