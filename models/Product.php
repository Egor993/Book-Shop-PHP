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

        $result = $db->query('SELECT id, name, price, image, is_new FROM product '
                . 'WHERE status = "1"'
                . 'ORDER BY id ASC '                
                . 'LIMIT ' . self::SHOW_BY_DEFAULT
                . ' OFFSET ' . $offset); // 

        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productsList;
    }

    public static function getTotalProducts() {
    	
        $db = Db::getConnection();

        $result = $db->query('SELECT count(id) AS count FROM product '
                . 'WHERE status="1"');
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

        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";

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
}



    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
//     /**
//      * Returns an array of recommended products
//      */
//     public static function getRecommendedProducts()
//     {
//         $db = Db::getConnection();

//         $productsList = array();

//         $result = $db->query('SELECT id, name, price, image, is_new FROM product '
//                 . 'WHERE status = "1" AND is_recommended = "1"'
//                 . 'ORDER BY id DESC ');

//         $i = 0;
//         while ($row = $result->fetch()) {
//             $productsList[$i]['id'] = $row['id'];
//             $productsList[$i]['name'] = $row['name'];
//             $productsList[$i]['image'] = $row['image'];
//             $productsList[$i]['price'] = $row['price'];
//             $productsList[$i]['is_new'] = $row['is_new'];
//             $i++;
//         }

//         return $productsList;
//     }

// 