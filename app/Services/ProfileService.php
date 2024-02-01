<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProfileService
{
    public function update($data, $user)
    {
        try {
            Db::beginTransaction();
            $user->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $user;
    }

    public function update_image($data, $user)
    {
        try {
            Db::beginTransaction();
            $data['user_image'] = Storage::disk('public')->put('/images', $data['user_image']);
            $user->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $user;
    }
}
