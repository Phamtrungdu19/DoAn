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
    function AddUser($user,$pass,$role){
        $sql = self::$connection->prepare("INSERT INTO `users`(`name_user`, `pass_user`, `Role`) VALUES (?,?,?)" );
        $sql->bind_param("ssi",$user,$pass,$role);
        return $sql->execute();//return an object
 //return an array
    }
}
