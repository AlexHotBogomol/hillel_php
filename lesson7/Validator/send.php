<?php
	if(empty($_POST)){
		die();
	}
	require_once("Validator.php");
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";

	try{
		Validator::is_empty_string($_POST["name"]);
	}catch(EmptyStringException $e){
		echo $e->getMessage();
	}

	try{
		Validator::is_correct_type($_POST["age"], "integer");
	}catch(InvalidInputTypeException $e){
		echo $e->getMessage();
	}

	try{
		Validator::is_correct_type($_POST["lastname"], "string");
	}catch(InvalidInputTypeException $e){
		echo $e->getMessage();
	}