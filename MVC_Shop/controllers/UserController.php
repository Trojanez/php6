<?php 

	class UserController {
		
		public function actionRegister() {

			if(isset($_POST['submit'])) {
				$phone = $_POST['phone_number'];
				$name = (string)htmlspecialchars($_POST['name']);
				$email = (string)htmlspecialchars($_POST['email']);
				$password = (string)htmlspecialchars($_POST['password']);
				$confirm_password = (string)htmlspecialchars($_POST['confirm_password']);

				$errors = false;
				$success = '';

				if(!User::checkIfEmpty($phone)){
					$errors[] = 'Введите номер телефона!';
				}

				if(!User::checkIfEmpty($name)){
					$errors[] = 'Введите имя!';
				}
				if(!User::checkIfEmpty($email)){
					$errors[] = 'Введите электронный адрес!';
				}
				if(!User::checkIfEmpty($password)){
					$errors[] = 'Введите пароль!';
				}

				if(!User::checkNameLength($name)) {
					$errors[] = 'Имя не должно быть короче 2 символов!';
				}

				if(!User::checkPasswordLength($password)) {
					$errors[] = 'Пароль не должен быть короче 6 символов!';
				}
				if(!User::checkPassowrdEqual($password, $confirm_password)) {
					$errors[] = "Пароль и повторный пароль не совпадают!";
				}

				if(!User::checkEmailCorrect($email)) {
					$errors[] = 'Электронный адрес введен неверно!';
				}

				if(!User::checkEmailUnique($email)) {
					$errors[] = "Пользователь с электронным адресом $email уже существует";
				}
				if(!User::checkPhoneUnique($phone)) {
					$errors[] = "Пользователь с номером телефона $phone уже существует";
				}

				if($errors == false) {
					$encryptedPassword = md5($password);
					User::register($phone, $name, $email, $encryptedPassword);
					$success = 'Регистрация прошла успешно! Спасибо!';
				}

			}
			require_once(ROOT . '/views/layouts/register.php');

			return true;
		}

		public function actionAuthorisation() {

			if(isset($_POST['auth'])) {
				$email = (string)htmlspecialchars($_POST['email']);
				$password = (string)htmlspecialchars($_POST['password']);

				 
			}

			require_once(ROOT . '/views/layouts/authorisation.php');

			return true;

		}
	}