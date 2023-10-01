<?php
   
defined ('DB_HOST') or define('DB_HOST' , 'localhost');
defined ('DB_USER') or define('DB_USER' , 'root');
defined ('DB_PASS') or define('DB_PASS' , '@j1910');
defined ('DB_NAME') or define('DB_NAME' , 'test');

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      //$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         //move_uploaded_file($file_tmp,"images/".$file_name);
         //echo "Success";
      }else{
         print_r($errors);
      }

$file_name = mysqli_real_escape_string($_FILES['image']['name']);
$image = mysqli_real_escape_string(file_get_contents($_FILES['image']['tmp_name']));

$query = "INSERT INTO `img` VALUES('".$file_name."','".$image."')";

$result = mysqli_query($link,$query);

if ($result) {
	echo "Inserted";
}
else{
	echo "Not Inserted";
}

   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
      
   </body>
</html>