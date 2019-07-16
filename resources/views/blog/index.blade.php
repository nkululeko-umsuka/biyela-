<h1>Lastest posts about Nkululeko Biyela</h1>
<hr>


  <a href="{{ url('/home') }}">Home</a>
@foreach($blogs as $blog)
<h1>{{$blog->data}}</h1>

<p>{{$blog->body}}<p>
@endforeach
