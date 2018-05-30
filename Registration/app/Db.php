<?php 

	ini_set('display_errors', 1);
	session_start();

		$host = 'localhost';
		$dbname = 'login';
		$user = 'root';
		$password = '';

		$db = new PDO("mysql:host={$host};dbname={$dbname}",$user, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		require_once 'model/User.php';
		$user = new User($db);