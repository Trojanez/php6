<?php 

	class CategoryController {

		public function actionIndex() {
			$categories = array();
			$categories = Category::getCategoryList();

			require_once(ROOT . '/views/alcohol/alcohol.php');

			return true;
		}

	}