<?php
	require "..\config.php";
	require "../db.php";
	require "../models/user.php";
	$user = new User();
	if(isset($_POST['reuser'])&&isset($_POST['repass'])&&isset($_POST['rerepass']))
	{
		if($_POST['reuser']!=null&&$_POST['repass']!=null)
		{
			$userName = $_POST['reuser'];
            $pass =md5($_POST['repass']);
            $repass =md5($_POST['rerepass']);
			if($pass==$repass)
			{
                if($user -> AddUser($userName,$repass,2)==true)
                {
                    echo '<script language="javascript">';
                    echo 'alert("Đăng Kí Thành Công !!!")';
                    echo '</script>';
                    header("location:index.php");
                }
                else
                {
					echo '<script language="javascript">';
					echo 'alert("Đăng Kí Không Thành Công !!!")';
					echo '</script>';
                }
				
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("Mật Khẩu Không Trùng Khớp !!!")';
				echo '</script>';
			}
		}
	}
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form " action="register.php" method ="post">
					<span class="login100-form-logo">
						<i class=""><img src="../images/icons8_user_shield_120px_1.png" alt=""></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
                    Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="reuser" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="repass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="rerepass" placeholder="Re-Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="index.php">
							Has Account?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>