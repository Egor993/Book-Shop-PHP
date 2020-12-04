<?php

include_once ROOT. '/models/Product.php';

class ProductController {

	public function actionIndex() {
		

		require_once(ROOT . '/views/product/index.php');

		return true;
	}

	public function actionView($id) {

	require_once(ROOT . '/views/product/index.php');


		return true;

	}

}

