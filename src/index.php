<?php

if(isset($_POST['calculate'])){

$length=$_POST['num1'];
$width=$_POST['num2'];
$area;
$peri;

$area=$length*$width;
$perimeter=2*($length+$width);


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>area of rectangle</title>
</head>
<body>

<form action="index.php" method="post">
 
length of rectangle:<input type="text" name="num1"><br><br>
width of rectangle:<input type="text" name="num2"><br><br>

<input type="submit" name="calculate" value="calculate area and perimeter"><br><br>


<p>
    area is <?php
   echo $area;
    ?> sq. mtr <br><br>
    perimeter is  <?php
  echo  $perimeter;
   ?> mtr
</p>

</form>
  
</body>
</html>