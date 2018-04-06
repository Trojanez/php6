<?php 

	require 'bd.php';

	if($_SESSION['logged_user'] != true) {
		header("Location: login.php");
		exit();
	} else {
		header("Location: main.php");
	}

	if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
		header("Location: main.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="form_link">
			<a href="login.php">Авторизация</a>
			<a href="register.php">Регистрация</a>
		</div>
	</header>

	<h1>Добро пожаловать в мою социальную сеть</h1>

</body>
</html>