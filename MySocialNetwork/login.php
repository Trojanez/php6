<?php
	require 'bd.php';
	require 'login_user.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>My page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta charset="utf-8">
</head>
<body>

	<div id="wrapper">
		<div class="layout">
			<div id="header">
				<div class="form_link">
					<a href="login.php">Авторизация</a>
					<a href="register.php">Регистрация</a>
				</div>
			</div>
		</div>

		<div id="main">
			<h2>Форма авторизации</h2>
		</div>

		<form method="post" action="<?php $_SERVER['SCRIPT_NAME']?>" class="form_user">
			<div>
				<label for="login">Логин</label><br />
				<input type="text" name="login" id="login" value="<?php if(isset($_COOKIE['login'])) {echo $_COOKIE['login'];?><?php } else ?><?php { ?><?php echo $_POST['login']; ?><?php } ?>" placeholder="Введите логин">
			</div>
			<div>
				<label for="password">Пароль</label><br />
				<input type="password" name="password" id="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];?><?php } ?>" placeholder="Введите пароль">
			</div>
			<div>
				<label for="remember">Запомнить меня</label>
				<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE['login'])) { ?> checked <?php } ?>>
			</div> <br />
			<button type="submit" name="do_signup">Войти</button>
		</form>
	</div>
</body>
</html>