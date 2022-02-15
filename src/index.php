<?php

if (isset($_FILES['image'])){
 echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];


   

  
if($_FILES['image']['type']=='image/png' && $_FILES['image']['size']<(2*1024*1024)){
   if (move_uploaded_file($file_tmp,"uploads/".$file_name)){
       echo "successfully added";
   }
   else {
       echo "not uploaded";
   }
}

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="" method="POST" enctype="multipart/form-data">

<input type="file" name="image"/><br><br>
<input type="submit"/>
</form>
  
</body>
</html>