<?php

$username="web";$password="web";$database="mezzanew";$servername="127.0.0.1";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 






$sql = "SELECT id, name FROM events";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    echo "<h1>Existing Events</h1>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}



echo "<hr />";    
    
    
$dir    = './photos-gallery/';
$files = scandir($dir);


$index = 1;
foreach ($files as &$value) {
if ((strpos($value, '.') == false) && strlen($value)> 2) {
    echo '<br> <strong>' .$value  .' </strong>';
    //Check to see if it already exists
    $exists_sql = "SELECT id from EVENTS where name = '" .mysqli_real_escape_string($conn,$value) ."'";
    $exists = $conn->query($exists_sql);
    if ($exists->num_rows > 0) {
            echo " Already exists with";
                while($row = $exists->fetch_assoc()) {
                    echo " id: " . $row["id"];
                    $curr_event = $row["id"];
                    }
            
            }
        else {
            echo " Creating event...";
            $insert_sql = "insert into EVENTS (name) VALUES ('" .mysqli_real_escape_string($conn,$value) ."')";
                if (!mysqli_query($conn,$insert_sql)) {
                  die('Error: ' . mysqli_error($conn));
                }            
        }    
    
        echo "<br />";
    
    $subdir    = './photos-gallery/'.$value .'/';
    $photos = scandir($subdir); 
    $idx = 1;
    foreach ($photos as &$val) {
        if (strpos($val, '_resize') !== false) {
            $fullpic = str_replace("_resize","",$val);
            
            echo 'Photo: ' .$fullpic .'<br>';
            
            //Check to see if it already exists
            $file_exists_sql = "SELECT id from photogallery where file = '" .mysqli_real_escape_string($conn,$fullpic) ."' and event = " .$curr_event;
            $file_exists = $conn->query($file_exists_sql);
            if ($file_exists->num_rows > 0) {
                    echo " Already exists!";
                    }
                else {
                    echo " Creating image record...";
                    $insert_file_sql = "insert into photogallery (event,file,thumbnail) VALUES ('$curr_event','" .mysqli_real_escape_string($conn,$fullpic) ."','" .mysqli_real_escape_string($conn,$val) ."')";
                    if (!mysqli_query($conn,$insert_file_sql)) {die('Error: ' . mysqli_error($conn) ."<br>" .$insert_file_sql);}            
                } 

            
            
            
            
            
            //echo '<a href="' .$subdir .$fullpic .'" data-ngthumb="' .$subdir .$val .'" data-ngdesc="'.$value .'">' .$value .' ' .$idx .'</a>';
            $idx = $idx +1;
        }
    
        
    }
    
    echo "</div>\n";
    echo "</div>";
    
    $index = $index +1;
    }
}
$conn->close();