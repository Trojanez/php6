<?php 
	require 'bd.php';
	require 'img_upload.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>My page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
	<div id="wrapper">
		<div class="layout">
			<div id="header">
				<div class="form_link">
					<a href="logout.php">Выйти</a>
				</div>
			</div>
		</div>
		<div class="layout">
			<div id="leftbar">
				<ul>
					<li><a href="main.php?id=1">Моя страница</a></li>
					<li><a href="friends.php">Друзья</a></li>
					<li><a href="#">Фотографии</a></li>
					<li><a href="#">Видео</a></li>
					<li><a href="#">Музыка</a></li>
					<li><a href="#">Сообщения</a></li>
					<li><a href="#">Группы</a></li>
					<li><a href="#">Настройки</a></li>
				</ul>
			</div>
			<div id="rightbar">
				<div class="img-holder">
				<?php

					$id = $_GET['id'];

					$sql = "SELECT id FROM users WHERE id = :id";
					$stmt = $pdo->prepare($sql);

					$stmt->bindValue(":id", $id);
					$stmt->execute();

					$session_user = $stmt->fetch(PDO::FETCH_ASSOC);

					if($session_user) {
						$sql = "SELECT img_path FROM img_upload WHERE users_id = :users_id";
						$stmt = $pdo->prepare($sql);

						$stmt->bindValue(":users_id", $session_user['id']);
						$stmt->execute();

						$result = $stmt->fetch(PDO::FETCH_ASSOC);

						if($result) {
							$image = $result['img_path'];
							echo "<img width=\"200px\" height=\"250px\" src=\"images/$image\">";
						} else {
							echo "<img width='200px' height='200px' src='images/noavatar.jpg'>";
						}
					}
				?>
					<form method="post" enctype="multipart/form-data" action="<?php $_SERVER['SCRIPT_NAME'] ?>">
						<div class="file-upload">
							<label>
								<input type="file" name="img">
								<span class="download_photo">Загрузить фото</span>
							</label>
						</div>
					</form>
					<a href="edit.php" name="edit" id="edit">Редактировать страницу</a>
				</div>
			</div>
				<div id="content">
					<?php 
						$id = $_GET['id'];

						$sql = 'SELECT * FROM users WHERE id=:id';
						$stmt = $pdo->prepare($sql);

						$stmt->bindValue(':id', $id);

						$stmt->execute();

						$row = $stmt->fetch(PDO::FETCH_ASSOC);

						if($row) {
							$name = $row['name'];
							$surname = $row['surname'];
							$country = $row['country'];
							$birthday = $row['date_b'];
							$gender = $row['gender'];
						}
					?>

					<div class="main_info">
						<h2 class="name"><?php echo "$name " . "$surname" ?></h2>
						<p class="status"><?php if(isset($_SESSION['logged_user'])): ?>(Онлайн) <?php else: ?> (Оффлайн) <?php endif ?></p>
					</div>
					<hr>
					<div class="second_info">
						<p>Страна: <?php echo $country; ?></p>
						<p>Дата рождения: <?php 

						$month = ['Января', 'Февраля', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];

						$arr = explode("-", $birthday);

						switch ($arr[1]){
							case 1: $m='Января'; break;
							case 2: $m='Февраля'; break;
							case 3: $m='Марта'; break;
							case 4: $m='Апреля'; break;
							case 5: $m='Мая'; break;
							case 6: $m='Июня'; break;
							case 7: $m='Июля'; break;
							case 8: $m='Августа'; break;
							case 9: $m='Сентября'; break;
							case 10: $m='Октября'; break;
							case 11: $m='Ноября'; break;
							case 12: $m='Декабря'; break;
						}

						echo $arr[2].'&nbsp;'.$m.'&nbsp;'.$arr[0];

						?></p>
						<p>Пол: <?php if($gender == 'male'): ?> Мужской <?php else: ?> Женский <?php endif ?></p>
					</div>
				</div>
		</div>
	</div>
</body>
</html>