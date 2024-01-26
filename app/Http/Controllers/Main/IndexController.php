<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $random_posts = Post::get()->random(4);
        $most_liked_posts = Post::withCount('mostLikedPost')->orderBy('most_liked_post_count', 'DESC')->get()->take(4);
//        dd($most_liked_posts);
       return view('main.index', compact('posts','random_posts', 'most_liked_posts'));
    }
}
