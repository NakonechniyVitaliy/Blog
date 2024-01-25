<?php

namespace App\Http\Controllers\Personal\Like;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $liked_posts = auth()->user()->likedPost;
       return view('personal.like.index', compact('liked_posts'));
    }
}
