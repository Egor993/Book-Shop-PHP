<?php

// include_once ROOT . '/models/Genres.php';
// include_once ROOT . '/models/Product.php';
// include_once ROOT . '/components/Pagination.php';

class SiteController {

	public function actionIndex($page = 1) {

        $genres = array();
        $genres = Genres::getGenresList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts($page);

        $total = Product::getTotalProducts();

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

		require_once(ROOT . '/views/site/index.php');

		return true;
	}

// 	public function actionView($id)
// 	{
// 		if ($id) {
// 			$newsItem = News::getNewsItemByID($id);

// 	require_once(ROOT . '/views/site/view.php');

// /*			echo 'actionView'; */
// 		}

// 		return true;

	// }

}

