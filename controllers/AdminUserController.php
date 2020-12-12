<?php

/**
 * Контроллер AdminOrderController
 * Управление заказами в админпанели
 */
class AdminUserController extends AdminBase
{

    /**
     * Action для страницы "Управление заказами"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список заказов
        if (isset($_POST['_selected_action'])) {
            foreach($_POST['_selected_action'] as $id){
                Order::deleteOrderById($id);
            }
        }
        $users = User::getUsers();

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/index.php');
        return true;
    }

    public function actionView($name) {
        // Проверка доступа
        self::checkAdmin();

        $user = User::getUserData($name);

        // Подключаем вид
        require_once(ROOT . '/views/admin_user/view.php');
        return true;
    }

}
