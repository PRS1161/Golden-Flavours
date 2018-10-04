<!DOCTYPE html>
<?php
include '../admin/class/at-class.php';

if (isset($_POST['submit'])) 
{
    $page_title="account";
    $password=$_POST['user_password'];
    $confirmpassword=$_POST['confirmpass'];
    if($password==$confirmpassword)
    {
        $insert_array = array(
        "user_name"=>$_POST['user_name'],
        "user_email" => $_POST['user_email'],
        "user_password" => $_POST['user_password'],
        "user_mobile_no" => $_POST['user_mobile_no'],
        "ip"=>0,
        "insertion_time"=> today_datetime()
        ); 
         $inserted = bindinsert("tbl_user", $insert_array);
        $insid = insertid();

         if ($inserted) 
        {
            add_activity("New $page_title Add ","$page_title Added And $page_title Id Is $insid");
            redirect("index.php?success=1&msg=$page_title Created Successfully");
            
        } 
        else 
        {
            redirect("?success=2&msg=Please Try After Some Time");
        }
    }
    else 
    {
        redirect("?error=2&msg=Password and confirm password must be same");
    }
    
}
?>
<html lang="en">
<head>
	<title>Golden Flavours</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login-style/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-style/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-style/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-style/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login-style/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-style/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-style/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login-style/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-style/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-style/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('login-style/images/bg-02.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post">
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
                                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
					<input class="input100" type="text" name="user_name" placeholder="Name">
					<span class="focus-input100"></span>
				</div>
                                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
					<input class="input100" type="text" name="user_email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>
                            
                                <div class="wrap-input100 validate-input m-b-20" data-validate="Enter Mobile No.">
                                    <input class="input100" type="text" name="user_mobile_no" placeholder="Mobile No.">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Password">
					<input class="input100" type="password" name="user_password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>
                            
                                <div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Confirm Password">
                                            <input class="input100" type="password" name="confirmpass" placeholder="Confirm Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
                                    <button class="login100-form-btn" name="submit">
						Sign Up
					</button>
				</div>

				
				

				
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login-style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-style/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login-style/vendor/bootstrap/js/popper.js"></script>
	<script src="login-style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-style/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-style/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login-style/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login-style/js/main.js"></script>

</body>
</html>