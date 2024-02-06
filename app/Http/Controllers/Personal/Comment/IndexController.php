<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Post;

class IndexController extends Controller
{
    public function __invoke()
    {
        $commented_posts = auth()->user()->comentedPost;

       return view('personal.comment.index',compact('commented_posts'));
    }
}
