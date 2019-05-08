<?php 
	session_start();
	$_SESSION['FIO'] = $_POST["FIO"];
	$_SESSION['address'] = $_POST["address"];
	foreach ($_SESSION as $key => $value) {
		echo $value . "<br>";
	}
?>
