<?php
require "config.php";
require "models/db.php";
require "models/product.php";
require "models/protype.php";
require "models/manufacture.php";
require "models/user.php";
$key;
$manufactures = new Manufacture;
$products = new Product;
$protype = new Protype;
$user = new User;


if(isset($_GET['key']))
{
    $key =$_GET['key'];
    
    $products -> DeleteProducts($key);
    echo "xoa Thanh cong";
    echo '<script language="javascript">';
	echo 'alert("Xóa Thành Công !!!")';
	echo '</script>';
    header("location:index.php");
}
if(isset($_GET['keymanu']) && $manufactures -> KiemTraExists($_GET['keymanu'])==false)
{
    $key =$_GET['keymanu'];
    $manufactures -> DeleteManufactures($key);
    echo '<script language="javascript">';
	echo 'alert("Xóa Thành Công !!!")';
	echo '</script>';
    header("location:manufactures.php");  
}
if(isset($_GET['keytype'])&&$protype -> KiemTraExists($_GET['keytype'])==false)
{
    $key =$_GET['keytype'];
    $protype -> DeleteProtype($key);
    echo '<script language="javascript">';
	echo 'alert("Xóa Thành Công !!!")';
	echo '</script>';
    header("location:protypes.php");
}
if(isset($_GET['userName'])&&$user -> KiemTraExists($_GET['userName'])==true&&$_SESSION['user']['user']!=$_GET['userName'])
{
    $key =$_GET['userName'];
    $user -> DeleteUser($key);
    echo '<script language="javascript">';
	echo 'alert("Xóa Thành Công !!!")';
	echo '</script>';
    header("location:users.php");
}
else
{       
    echo '<script language="javascript">';
    echo 'alert("Xóa Không Thành Công !!!")';
   

    echo '</script>';
    echo '<a href="javascript:history.go(-1)">Quay Lại...</a>';
    
    
}



