<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends BaseController
{
    public function __invoke()
    {
       return view('personal.profile.index');
    }
}
