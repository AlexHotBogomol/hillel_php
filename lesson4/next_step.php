<?php 
	session_start();
	$_SESSION['login'] = $_POST["login"];
	$_SESSION['password'] = $_POST["password"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration-step2</title>
</head>
<body>
	<form action="last_step.php" method="POST">
		<input type="text" name="FIO" placeholder="Enter your FIO" required="required">
		<input type="text" name="address" placeholder="Enter your address" required="required">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
