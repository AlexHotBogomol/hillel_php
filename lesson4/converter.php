<?php
	if(isset($_POST["convert_type"]) && isset($_POST["degrees"])){
		$convert_type = $_POST["convert_type"];
		$degrees = $_POST["degrees"];

		require_once("functions.php");

		echo convert_degrees($degrees, $convert_type);
		
	}else{
		echo "something go wrong!! Try again";
	}
