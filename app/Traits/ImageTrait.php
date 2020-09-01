
<?php

namespace App\Traits;

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
