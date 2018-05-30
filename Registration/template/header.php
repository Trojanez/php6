<!DOCTYPE html>
<html>
<head>
	<title>RegLog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
	<link rel="stylesheet" type="text/css" href="../css/authorisation.css">
</head>
<body>

	<div id="main">
		<div class="layout">
			<header>
				<div class="link_home">
					<a href="../index.php">Home</a>
				</div>
				<div class="main_links">
					<?php if(isset($_SESSION['name']) || isset($_SESSION['logged_user'])): ?>
					<a href="../logout.php">Logout</a>
					<?php else: ?>
					<a href="../register.php">Registration</a>
					<a href="../authorisation.php">Authorisation</a>
					<?php endif?>
				</div>
			</header>
		</div>
	</div>
	