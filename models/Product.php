<?php

class Product
{

    const SHOW_BY_DEFAULT = 8;

    /**
     * Returns an array of products
     */
    public static function getLatestProducts($page)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();
        $productsList = array();

        $result = $db->query('SELECT id, name, price, image FROM product '
                . 'ORDER BY id ASC '                
                . 'LIMIT ' . self::SHOW_BY_DEFAULT
                . ' OFFSET ' . $offset); // 

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductsByWord($page, $word)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        // echo $word;

        $productsList = array();

        $result = $db->query('SELECT id, name, price, image FROM product WHERE name LIKE'.'"%'.$word.'%"'
                . ' ORDER BY id ASC '                
                . 'LIMIT ' . self::SHOW_BY_DEFAULT
                . ' OFFSET ' . $offset); // 

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }

        return $productsList;
    }

    public static function getProductsByGenre($page, $genre)
    {
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $productsList = array();

        foreach ($genre as $val) {      
            $result = $db->query('SELECT id, name, price, image FROM product WHERE genre=' . $val
                    . ' ORDER BY id ASC '                
                    . 'LIMIT ' . self::SHOW_BY_DEFAULT
                    . ' OFFSET ' . $offset); // 

            $i = 0;
            while ($row = $result->fetch()) {
                $productsList[$i]['id'] = $row['id'];
                $productsList[$i]['name'] = $row['name'];
                $productsList[$i]['image'] = $row['image'];
                $productsList[$i]['price'] = $row['price'];
                $i++;
            }
        }

        return $productsList;
    }

    public static function getTotalProductsByWord($word) {
    
    $db = Db::getConnection();

    $result = $db->query('SELECT count(id) AS count FROM product WHERE name LIKE'.'"%'.$word.'%"');
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $row = $result->fetch();

    return $row['count'];
    }

    public static function getTotalProductsByGenre($genre) {
    
    $db = Db::getConnection();

    foreach ($genre as $val) {   
        $result = $db->query('SELECT count(id) AS count FROM product WHERE genre=' . $val);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
    }
    return $row['count'];
    }


    public static function getTotalProducts() {
    	
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product ');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }


    public static function getProductById($id) {
        $id = intval($id);

        if ($id) {                        
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM product WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }

    public static function getProdustsByIds($idsArray) {

        $products = array();
        
        $db = Db::getConnection();
        



        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM product WHERE id IN ($idsString)";

        $result = $db->query($sql);        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $products[$i]['image'] = $row['image'];
            $i++;
        }

        return $products;
    }

    public static function getProductsList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT id, name, price, image, author FROM product ORDER BY id ASC');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['author'] = $row['author'];
            $i++;
        }
        return $productsList;
    }

        public static function updateProductById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Текст запроса к БД
        $sql = "UPDATE product
            SET 
                name = :name,
                image = :image, 
                price = :price, 
                author = :author, 
                description = :description 
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':author', $options['author'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);

        return $result->execute();

    }

    public static function createProduct($options)
    {

        $options['genre'] = 'Биография'; // УДАЛИТЬ
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO product '
                . '(name, price, author,'
                . 'description, image, genre)'
                . 'VALUES '
                . '(:name, :price, :author,'
                . ':description, :image, :genre)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':author', $options['author'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':genre', $options['genre'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

        public static function deleteProductById($ids) {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM product WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        foreach($ids as $id) {
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->execute();
        }
        return true;
    }
}



    