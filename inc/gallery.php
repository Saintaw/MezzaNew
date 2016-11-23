<?php
require_once('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*Find Events and display the 1st Thumbnail*/


$sql = "SELECT id, name FROM events";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $eventname = $row["name"];
        $eventid = $row["id"];
        echo "<div class='event_title'><h4>" . $eventname . "</h4>";
        
        //check if there is a picture defined in the db
        $getpic_sql = "SELECT id, file from photogallery where event = " .$row["id"] . " LIMIT 1";
        $getpic = $conn->query($getpic_sql);
        if ($getpic->num_rows > 0) {
            while($r = $getpic->fetch_assoc()) { 
              $file = $r["file"];
              //create thumbnail name
              $thumb = str_replace(".jpg", "_resize.jpg", $file);
              
              echo "<div class='thumb_container'>";
              echo '<a data-eventname="' .$eventname .'" data-event="' .$eventid .'" href="#myModal" class="gallery-hook">';
              echo '<img src="/photos-gallery/' .$eventname .'/' .$thumb  .'" />';
              echo '</a>';
              echo "</div>";
              
            }    
        }        
    echo "</div>";    
    }
} else {
    echo "Warning: No galleries available";
}








$conn->close();


/* older version below:
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
*/
