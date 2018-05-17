<?php 

	class Product {

		const SHOW_DEFAULT = 12;


		public static function getProductListByCategory($categoryName, $page = 1) {

				$pdo = Db::getInstance()->db;

				$page = intval($page);
				$offset = ($page - 1) * self::SHOW_DEFAULT;

				$result = $pdo->query("SELECT * FROM products "
					. "WHERE status = 1 AND category_name = '$categoryName' "
					. "ORDER BY id "
					. "LIMIT " . self::SHOW_DEFAULT . " "
					. "OFFSET " . $offset);

				$row = $result->fetchALL(PDO::FETCH_ASSOC);

				return $row;
		}

		public static function getProductsByCode($code) {

			$pdo = Db::getInstance()->db;

			$sql = "SELECT * FROM products WHERE code = :code";
			$stmt = $pdo->prepare($sql);

			$stmt->bindValue(':code', $code);

			$stmt->execute();

			$row = $stmt->fetch(PDO::FETCH_ASSOC);

			return $row;
		}

		public static function getTotalAmountOfProducts() {

			$pdo = Db::getInstance()->db;

			$result = $pdo->query("SELECT count(id) as count FROM products WHERE status = 1");
			
			$row = $result->fetch(PDO::FETCH_ASSOC);

			return $row['count'];
		}
	}