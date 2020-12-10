<?php

class SiteController {

	public function actionIndex($page = null) {

	if ($page == null) {
		unset($_SESSION['search']);
		unset($_SESSION['genre']);
		$page = 1;
	}

	if (isset($_POST['search'])) {

		$_SESSION['search'] = $_POST['search'];
	}

	if (isset($_POST['genre'])) {

		$_SESSION['genre'] = $_POST['genre'];
		unset($_SESSION['search']);
	}

	if (isset($_POST['rating'])) {

		$_SESSION['rating'] = $_POST['rating'];
		unset($_SESSION['search']);
		unset($_SESSION['genre']);
	}

	print_r($_SESSION['rating']);

	$latestProducts = array();
	
	if (isset($_SESSION['search'])) {

		$latestProducts = Product::getProductsByWord($page, $_SESSION['search']);
		$total = Product::getTotalProductsByWord($_SESSION['search']);
	}

	else if (isset($_SESSION['genre'])) {

		$latestProducts = Product::getProductsByGenre($page, $_SESSION['genre']);
		$total = Product::getTotalProductsByGenre($_SESSION['genre']);
	}

	else if (isset($_SESSION['rating'])) {

		$latestProducts = Product::getProductsByRating($page, $_SESSION['rating']);
		$total = Product::getTotalProductsByRating($_SESSION['rating']);
	}

	else {

		$latestProducts = Product::getLatestProducts($page);
		$total = Product::getTotalProducts();
	}
	
	$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

	require_once(ROOT . '/views/site/index.php');

	return true;

	}

}

