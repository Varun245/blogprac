@extends('layouts.app') 
@section('content')
<br>
<br>
<br>@foreach ($blog as $blog )
<div class="card">

    <h5 class="card-header"><a href="/blogs/allBlogs/{{$blog->id}}/comments">{{$blog->title}}</a><br>
        <font size="-1"> Posted On {{$blog->created_at}}</font>
    </h5>

    <div class="card-body">

        <div class="form-group">
            <textarea class="form-control" rows="8" name="comment" disabled>{{$blog->description}}</textarea>
        </div>

    </div>

</div>
<br> @endforeach

@endsection