@extends('layout')




@section('contents')
<br>
<br>
<br>

@foreach ($blogs as $blog )
    


<h4 class="mt-4"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h4>

<!-- Post Content -->
<hr>
<p>{{$blog->description}}</p>
<hr>

@endforeach

    
@endsection