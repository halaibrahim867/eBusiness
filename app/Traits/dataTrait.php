<?php
namespace App\Traits;

Trait dataTrait{

    function saveImage($photo, $subfolder)
    {
        //save photo in folder
        $file_extension = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = $subfolder;
        $photo->move($path, $file_name);

        return $file_name;

    }

}
