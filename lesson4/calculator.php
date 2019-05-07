<?php
	if(isset($_POST["action"]) && isset($_POST["num1"]) && isset($_POST["num2"])){
		$action = $_POST["action"];
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];

		require_once("functions.php");

		echo calculator($action, $num1, $num2);
		
	}else{
		echo "something go wrong!! Try again";
	}
