<?php 

	class ProductController {

		public function actionCategory($categoryName, $page = 1) {

			$categories = array();
			$categories = Category::getCategoryList($categoryName);

			$categoryProduct = array();
			$categoryProduct = Product::getProductListByCategory($categoryName, $page);

			$total = Product::getTotalAmountOfProducts();

			$pagination = new Pagination($total, $page, Product::SHOW_DEFAULT, 'page-');

			require_once(ROOT . '/views/product/index.php');

			return true;
		}


		public function actionVodka($code) {

			$productId = Product::getProductsByCode($code);

			require_once(ROOT . '/views/product/buy.php');

			return true;
		}

		public function actionVino($code) {

			$productId = Product::getProductsByCode($code);

			require_once(ROOT . '/views/product/buy.php');

			return true;
		}

	}