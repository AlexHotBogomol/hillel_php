<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<form action="send.php" method="POST">
		<div class="form-group">
			<label for="name">Введите имя</label>
			<input type="text" name="name" id="name">
		</div>
		<div class="form-group">
			<label for="lastname">Введите Фамилию</label>
			<input type="text" name="lastname" id="lastname">
		</div>
		<div class="form-group">
			<label for="email">Введите email</label>
			<input type="email" name="email" id="email">
		</div>
		<button type="submit">Отправить</button>
	</form>
</body>
</html>