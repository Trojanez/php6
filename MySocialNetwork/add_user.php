<?php

	require 'bd.php';

	$error = array();

	if(isset($_POST['do_signup'])) {
		$login = (string)htmlspecialchars($_POST['login']);
		$email = (string)htmlspecialchars($_POST['email']);
		$password = (string)htmlspecialchars($_POST['password']);
		$password_confirmation = (string)htmlspecialchars($_POST['password_confirmation']);
		$name = (string)htmlspecialchars($_POST['user_name']);
		$surname = (string)htmlspecialchars($_POST['user_surname']);
		$country = $_POST['region'];
		$city = $_POST['city'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$gender = $_POST['gender'];

		// Формат даты для добавления в бд
		$date = date('Y-m-d', mktime(0, 0, 0, $month, $day, $year));

		if($login == "") {
			$error[] = "Введите логин";
		}

		// Construct the SQL statement and prepare it
		$sql = "SELECT * FROM users WHERE login = :login";
		$stmt = $pdo->prepare($sql);

		///Bind the provided username to our prepared statement
		$stmt->bindValue(':login', $login);

		//Execute
		$stmt->execute();

		// fetch the row
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if($row) {
			$error[] = "Пользователь с логином $login уже существует";
		}

		if($email == "") {
			$error[] = "Введите электронный адрес";
		}

		$sql = "SELECT * FROM users WHERE email = :email";
		$stmt = $pdo->prepare($sql);

		$stmt->bindValue(':email', $email);

		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if($row) {
			$error[] = "Пользователь с электронным адресом $email уже существует";
		}

		if($password == "" || $password_confirmation == "") {
			$error[] = "Поле пароль не должно быть пустым. Введите пароль!";
		}

		if($password !== $password_confirmation) {
			$error[] = "Пароль и повторный пароль не совпадают! Пожалуйста, проверьте их!";
		}

		if($country == "" || $city == "") {
			$error[] = "Выберите страну и город проживания";
		}

		if(empty($error)) {
			$sql = "INSERT INTO users(name, surname, login, email, password, country, city, date_b, gender) VALUES (:name, :surname, :login, :email, :password, :country, :city, :date_b, :gender)";
			$stmt = $pdo->prepare($sql);

			if($stmt) {
				//создаем хеш для пароля
				$encryptedPassword = md5(md5($password));

				$stmt->bindValue(':name', $name);
				$stmt->bindValue(':surname', $surname);
				$stmt->bindValue(':login', $login);
				$stmt->bindValue(':email', $email);
				$stmt->bindValue(':password', $encryptedPassword);
				$stmt->bindValue(':country', $country);
				$stmt->bindValue(':city', $city);
				$stmt->bindValue(':date_b', $date);
				$stmt->bindValue(':gender', $gender);
				
				$success = $stmt->execute();
				if($success) {
					echo '<div style="color: green; font-weight: bold;">Регистрация прошла успешно! Вы можете <a href="login.php"> авторизоваться!</a>';
				} else {
        			echo '<div style="color: blue;">Ошибка добавления! Проверьте параметры базы данных!</div><hr/>';
      			}
			}
		} else {
			echo '<div style="color: red;">'. array_shift($error) . '</div><hr/>';
		}
	}
?>