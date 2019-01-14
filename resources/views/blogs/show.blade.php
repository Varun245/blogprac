@extends('layout')




@section('contents')
<br>
<br>
<br>


<div class="container-fluid">

    @csrf
         <div class="form-group">
          <label for="title">Title :</label>
          <input type="text" class="form-control" name="title" value="{{$blog->title}}">
        </div>
        <div class="form-group">
          <label for="description">Description :</label>
          <textarea type="text" class="form-control" rows="8" name="description" placeholder="Enter Your Description">{{$blog->description}}</textarea>
        </div>
       
      

        <div class="card">
                
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                  <form method="POST" action="/blogs">
                    @csrf
                    <div class="form-group">
                            <label for="title">Name :</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Your Name">
                          </div>
                          <div class="form-group">
                                  <label for="title">Email id:</label>
                                  <input type="email" class="form-control" name="email" placeholder="Enter Your Email Id">
                                </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
              <br>

              @foreach ($blog->comments as $comment)
                  
              <div class="card">

              
                    
                      <h4 class="mt-0">{{$comment->name}}</h4>
                     <p>{{$comment->Comment}}</p>
                   
                

              </div> 
              <br>  

              @endforeach
       


</div>

    
@endsection