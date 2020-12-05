<?php

include_once ROOT. '/models/Product.php';

class ProductController {

	public function actionIndex() {
		

		require_once(ROOT . '/views/product/index.php');

		return true;
	}

	public function actionView($id) {

		$viewproduct = array();
        $viewproduct = Product::getProductById($id);
        
		require_once(ROOT . '/views/product/index.php');


		return true;

	}

}

