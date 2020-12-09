<?php

include_once ROOT. '/models/Product.php';

class ProductController {

	public function actionView($id) {

		$amount = Product::getRatingAmountById($id);
		$count = Product::getCountRatingById($id);

		if ($amount != 0) {
			$rating = ceil(($amount/$count)/0.5)*0.5;
		}
		else $rating = 0;

		// if (isset($_SESSION[$id.'i'])) $check = 1;
		// echo $check;

		if ((isset($_POST['rating'])) and (!(isset($_SESSION[$id.'i'])))) {

			$_SESSION[$id.'i'] = $_POST['rating'];
			
			Product::setRating($id, $_POST['rating'], $amount, $count);
			if ($rating == 0) $rating = $_POST['rating'];
		}

		$viewproduct = array();
        $viewproduct = Product::getProductById($id);
        
		require_once(ROOT . '/views/product/index.php');


		return true;

	}

}

