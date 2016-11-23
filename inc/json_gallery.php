<?php
require_once('config.php');
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST["id"]))
    {
    $id = $_POST["id"];
    }
else
    {
    $id = 3;//default
    }


$rows = array();
//check if there is a picture defined in the db
$getpic_sql = "SELECT pa.id as alt, pa.file as url, CONCAT(ev.name, ' #', pa.id) as caption, 'Compagnie Mezza Luna' as copyright, pa.thumbnail as thumbnail, CONCAT('/photos-gallery/',ev.name, '/') as path";
$getpic_sql .= " from photogallery pa, events ev";
$getpic_sql .= " WHERE pa.event = ev.id";
$getpic_sql .= " and pa.event = " .mysqli_real_escape_string($conn,$id);

//http://mezzanew.be/photos-gallery/Nuinotenacht/A_resize.jpg

//$getpic_sql = "SELECT id as ID, file as src, thumbnail as srct, id as title from photogallery where event = " .mysqli_real_escape_string($conn,$id);

$getpic = $conn->query($getpic_sql)
        or die($getpic_sql);
if ($getpic->num_rows > 0) {
    while($r = $getpic->fetch_assoc()) { 
    
    $alt = $r["alt"];
    $url = $r["url"];
    $caption = $r["caption"];


    //$rows['pictures'][] = array('alt' => "$alt", 'url' => "$url", 'caption' => "$caption $alt", 'copyright' => "Compagnie Mezza Luna");      
    $rows[]=$r;  
      
    } //end loop
   
print json_encode($rows);
} //end count 0

/*
01
	{
02
	  "pictures": [
03
	    {
04
	      "url": "1.jpg",
05
	      "alt": "Alt 1",
06
	      "caption": "Caption 1",
07
	      "copyright":"Copyright 1"
08
	    },
09
	    {
10
	      "url": "2.jpg",
11
	      "alt": "Alt 2",
12
	      "caption": "Caption 2",
13
	      "copyright":"Copyright 2"
14
	    },
15
	    {
16
	      "url": "3.jpg",
17
	      "alt": "Alt 3",
18
	      "caption": "Caption 3",
19
	      "copyright":"Copyright 3"
20
	    }
21
	  ]
22
	}

 */