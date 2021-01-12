<?php
namespace App\Traits;
use Illuminate\Support\Str;


//  file includes all helper function for chat controller

trait UploadImage
{

    public function UploadImage($image){
        $image_name = Str::random(10);
        $extention = Str::lower($image->getClientOriginalExtension());
        $upload_path = 'media/profile/';
        $image_full_name = $image_name. '.' . $extention;
        $image_url = $upload_path. $image_full_name;
        
        $image->move($upload_path,$image_full_name);
            return $image_url;
        
    }
}