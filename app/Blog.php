<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;


class Blog extends Model
{
    protected $guarded=[];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
