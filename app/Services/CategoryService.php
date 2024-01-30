<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CategoryService
{
    public function store($data)
    {
        try {
            $data['category_image'] = Storage::disk('public')->put('/images', $data['category_image']);
            Category::FirstOrCreate($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(404);
        }
    }


    public function update($data, $category)
    {
        try {

            $data['category_image'] = Storage::disk('public')->put('/images', $data['category_image']);
            $category->update($data);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            abort(500);
        }

        return $category;
    }
}
