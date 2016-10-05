<?php
$dir    = './photos-gallery/';
$files = scandir($dir);


$index = 1;
foreach ($files as &$value) {
if ((strpos($value, '.') == false) && strlen($value)> 2) {
    //$size = getimagesize($dir .$value);
    //echo "<img alt='" .$value ."' src='" .$dir .$value ."' width='" .$size[0]/10 ."' height='" .$size[1]/10 ."' class='creations_med' /> ";

    echo "<div class='gallery-folder'>\n";
    echo '<a class="gallery-title btn btn-primary" href="#gc_' .$index .'">' .$value  .'</a>';
    echo '<div id="gc_' .$index .'" style="display:none;" class="gallery-container"><h2>' .$value .'</h2>';
        //loop logic here
    $subdir    = './photos-gallery/'.$value .'/';
    $photos = scandir($subdir); 
    $idx = 1;
    foreach ($photos as &$val) {
        if (strpos($val, '_resize') !== false) {
            $fullpic = str_replace("_resize","",$val);
            echo '<a href="' .$subdir .$fullpic .'" data-ngthumb="' .$subdir .$val .'" data-ngdesc="'.$value .'">' .$value .' ' .$idx .'</a>';
            $idx = $idx +1;
        }
    
        
    }
    
    echo "</div>\n";
    echo "</div>";
    
    $index = $index +1;
    }

    
    
}

