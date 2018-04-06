<?php

require 'bd.php';

	if(isset($_POST['do_signup'])) {

		$login = (string)htmlspecialchars($_POST['login']);
		$pass = (string)htmlspecialchars($_POST['password']);

		$error = array();

		// Проверяем логин

		$sql = "SELECT * FROM users WHERE login = :login";
		$stmt = $pdo->prepare($sql);
		//Bind values
		$stmt->bindValue(":login", $login);
		//Execute
		$stmt->execute();
		// fetch the row
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!$user) {
			$error[] = "Пользователь с логином $login не найден!";
		}

		//Проверяем пароль

		// Construct the SQL statement and prepare it
		$sql = "SELECT id, password FROM users WHERE login = :login";
		$stmt = $pdo->prepare($sql);
		//Bind values
		$stmt->bindValue(":login", $login);
		//Execute
		$stmt->execute();
		// fetch the row
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

			if($row['password'] == md5(md5($pass))) {
				// we can login the user

				$_SESSION['logged_user'] = $login;
				$_SESSION['id'] = $row['id'];
				if(isset($_POST['remember'])) {
					setcookie('login', $login, time() + (10*365*24*60*60));
					setcookie('password', $pass, time() + (10*365*24*60*60));
				}
				echo '<META HTTP-EQUIV=REFRESH CONTENT="1; URL=http://alevel/MySocialNetwork/main.php?id='.$row['id'].'">';

			} else {
				$error[] = "Пароль введен неверно."; 
			}

		if(!empty($error)) {
			echo '<div style="color: red;">' . array_shift($error) . '</div><hr/>';
		}
	}