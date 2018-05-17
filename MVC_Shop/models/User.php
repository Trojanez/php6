<?php

	class User {

		public static function register($phone, $name, $email, $password) {
			$pdo = Db::getInstance()->db;

			// prepare SQL statement
			$sql = "INSERT INTO users(phone, name, email, password) VALUES (:phone, :name, :email, :password)";
			$stmt = $pdo->prepare($sql);

			if($stmt) {

				// bind Values to placeholder
				$stmt->bindValue(':phone', $phone);
				$stmt->bindValue(':name', $name);
				$stmt->bindValue(':email', $email);
				$stmt->bindValue(':password', $password);

				$success = $stmt->execute();

				if($success) {
					return true;
				} else {
					return false;
				}
			}
		}
		
		public static function checkIfEmpty($var) {
			if($var != '') {
				return true;
			}
			return false;
		}

		public static function checkNameLength($name) {
			
			if(strlen($name) >= 2) {
				return true;
			}
			return false;
		}

		public static function checkEmailCorrect($email) {
			if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
				return true;
			}
			return false;
		}

		public static function checkPasswordLength($password) {
			if(strlen($password) >= 6) {
				return true;
			}
			return false;
		}

		public static function checkPassowrdEqual($password, $confirm_password) {
			if($password === $confirm_password) {
				return true;
			}
			return false;
		}

		public static function checkPhoneUnique($phone) {

			$pdo = Db::getInstance()->db;
			// Prepare SQL statement
				$sql = "SELECT * from users WHERE phone = :phone";
				$stmt = $pdo->prepare($sql);

				// Bind value
				$stmt->bindValue(':phone', $phone);

				$stmt->execute();

				$row = $stmt->fetch(PDO::FETCH_ASSOC);

				if(!$row) {
					return true; 
				} else {
					return false;
				}
		}

		public static function checkEmailUnique($email) {

			$pdo = Db::getInstance()->db;
			// Prepare SQL statement
				$sql = "SELECT * from users WHERE email = :email";
				$stmt = $pdo->prepare($sql);

				// Bind value
				$stmt->bindValue(':email', $email);

				$stmt->execute();

				$row = $stmt->fetch(PDO::FETCH_ASSOC);

				if(!$row) {
					return true; 
				} else {
					return false;
				}
		}

		

}