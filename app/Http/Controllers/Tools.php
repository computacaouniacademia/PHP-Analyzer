<?php

namespace SegWeb\Http\Controllers;

class Tools extends Controller
{
    public function contains($needle, $haystack) {
        return strpos($haystack, $needle) !== false;
    }

    // function listFolderFiles($dir) {
    //     $ffs = scandir($dir);

    //     unset($ffs[array_search('.', $ffs, true)]);
    //     unset($ffs[array_search('..', $ffs, true)]);

    //     echo '<ul>';
    //     foreach($ffs as $ff){
    //         echo '<li><a href='.$dir.'/'.$ff.'>'.$ff.'</a>';
    //         if(is_dir($dir.'/'.$ff)) listFolderFiles($dir.'/'.$ff);
    //         echo '</li>';
    //     }
    //     echo '</ul>';
    // }
}
