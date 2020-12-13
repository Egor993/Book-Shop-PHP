<?php

class CartController {

	public function actionIndex() {

        $productsInCart = false;
        $totalPrice = 0;
        $products = [];

        // Получаемм данные из корзины
        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
            // Получаем полную информацию о товарах для списка
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);
            
            // Получаем общую стоимость товаров
            $totalPrice = Cart::getTotalPrice($products);
        }

		require_once(ROOT . '/views/cart/index.php');

		return true;
	}

	public function actionAdd($id) {
        // Добавляем товар в корзину
        Cart::addProduct($id);

        // Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");

    }
    public function actionDecrease($id) {
        // Добавляем товар в корзину
        Cart::decreaseProduct($id);

        // Возвращаем пользователя на страницу
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");

    }

    public function actionDelete($id) {
    // Удаляем заданный товар из корзины
    Cart::deleteProducts($id);

    // Возвращаем пользователя в корзину
    header("Location: /cart");
	}

	public function actionClear() {
    // Удаляем все товары из корзины
    Cart::clear();

    // Возвращаем пользователя в корзину
    header("Location: /cart");
	}

    public function actionAddAjax($id)
    {
        // Добавляем товар в корзину
        echo Cart::addProduct($id);
        return true;
    }

	public function actionPayment() {

		$productsInCart = Cart::getProducts();

        // Если товаров нет, отправляем пользователи искать товары на главную
        if ($productsInCart == false) {
            header("Location: /");
        }
        // Берем список продуктов
        $productsIds = array_keys($productsInCart);
        $products = Product::getProdustsByIds($productsIds);

        // Находим общую стоимость
        $productsIds = array_keys($productsInCart);
        $products = Product::getProdustsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);
        // Количество товаров
        $totalQuantity = Cart::countItems();

        // Поля для формы
        $userName = false;
        $userPhone = false;
        $userComment = false;

        // Статус успешного оформления заказа
        $result = false;

        // Проверяем является ли пользователь гостем
        if (!User::isGuest()) {
            // Получаем информацию о пользователе
            $user = User::getUserData($userName);
        }

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $data = User::getUserData($userName);
            $userId = $data['id'];
            $userName = strip_tags($_POST['userName']);
            $userPhone = strip_tags($_POST['userPhone']);
            $userComment = htmlspecialchars($_POST['userComment']);

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }

            if ($errors == false) {
                // Если ошибок нет
                // Сохраняем заказ в базе данных
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                // Очищаем корзину
                if ($result) {
                    Cart::clear();
                }
            }
        }

		require_once(ROOT . '/views/cart/payment.php');

		return true;
	}
}

