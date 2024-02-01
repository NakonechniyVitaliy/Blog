<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public $service;

    public function __construct(ProfileService $service)
    {
        $this->service = $service;
    }
}
