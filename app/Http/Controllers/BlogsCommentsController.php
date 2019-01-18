<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;
use App\Blog;

class BlogsCommentsController extends Controller
{
    public function store(Blog $blog)
    {

        Comment::create([

            'blog_id' => $blog->id,
            'name' => request('name'),
            'emailid' => request('emailid'),
            'Comment' => request('comment')

        ]);

        return back();
    }
}
