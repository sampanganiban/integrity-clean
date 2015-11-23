<?php
	
	// Get variables from the quote page
	$staffNumber;
	$daysOfWeek;
	$dusting;
	$cafeteria;
	$surfaces;
	$toiletNum;
	$showerNum;
	$cleanCupboard;
	$supplyConsumables;
	$springClean;
	$springCleanMonths;
	$parking;

?>

<h1>Your Online Quote</h1>
<p>Thanks for filling out our online quote form.</p>

<p><?php echo $_POST['staffNumber'] ?></p>

<p><?php echo $_POST['daysOfWeek'] ?></p>

<p><?php echo $_POST['dusting'] ?></p>

<p><?php echo $_POST['cafeteria'] ?></p>

<p><?php echo $_POST['surfaces'] ?></p>

<p><?php echo $_POST['toiletNum'] ?></p>

<p><?php echo $_POST['showerNum'] ?></p>

<p><?php echo $_POST['cleanCupboard'] ?></p>

<p><?php echo $_POST['consumables'] ?></p>

<p><?php echo $_POST['springClean'] ?></p>

<p><?php echo $_POST['springCleanMonths'] ?></p>

<p><?php echo $_POST['parking'] ?></p>


