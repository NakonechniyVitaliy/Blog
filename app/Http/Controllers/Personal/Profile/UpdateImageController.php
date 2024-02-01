<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Profile\UpdateImageRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateImageController extends BaseController
{
    public function __invoke(UpdateImageRequest $request, $user)
    {
        $data = $request->validated();
        $user = User::find($user);
        $user = $this->service->update_image($data, $user);

        return redirect()->route('personal.profile.index');
    }
}
