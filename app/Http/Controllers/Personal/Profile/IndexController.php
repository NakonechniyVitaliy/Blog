<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends BaseController
{
    public function __invoke($user)
    {
        $user = User::find($user);
       return view('personal.profile.index', compact('user'));
    }
}
