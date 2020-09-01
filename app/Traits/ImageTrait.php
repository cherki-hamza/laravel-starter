
<?php

namespace App\Traits;

// this is a class trait for store images
trait ImageTrait {

    // function to store images and store it in the database
    function saveImages($photo,$folder){
        $file_extension = $photo->extension();
        $file_name = time() . '.' . $file_extension;
        $path = $folder;
        $db_path = $path .'/'. $file_name;
        $photo->move($path,$file_name);

        return $db_path;
    }

}

?>
