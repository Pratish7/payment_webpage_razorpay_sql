<?php	
session_start();
require_once('db.php');

	$query = "INSERT into `database_table` (address, amount_paid, date, email, mobile, name, order_id, product, quantity, transaction_id)
	VALUES ('$_POST[address]', '$_POST[amount_paid]', '$_POST[date]', '$_POST[email]', '$_POST[mobile]', '$_POST[name]', '$_POST[order_id]', '$_POST[product]', '$_POST[qauntity]', '$_POST[transaction_id]')";

$result = mysqli_query($con, $query);
