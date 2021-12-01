<?php
class User extends Db{
    //tat ca sp trong Category
    function KiemTra($user,$pass)
    {
        $sql = self::$connection->prepare("SELECT * FROM `users` WHERE name_user = ? AND pass_user =?" );
        $sql ->bind_param('ss',$user,$pass);
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items;
    }
    function getAllUser($page,$perpage){
        $firsLink = ($page - 1 ) * $perpage;
        $sql = self::$connection->prepare("SELECT * FROM `users`LIMIT $firsLink,$perpage");
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
        $link = $link." <li> <a href='users.php?page=$j'> $j </a></li>";   
        } 
        return $link; 
    }
    function DeleteUser($key){
        $sql = self::$connection->prepare("DELETE  FROM `users` WHERE `name_user` = ?");
        $sql->bind_param("s",$key );
        return $sql->execute();
    }
    function KiemTraExists($key)
    {
        $sql = self::$connection->prepare("SELECT * FROM users WHERE name_user LIKE ?" );
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
    function getUsers(){
        $sql = self::$connection->prepare("SELECT * FROM `users`");
        $sql->execute();//return an object
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function UpdateUser($user,$pass,$role){
        $sql = self::$connection->prepare("UPDATE `users` SET `pass_user`=?,`Role`=? WHERE name_user = ?");
        $sql->bind_param("sis",$pass,$role,$user);
        $sql->execute();//return an object
 //return an array
    }
    function getExaclyUser($userName){
        $sql = self::$connection->prepare("SELECT * FROM users where name_user = ?" );
        //return an object
        $sql->bind_param("s",$userName  );
        $sql->execute();
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $items; //return an array
    }
    function AddUser($user,$pass,$role){
        $sql = self::$connection->prepare("INSERT INTO `users`(`name_user`, `pass_user`, `Role`) VALUES (?,?,?)" );
        $sql->bind_param("ssi",$user,$pass,$role);
        $sql->execute();//return an object
 //return an array
    }
}