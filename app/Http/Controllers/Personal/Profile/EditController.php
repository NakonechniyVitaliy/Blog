<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(User $user)
    {
        $user = User::find($user);
       return view('personal.profile.edit', compact('user'));
    }
}
