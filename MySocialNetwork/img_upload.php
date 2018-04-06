<?php

	require 'bd.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$ImgName = $_FILES['img']['name'];
		$ImgTmpName = $_FILES['img']['tmp_name'];
		$ImgSize = $_FILES['img']['size'];

		$error = [];

		// путь к картинкам
		$path = "images/";
		// разрешенные расширения для изображений
		$allowed = ['jpg', 'jpeg', 'png', 'gif'];
		//получаем последний компонент имени
		$base = basename($ImgName);
		$ext = explode(".", $base);
		$exts = array_pop($ext);

		if(!in_array($exts, $allowed)) {
			$error[] = "Неправильное разрешение файла. Вы можете выбрать только 'jpg', 'jpeg', 'png' или 'gif'.";
		}

		if($ImgSize > 5097152) {
			$error[] = "Файл не должен превышать 5 МБ.";
		}

		if(!empty($error)) {
			echo '<div style="color: red;">' . array_shift($error) . '</div><hr/>';
		}

		if(empty($error)) {
			move_uploaded_file($ImgTmpName, $path.$ImgName);

			$id = $_GET['id'];

			$sql = "SELECT id FROM users WHERE id = :id";
			$stmt = $pdo->prepare($sql);

			$stmt->bindValue(":id", $id);
			$stmt->execute();

			$session_user = $stmt->fetch(PDO::FETCH_ASSOC);

			if($session_user) {

				$sql = "SELECT img_path FROM img_upload WHERE id = :id";
				$stmt = $pdo->prepare($sql);

				$stmt->bindValue(":id", $session_user['id']);
				$stmt->execute();

				$imgExist = $stmt->fetch(PDO::FETCH_ASSOC);

				if($imgExist) {
					$sql = "UPDATE img_upload SET img_path = :img_path WHERE users_id = :users_id";
					$stmt = $pdo->prepare($sql);

					if($stmt) {
						$stmt->bindValue(":img_path", $ImgName);
						$stmt->bindValue(":users_id", $session_user['id']);

						$success = $stmt->execute();

						if($success) {
							echo '<div style="color: green;">Картинка успешно загружена.</div><hr/>';
						} else {
							echo '<div style="color: red;">Ошибка при загрузке изображения. Проверьте настройки сервера!</div><hr/>';
						}
					}

				} else {
					$sql = "INSERT INTO img_upload(users_id, img_path) VALUES(:users_id, :img_path)";
					$stmt = $pdo->prepare($sql);

					if($stmt) {
						$stmt->bindValue(":users_id", $session_user['id']);
						$stmt->bindValue(":img_path", $ImgName);

						$success = $stmt->execute();

						if($success) {
							echo '<div style="color: green;">Картинка успешно загружена.</div><hr/>';
						} else {
							echo '<div style="color: red;">Ошибка при загрузке изображения. Проверьте настройки сервера!</div><hr/>';
						}
					}
				}

			}
		}


	}