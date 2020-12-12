<?php

// include_once ROOT . '/models/Genres.php';
// include_once ROOT . '/models/Product.php';
// include_once ROOT . '/components/Pagination.php';

class ProfileController {

	public function actionIndex() {
		
		if (User::isGuest()) {
				header("Location: /login");
		}

		$name = $_SESSION['user'];;
		$data = User::getUserData($name);
		if (isset($data['image'])) {
			$image_name = $data['image'];
		}

		if ((isset($_FILES['image'])) and ($_FILES['image']['name'] != '')){
			// Настроки загружаемого файла
			// Проверяем тип файла
			$types = array('image/png', 'image/jpeg');

			if (!in_array($_FILES['image']['type'], $types))
			echo('Запрещённый тип файла.');

			 // Проверяем размер файла
			$size = 1024000;

			if ($_FILES['image']['size'] > $size)
			 die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');

			// Изменение размеров изображения
			function resize($file, $quality = 75) {

				global $tmp_path;

				// Ограничение по ширине в пикселях
				$max_size = 300;

				// Cоздаём исходное изображение на основе исходного файла
				if ($file['type'] == 'image/jpeg')
				 $source = imagecreatefromjpeg ($file['tmp_name']);
				else if ($file['type'] == 'image/png')
				 $source = imagecreatefrompng ($file['tmp_name']);
				else
				 return false;
				$src = $source;
				// Определяем ширину и высоту изображения
				$w_src = imagesx($src); 
				$h_src = imagesy($src);
				$w = $max_size;
				if ($w_src > $w) {
				// Вычисление пропорций
				$ratio = $w_src/$w;
				$w_dest = round($w_src/$ratio);
				$h_dest = round($h_src/$ratio);
				 
				 // Создаём пустую картинку
				$dest = imagecreatetruecolor($w_dest, $h_dest);
				 
				 // Копируем старое изображение в новое с изменением параметров
				imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src); 
				 
				 // Вывод картинки и очистка памяти
				imagejpeg($dest, 'template/images/tmp/' . $file['name'], $quality);
				imagedestroy($dest);
				imagedestroy($src);
				 
				return $file['name'];
					}
				else {
				 // Вывод картинки и очистка памяти
				imagejpeg($src, 'template/images/tmp/' . $file['name'], $quality);
				imagedestroy($src);
				 
				return $file['name'];

				}
			}
			$image_name = resize($_FILES['image']);
			User::setImage($name, $image_name);
			copy('template/images/tmp/' . $image_name, 'template/images/profile/' . $image_name);
			unlink('template/images/tmp/' . $image_name);
		}
		// if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
		// // Если загружалось, переместим его в нужную папке, дадим новое имя
		// move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/{$_FILES['image']['name']}");
		// }

		require_once(ROOT . '/views/profile/index.php');

		return true;
	}

	public function actionEdit() {
		// Получаем идентификатор пользователя из сессии
		if (User::isGuest()) {
			header("Location: /login");
		}
			$name = $_SESSION['user'];;
		$data = User::getUserData($name);
		$image_name = $data['image'];

		if (isset($_FILES['image'])){
			// Настроки загружаемого файла
			// Проверяем тип файла
			$types = array('image/png', 'image/jpeg');

			if (!in_array($_FILES['image']['type'], $types))
			echo('Запрещённый тип файла.');

			 // Проверяем размер файла
			$size = 1024000;

			if ($_FILES['image']['size'] > $size)
			 die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');

			// Изменение размеров изображения
			function resize($file, $quality = 75) {

				global $tmp_path;

				// Ограничение по ширине в пикселях
				$max_size = 300;

				// Cоздаём исходное изображение на основе исходного файла
				if ($file['type'] == 'image/jpeg')
				 $source = imagecreatefromjpeg ($file['tmp_name']);
				else if ($file['type'] == 'image/png')
				 $source = imagecreatefrompng ($file['tmp_name']);
				else
				 return false;
				$src = $source;
				// Определяем ширину и высоту изображения
				$w_src = imagesx($src); 
				$h_src = imagesy($src);
				$w = $max_size;
				if ($w_src > $w) {
				// Вычисление пропорций
				$ratio = $w_src/$w;
				$w_dest = round($w_src/$ratio);
				$h_dest = round($h_src/$ratio);
				 
				 // Создаём пустую картинку
				$dest = imagecreatetruecolor($w_dest, $h_dest);
				 
				 // Копируем старое изображение в новое с изменением параметров
				imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src); 
				 
				 // Вывод картинки и очистка памяти
				imagejpeg($dest, 'template/images/tmp/' . $file['name'], $quality);
				imagedestroy($dest);
				imagedestroy($src);
				 
				return $file['name'];
					}
				else {
				 // Вывод картинки и очистка памяти
				imagejpeg($src, 'template/images/tmp/' . $file['name'], $quality);
				imagedestroy($src);
				 
				return $file['name'];

				}
			}
			$image_name = resize($_FILES['image']);
			User::setImage($name, $image_name);
			copy('template/images/tmp/' . $image_name, 'template/images/profile/' . $image_name);
			unlink('template/images/tmp/' . $image_name);
		}
				
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

