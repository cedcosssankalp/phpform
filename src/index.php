
<!DOCTYPE html>

<head>
	<title>PHP - Calculate Electricity Bill</title>
</head>

<?php
$amt_str = $amt = '';
if (isset($_POST)) {
    $units = $_POST['units'];
        $amt = calculate_bill($units);
        $amt_str = 'Total amount of ' . $units .' units'. ' =' . $amt;
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    if($units <= 50) {
        $bill = $units * 3.50;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * 3.50;
        $remaining_units= $units - 50;
        $bill = $temp + ($remaining_units * 4.00);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * 4.00);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * 5.20);
    }
    else {
        $temp = (50 * 3.5) + (100 * 4.00) + (100 * 5.20);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * 6.50);
    }
    return $bill;
}

?>

<body>
	<div id="wrapper">
		<h1>Php - Calculate Electricity Bill</h1>

		<form action="" method="post" >
            	<input type="number" name="units" id="units" placeholder="Please enter no. of Units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $amt_str; ?>
		</div>
	</div>
</body>
</html>