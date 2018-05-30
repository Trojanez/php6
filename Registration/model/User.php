<?php 

	class User
	{

		private $_db;
		private $errors = [];

		public function __construct($db)
		{
			$this->_db = $db;
		}

		public function register($email, $login, $name, $password, $birthdate, $country)
		{

			$sql = "INSERT INTO users(email, login, name, password, birthdate, country) VALUES(:email,:login,:name,:password,:birthdate,:country)";
			$stmt = $this->_db->prepare($sql);

			$stmt->bindValue(':email', $email);
			$stmt->bindValue(':login', $login);
			$stmt->bindValue(':name', $name);
			$stmt->bindValue(':password', $password);
			$stmt->bindValue(':birthdate', $birthdate);
			$stmt->bindValue(':country', $country);

			$stmt->execute();

			return $stmt;

		}

		public function checkLogin($loginEmail): array
		{
			$sql = "SELECT * FROM users WHERE login = :loginEmail OR email = :loginEmail";
			$stmt = $this->_db->prepare($sql);
			//Bind values
			$stmt->bindValue(":loginEmail", $loginEmail);
			//Execute
			$stmt->execute();
			// fetch the row
			$row = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $row;
		}

		public function checkEmpty($subject, string $error)
		{
			if($subject == '')
			{
				$this->errors[] = $error;
			}
		}

		public function checkLength($subject, $min, string $error)
		{
			if(strlen($subject) < $min)
			{
				$this->errors[] = $error;
			}
		}

		public function checkUnqiue(array $row, string $error)
		{
			if(array_shift($row) != 0)
			{
				$this->errors[] = $error;
			}
		}

		public function checkIfExists($row, string $error)
		{
			if(array_shift($row) == 0)
			{
				$this->errors[] = $error;
			}
		}

		public function checkPasswords($pass1, $pass2, string $error)
		{
			if($pass1 != $pass2)
			{
				$this->errors[] = $error;
			}
		}

		public function passwordHash($subject)
		{
			$pass = 'fsdfsdfsdfsdfwef25435234' . $subject . 'fsdfsdcsf85634950523';
			return hash('sha512', $pass);

		}

		public function getError()
		{
			return $this->errors;
		}
	}