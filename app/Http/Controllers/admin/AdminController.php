<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected function uploadImages($file)
    {
        $year = Carbon::now()->year;
        $imagePath = "/upload/images/{$year}/";
        $filename = $file->getClientOriginalName();

        $file = $file->move(public_path($imagePath) , $filename);

        $sizes = ["300" , "600" , "900"];
        $url['images'] = $this->resize($file->getRealPath() , $sizes , $imagePath , $filename);
        $url['thumb'] = $url['images'][$sizes[0]];

        return $url;
    }

//    private function resize($path , $sizes , $imagePath , $filename)
//    {
//        $images['original'] = $imagePath . $filename;
//        foreach ($sizes as $size) {
//            $images[$size] = $imagePath . "{$size}_" . $filename;
//
//            Image::make($path)->resize($size, null, function ($constraint) {
//                $constraint->aspectRatio();
//            })->save(public_path($images[$size]));
//        }
//
//        return $images;
//    }
}
