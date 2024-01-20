<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['users_count'] = User::All()->count();
        $data['tags_count'] = Tag::All()->count();
        $data['posts_count'] = Post::All()->count();
        $data['categories_count'] = Category::All()->count();

       return view('admin.main.index', compact('data'));
    }
}
