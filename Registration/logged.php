<?php 
	require_once 'app/Db.php';
	require_once 'template/header.php';
?>
	
	<?php if(isset($_SESSION['name'])): ?>
		<h1><?php echo $_SESSION['name']; ?></h1>
		<p class="email_info">Your email address: <?php echo $_SESSION['email']; ?></p>
	<?php endif; ?>

	<?php if(isset($_SESSION['logged_user'])): ?>
		<?php

		$sql = 'SELECT * FROM users WHERE login = :loginEmail OR email = :loginEmail';
		$stmt = $db->prepare($sql);

		$stmt->bindParam(':loginEmail', $_SESSION['logged_user']);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		?>
		<h1><?php echo $row['name']; ?></h1>
		<p class="email_info">Your email address: <?php echo $row['email']; ?></p>
	<?php endif; ?>

</body>
</html>