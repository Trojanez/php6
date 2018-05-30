<?php 
	require_once 'app/Db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>RegLog</title>
	<link rel="stylesheet" type="text/css" href="css/page.css">
</head>
<body>

	<div id="main">
		<div class="layout">
			<h1>Web Page</h1>

			<div class="links">
				<a href="register.php">Registration</a>
				<a href="authorisation.php">Authorisation</a>

				<?php if (isset($_SESSION['name']) || isset($_SESSION['logged_user'])): ?>
					<a href="logged.php">My page</a>
				<?php endif ?>
			</div>
		</div>
	</div>

</body>
</html>