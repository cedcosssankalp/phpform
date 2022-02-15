<!DOCTYPE HTML>
<?php
$result='';
if(isset($_POST)){
$n=$_POST['sa'];
$num1=$_POST['num1'];
$num2=$_POST['num2'];
}
switch($n){
    case '+':
        $result=$num1+$num2;
        break;

    case '-':
        $result=$num1-$num2;
        break;

    case '*':
         $result=$num1*$num2;
        break; 
            
    case '/':
        $result=$num1/$num2;
        break;       

}
?>
<html>  
<body>
    <div id="wrapper">
    <form action="index.php" method="post">
        Number1:<input type="text" name="num1" value="<?php echo "$num1"?>"><br>
        Number2:<input type="text" name="num2" value="<?php echo "$num2"?>"><br>
        results:<input type="text" name="calculate" value="<?php echo "$result"?>"><br>
        <input type="submit" value="+" name="sa">
        <input type="submit" value="-" name="sa">
        <input type="submit" value="*" name="sa">
        <input type="submit" value="/" name="sa">
</form>
</div>
</body>
</html>