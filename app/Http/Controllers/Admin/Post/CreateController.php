<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::All();
        $tags = Tag::All();
       return view('admin.post.create', compact('categories', 'tags'));
    }
}
