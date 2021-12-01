<?php
class Protype extends Db{
    //tat ca sp trong Category
    function getAllProtype($page,$perpage){
        $firsLink = ($page - 1 ) * $perpage;
        $sql = self::$connection->prepare("SELECT * FROM `protypes`LIMIT $firsLink,$perpage");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function phanTrang($page,$perpage, $total) { 
        $totalLinks = ceil($total/$perpage); 
        $link =""; 
        for($j=1; $j <= $totalLinks ; $j++) 
        { 
        $link = $link." <li> <a href='protypes.php?page=$j'> $j </a></li>";   
        } 
        return $link; 
    }
    function DeleteProtype($key){
        $sql = self::$connection->prepare("DELETE  FROM `protypes` WHERE `type_id` = $key  ");
        return $sql->execute();
    }
    function KiemTraExists($key)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE products.type_id LIKE ?" );
        $key="%".$key."%";
        $sql ->bind_param('s',$key);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        if($items !=null)
        {
            return true;
        }
        return false;
    }
    function getProtypefacture(){
        $sql = self::$connection->prepare("SELECT * FROM `protypes`");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function UpdateProtype($id,$name){
        $sql = self::$connection->prepare("UPDATE `protypes` SET `type_name`=? WHERE type_id=?");
        $sql->bind_param("si",$name,$id);
        $sql->execute();//return an object
 //return an array
    }
    function getExactlyProtype($id){
        $sql = self::$connection->prepare("SELECT * FROM protypes where type_id = ?" );
        //return an object
        $sql->bind_param("i",$id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function AddProtype($type_name){
        $sql = self::$connection->prepare("INSERT INTO `protypes`( `type_name`) VALUES (?)" );
        $sql->bind_param("s",$type_name);
        $sql->execute();//return an object
 //return an array
    }
}