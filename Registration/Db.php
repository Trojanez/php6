<?php 

	session_start();

		$host = 'localhost';
		$dbname = 'login';
		$user = 'root';
		$password = '456758';

		$db = new PDO("mysql:host={$host};dbname={$dbname}",$user, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		require_once 'User.php';
		$user = new User($db);