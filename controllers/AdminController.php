<?php

class AdminController extends AdminBase {

	public function actionIndex() {

		self::checkAdmin();

		require_once(ROOT . '/views/admin/index.php');

		return true;

	}

	public function actionAdd() {

		require_once(ROOT . '/views/admin/add.php');

		return true;

	}
}

