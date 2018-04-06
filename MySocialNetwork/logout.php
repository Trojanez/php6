<?php

require 'bd.php';

unset($_SESSION['logged_user']);
	if(isset($_COOKIE['login']) and isset($_COOKIE['password'])) {
		$login = $_COOKIE['login'];
		$pass = $_COOKIE['password'];
		setcookie('login', $login, time() - 1);
		setcookie('password', $pass, time() - 1);
	}

	header('Location: login.php');