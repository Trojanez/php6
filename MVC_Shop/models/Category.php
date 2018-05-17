<?php 

	class Category {

		public static function getCategoryList() {

			$pdo = Db::getInstance()->db;

			$result = $pdo->query("SELECT * FROM category");

			$row1 = $result->fetchAll(PDO::FETCH_ASSOC);

			return $row1;
		}
	}