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
    function getAllProducts(){
        $sql = self::$connection->prepare("SELECT * FROM products" );
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
    //Xuat ra danh sach ket qua san Pham sau khi TIMM.
    function FindProducts($key){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE products.name LIKE ?" );
        $key="%".$key."%";
        $sql ->bind_param('s',$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
       //Xuat ra danh sach ket qua san Pham sau khi TIMM va chia page
    function FindProductsPage($key,$page,$perPage){
        $firstLink = ($page-1)*$perPage;
        $sql = self::$connection->prepare("SELECT * FROM products WHERE products.name LIKE ? LIMIT $firstLink,$perPage" );
        $key="%".$key."%";
        $sql ->bind_param('s',$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Tao Link Chia page result.php
    public static function createPageLinksFindProducts($totalRow, $perPage,$key)
    {
        $output="";
        $numberPage = ceil($totalRow / $perPage);
        for ($i=1; $i <= $numberPage ; $i++) {
            $output.= '<a class="page-link" href="?page=' . $i . '&&key='.$key.'">' . $i ." ". '</a>';
        }
        return $output;
    }
    //Tao Link chia page cho index.pphp
    public static function createPageLinks($totalRow, $perPage)
    {
        $output="";
        $numberPage = ceil($totalRow / $perPage);
        for ($i=1; $i <= $numberPage ; $i++) {
            $output.= '<a class="page-link" href="?page=' . $i . '">' . $i ." ". '</a>';
        }
        return $output;
    }
   //Hien Thi all product
    function getAllProductsPage($page,$perPage){
        $firstLink = ($page-1)*$perPage;
        $sql = self::$connection->prepare("SELECT * FROM `products` ORDER BY ID ASC LIMIT $firstLink,$perPage" );
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    //Viet phuong thuc lay ra 10 sp moi nhat
    
}
