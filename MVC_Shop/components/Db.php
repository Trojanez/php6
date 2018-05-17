<?php 

	class Db {

		private static $_instance = null;

		public $dsn;
		public $user;
		public $password;
		public $db;

		public static function getInstance() {
			if(!isset(self::$_instance)) {
				self::$_instance = new self('mysql:host=localhost;dbname=ener;charset=utf8','root', '456758');
			}

			return self::$_instance;
		}

		private function __clone(){}
		private function __wakeup(){}

		private function __construct($dsn, $user, $password) {
			$this->dsn = $dsn;
			$this->user = $user;
			$this->password = $password;

			$this->db = null;
			try {
				$this->db = new PDO($this->dsn, $this->user, $this->password);
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
				return $this->db;
			} catch(PDOException $e) {
				exit ('Error connecting to database: ' . $e->getMessage());
			}
		}
	}