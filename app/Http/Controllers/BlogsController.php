<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
use App\Comment;


class BlogsController extends Controller
{

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
        
        $blogs = Blog::where('owner_id',auth()->id())->get();
        return view('blogs.welcome', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store()
    {
        
        $validated=request()->validate([
            'title'=>['required','min:3'],
            'description'=>['required','max:1000']
        ]);

        Blog::create($validated + ['owner_id' => auth()->id()]);

        return redirect('/blogs');
    }

    // public function show(Blog $blog)
    // {
    //    $this->authorize('view',$blog);

    //     $commentsForPaginate = \App\Blog::find($blog->id)->comments()->orderBy('created_at', 'DESC')->paginate(2);

    //     return view('blogs.show', compact('blog', 'commentsForPaginate'));

    // }

    public function edit(Blog $blog)
    {
        $this->authorize('update',$blog);
        return view('blogs.edit',compact('blog'));
       
    }

    public function update(Blog $blog)
    {
       
        $this->authorize('update',$blog);
        $blog->title=request('title');

        $blog->description=request('description');

        $blog->owner_id=auth()->id();

        $blog->save();  



        return back();
        
    }

    public function showall(Blog $blog)
    {
       $blog=Blog::all();

       return view('blogs.allBlogs',compact('blog'));
    }

    public function comment(Blog $blog)
    {
       $blog=Blog::find($blog->id);

       return view('blogs.comments',compact('blog'));
    }

    public function viewComment(Blog $blog)
    {
       
        $this->authorize('view',$blog);

     $comments = Blog::find($blog->id)->comments()->orderBy('created_at', 'DESC');

      return view('blogs.viewComment', compact('blog', 'comments'));
    }
}

