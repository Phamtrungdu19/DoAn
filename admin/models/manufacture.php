<?php   
class Manufacture extends Db{
    //tat ca sp trong Category
    function getAllManufacture($page,$perpage){
        $firsLink = ($page - 1 ) * $perpage;
        $sql = self::$connection->prepare("SELECT * FROM `manufactures`LIMIT $firsLink,$perpage");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function phanTrang($page,$perpage,$total) { 
        $totalLinks = ceil($total/$perpage); 
        $link =""; 
        for($j=1; $j <= $totalLinks ; $j++) 
        { 
        $link = $link." <li> <a href='manufactures.php?page=$j'> $j </a></li>";   
        } 
        return $link; 
    }
    function DeleteManufactures($key){
        $sql = self::$connection->prepare("DELETE  FROM `manufactures` WHERE `maHang` = $key  ");
        return $sql->execute();
      
    }
    function KiemTraExists($key)
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE products.menu_id LIKE ?" );
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
    function getManufacture(){
        $sql = self::$connection->prepare("SELECT * FROM `manufactures`");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function UpdateManu($id,$name){
        $sql = self::$connection->prepare("UPDATE `manufactures` SET `tenHang`=? WHERE maHang=?");
        $sql->bind_param("si",$name,$id);
        $sql->execute();//return an object
 //return an array
    }
    function getExactlyManu($id){
        $sql = self::$connection->prepare("SELECT * FROM manufactures where maHang = ?" );
        //return an object
        $sql->bind_param("i",$id);
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function AddManu($tenHang){
        $sql = self::$connection->prepare("INSERT INTO `manufactures`(`tenHang`) VALUES (?)" );
        $sql->bind_param("s",$tenHang);
        $sql->execute();//return an object
 //return an array
    }
    
}