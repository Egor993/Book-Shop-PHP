<?php

include_once ROOT . '/models/Genres.php';
include_once ROOT . '/models/Product.php';

class SiteController {

	public function actionIndex()
	{

        $genres = array();
        $genres = Genres::getGenresList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

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

