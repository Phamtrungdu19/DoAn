<?php    session_start();
class Db
{

    public static $connection;
    public function __construct()
    {
        if(!isset($_SESSION['user'])||$_SESSION['user']['role']!=1)
        {
            header("location:../Login/index.php");
        }
        if (!self::$connection) {
            self::$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME,PORT);
            self::$connection->set_charset(DB_CHARSET);
        }
        return self::$connection;
    }
}
