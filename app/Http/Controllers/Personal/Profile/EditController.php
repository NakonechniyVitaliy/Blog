<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(User $user)
    {
       return view('personal.profile.edit', compact('user'));
    }
}
