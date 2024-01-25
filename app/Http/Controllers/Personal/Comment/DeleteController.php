<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Admin\Post\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Tag;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    public function __invoke(Comments $comment)
    {
        $comment->delete();
        return redirect()->route('personal.comment.index');
    }
}
