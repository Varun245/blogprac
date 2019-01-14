<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs=Blog::paginate(10);
        return view('blogs.welcome',compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store()
    {
        Blog::create([
            'title'=>request('title'),
            'description'=>request('description')
        ]);
        // $blog=new Blog();
        // $blog->title=request('title');
        // $blog->description=request('description');
        // $blog->save();
        return redirect('/blogs');
    }

    public function show(Blog $blog)
    {
         //return $blog;
        
         return view('blogs.show',compact('blog'));

    }

}

