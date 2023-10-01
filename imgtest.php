<?php

defined ('DB_HOST') or define('DB_HOST' , 'localhost');
defined ('DB_USER') or define('DB_USER' , 'root');
defined ('DB_PASS') or define('DB_PASS' , '@j1910');
defined ('DB_NAME') or define('DB_NAME' , 'test');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);


$name = mysqli_real_escape_string($_FILES["image"]["name"]);
$image = mysqli_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));

$query = "INSERT INTO `img` VALUES('".$name."','".$image."')";

$result = mysqli_query($link,$query);

if ($result) {
	echo "Inserted";
}
else{
	echo "Not Inserted";
}

?>