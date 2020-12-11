<?php

include_once ROOT. '/models/Product.php';

class ProductController {

	public function actionView($id) {

		unset($_SESSION[$id.'comment']);

		$amount = Product::getRatingAmountById($id);
		$count = Product::getCountRatingById($id);

		$comments = Product::viewCommentsByID($id);
		foreach($comments as &$comment) {
			$comment = json_decode($comment, true);
		}
		$name = $_SESSION['user'];;
        $data = User::getUserData($name);
        $image_name = $data['image'];
		

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
		if ((isset($_POST['submit'])) and (!(isset($_SESSION[$id.'comment'])))) {
			
			$comment[$_SESSION['user']] = $_POST['comment'];
			// $comment['comment'] = $_POST['comment'];	

			$_SESSION[$id.'comment'] = $_POST['comment'];
			if ($comments == []) $comments[0] = [$_SESSION['user'] => $_POST['comment']];
			
			Product::addComment($id, $comment);
		}

		$viewproduct = array();
        $viewproduct = Product::getProductById($id);
        
		require_once(ROOT . '/views/product/index.php');


		return true;

	}

}

