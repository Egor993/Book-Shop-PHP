<?php

// include_once ROOT . '/models/Genres.php';
// include_once ROOT . '/models/Product.php';
// include_once ROOT . '/components/Pagination.php';

class CartController {

	public function actionIndex() {

        $productsInCart = false;
        $totalPrice = 0;
        $products = [];

        // Получим данные из корзины
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

    public function actionDelete($id) {
    // Удаляем заданный товар из корзины
    Cart::deleteProduct($id);

    // Возвращаем пользователя в корзину
    header("Location: /cart");
	}

	public function actionClear() {
    // Удаляем заданный товар из корзины
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
            // Если пользователь не гость
            // Получаем информацию о пользователе из БД
            $userName = $_SESSION['user'];
            $user = User::getUserData($userName);
        } else {
            // Если гость, поля формы останутся пустыми
            $userId = false;
        }

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $data = User::getUserData($userName);
            $userId = $data['id'];
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            // Флаг ошибок
            $errors = false;

            // Валидация полей
            if (!User::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }

            print_r($errors);

            if ($errors == false) {
                // Если ошибок нет
                // Сохраняем заказ в базе данных
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {
                    // Если заказ успешно сохранен
                    // Оповещаем администратора о новом заказе по почте                
                    // $adminEmail = 'php.start@mail.ru';
                    // $message = '<a href="http://digital-mafia.net/admin/orders">Список заказов</a>';
                    // $subject = 'Новый заказ!';
                    // mail($adminEmail, $subject, $message);

                    // Очищаем корзину
                    Cart::clear();
                }
            }
        }


		require_once(ROOT . '/views/cart/payment.php');

		return true;
	}

}

