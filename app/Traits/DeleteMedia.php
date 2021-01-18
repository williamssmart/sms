<?php
namespace App\Traits;
use Illuminate\Support\Str;


//  file includes all helper function for chat controller

trait DeleteMedia
{

    public function DeleteMedia($media , $type){
        if($type == 'video'){
          $upload_path = 'media/video'.$media;
          if (file_exists($upload_path)) {
            unlink($upload_path);
          }
        }else{
            $upload_path = 'media/picture/'.$media;
            if (file_exists($upload_path)) {
            unlink($upload_path);
        }
    }
}
}