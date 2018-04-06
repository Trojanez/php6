<?php

	$server = 'localhost';
	$username = 'root';
	$password = 456758;
	$db_name = 'mypage';

	$pdoOptions = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
	);

	$pdo = new PDO("mysql:host=$server;dbname=$db_name", $username, $password);

	session_start();