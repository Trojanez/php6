<meta charset="utf-8">
<?php

	require_once "bd.php";

	$sql = "SELECT * FROM users";
	$stmt = $pdo->prepare($sql);

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo "<div>".$row["name"]."</div>";
	}