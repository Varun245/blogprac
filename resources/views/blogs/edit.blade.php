@extends('layouts.app') 
@section('content')
<br>
<br>
<br>


<form method="POST" action="/blogs/{{$blog->id}}/edit">
  @csrf
  <div class="form-group">
    <label for="title">Title :</label>
    <input type="text" class="form-control" name="title" placeholder="Enter Your Title" value={{$blog->title}}>
  </div>
  <div class="form-group">
    <label for="description">Description :</label>
    <textarea type="text" class="form-control" rows="8" name="description" placeholder="Enter Your Description">{{$blog->description}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  {{-- <form method="POST" action="/blogs/{{$blog->id}}/edit">
    {{ method_field('PATCH') }}
    @csrf
    <div class="form-group">
      <label for="title">Title :</label>
    <input type="text" class="form-control" name="title" value="{{$blog->title}}">
    </div>
    <div class="form-group">
      <label for="description">Description :</label>
      <textarea type="text" class="form-control" rows="8" name="description">{{$blog->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> --}}

@endsection