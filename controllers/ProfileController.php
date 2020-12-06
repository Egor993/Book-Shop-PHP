<?php

// include_once ROOT . '/models/Genres.php';
// include_once ROOT . '/models/Product.php';
// include_once ROOT . '/components/Pagination.php';

class ProfileController {

	public function actionIndex() {

        $name = $_SESSION['user'];

        $data = User::getUserData($name);

        require_once(ROOT . '/views/profile/index.php');

        return true;
    }

    public function actionEdit() {
        // Получаем идентификатор пользователя из сессии
        $name = $_SESSION['user'];;
        
        $data = User::getUserData($name);
                
        $result = false;     

        if (isset($_POST['submit'])) {
            $password = $_POST['password1'];
            $password2 = $_POST['password2'];
            
            $errors = false;
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($password == $data['password']) {
                $errors[] = 'Старый пароль введен неверно';
            }

            if ($password != $password2) {
                $errors[] = 'Пароли не совпадают';
            }
            
            if ($errors == false) {
                $result = User::edit($name, $password);
            }

        }

        require_once(ROOT . '/views/profile/edit.php');

        return true;
    }

}

