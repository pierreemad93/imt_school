<?php

namespace  App\Traits;

trait  uploadImageTrait{

    function  saveimage($photo , $folder){
        //save photo in folder
        $file_extension= $photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path= $folder;
        $photo->move($path , $file_name);
        return $file_name;
    }

}
