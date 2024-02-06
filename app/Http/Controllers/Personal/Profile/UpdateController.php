<?php

namespace App\Http\Controllers\Personal\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Profile\UpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, $user)
    {
        $data = $request->validated();
        $user = User::find($user);
        $user = $this->service->update($data, $user);

        return redirect()->route('personal.profile.index', $user);
    }
}
