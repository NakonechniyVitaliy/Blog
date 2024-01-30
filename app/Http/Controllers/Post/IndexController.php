<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts = Post::paginate(6);
        $random_posts = Post::get()->random(4);
        $most_liked_posts = Post::withCount('mostLikedPost')->orderBy('most_liked_post_count', 'DESC')->get()->take(3);
        $latest_posts = Post::all()->sortByDesc('created_at')->take(4);
       return view('post.index', compact('posts','random_posts', 'most_liked_posts', 'latest_posts'));
    }
}
