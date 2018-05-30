<!DOCTYPE html>
<html>
<head>
	<title>RegAuth</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="css/authorisation.css">
</head>
<body>

	<div id="main">
		<div class="layout">
			<header>
				<?php if(isset($_SESSION['name']) || isset($_SESSION['logged_user'])): ?>
				<a href="logout.php">Logout</a>
				<?php else: ?>
				<a href="/">Registration</a>
				<a href="authorisation.php">Authorisation</a>
				<?php endif?>
			</header>
		</div>
	</div>
	