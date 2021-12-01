<?php
class Product extends Db{
    //Viet phuong thuc lay ra tat ca san pham noi bat
    function getAllFeatureProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 LIMIT 3" );
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getTreeNewProducts(){
        $sql = self::$connection->prepare("SELECT *, ROW_NUMBER() OVER ( ORDER BY id DESC) FROM products LIMIT 3" );
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getAllProducts($page,$perpage){
        $firsLink = ($page - 1 ) * $perpage;
        $sql = self::$connection->prepare("SELECT * FROM `products` JOIN `manufactures` ON `products`.`menu_id`=`manufactures`.`maHang` JOIN `protypes`ON `products`.`type_id`=`protypes`.`type_id` LIMIT $firsLink,$perpage" );
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getProductWithManu(){
        $sql = self::$connection->prepare("SELECT * FROM `products`,`manufactures` WHERE products.menu_id =manufactures.maHang" );
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getProductWithProtype(){
        $sql = self::$connection->prepare("SELECT * FROM `products`,`protypes` WHERE products.type_id =protypes.type_id" );
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getSearchName($key){
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `name` LIKE ?");
        $$key = "%$key%";
        $sql->bind_param("s",$$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getSearchNamePages($key,$page,$perpage){
        $firsLink = ($page - 1 ) * $perpage;
        $sql = self::$connection->prepare("SELECT * FROM `products` WHERE `name` LIKE ?  LIMIT $firsLink,$perpage");
        $key = "%$key%";
        $sql->bind_param("s",$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function phanTrang($page,$perpage,$total) { 
        $url = "index.php";
        $totalLinks = ceil($total/$perpage); 
        $link =""; 
        for($j=1; $j <= $totalLinks ; $j++) 
        { 
        $link = $link." <li> <a href='index.php?page=$j'> $j </a></li>";   
        } 
        return $link; 
    }
    function DeleteProducts($key){
        $sql = self::$connection->prepare("DELETE  FROM `products` WHERE `id` = $key  ");
        return $sql->execute();
      
    }
    function getProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products" );
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function getExactlyProducts($id){
        $sql = self::$connection->prepare("SELECT * FROM products where id = ?" );
        //return an object
        $sql->bind_param("i",$id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function AddProducts($name,$manuid,$type_id,$price,$pro_image,$description,$feature){
        $sql = self::$connection->prepare("INSERT INTO `products`( `name`, `menu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`)
        VALUES (?,?,?,?,?,?,?)" );
        $sql->bind_param("siiissi",$name,$manuid,$type_id,$price,$pro_image,$description,$feature);
        $sql->execute();//return an object
 //return an array
    }
    function UpdateProducts($id,$name,$manuid,$type_id,$price,$pro_image,$description,$feature){
        $sql = self::$connection->prepare("UPDATE `products` 
        SET `id`=?,`name`=?,`menu_id`=?,`type_id`=?,`price`=?,`pro_image`=?,`description`=?,`feature`=? WHERE id =$id");
        $sql->bind_param("isiiissi",$id,$name,$manuid,$type_id,$price,$pro_image,$description,$feature);
        $sql->execute();//return an object
 //return an array
    }
    //Viet phuong thuc lay ra 10 sp moi nhat
    
}
