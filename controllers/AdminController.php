<?php

class AdminController {

	public function actionIndex() {

		require_once(ROOT . '/views/admin/index.php');

		return true;

	}

	public function actionAdd() {

		require_once(ROOT . '/views/admin/add.php');

		return true;

	}
}

