<!DOCTYPE html>
<?php
include '../admin/class/at-class.php';
require_once './config.php';
require_once './fb-config.php';

$redirectURL="http://localhost/golden-flavours/user/fb-callback.php";
$permissions=['email'];

$FBloginURL=$helper->getLoginUrl($redirectURL,$permissions);


$loginURL=$gClient->createAuthUrl();


if(isset($_POST['submit']))
{
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
     
    if($email!='' && $password!=''){ 
    /*admin*/
    $check_user = get_results("select * from tbl_user where user_email='{$email}'");
    
    if($check_user['user_email']==$email){
        if($check_user['user_password']==$password)
        {
             
            $_SESSION['userlogin_id'] = $check_user['user_id'];
            $_SESSION['userlogin_time'] = date('Y-m-d h:i:sa');
            
            $is_super = $check_user['is_super']==1 ? "1" : '0';
            $_SESSION['is_super'] = $is_super;
            insert_login_log($check_user['user_id'],$email,'1');
            redirect("index.php");
            
        }
        else
        {
            redirect("?success=1&msg=Password Not Matched With System");
            
        }
    }
        else
        {
            redirect("?success=1&msg=Email Not Matched With System");
            
        }
    }
    else
    {
        redirect("?success=1&msg=Required Fields Missing");

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
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="245751857714-h6g9s4iq9q5qf30oof7uvt5lirtkutm5.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('login-style/images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
                    <form class="login100-form validate-form" method="post">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
					<input class="input100" type="text" name="user_email" placeholder="email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="user_password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
                                    <button class="login100-form-btn" name="submit">
						Sign In
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Or login with
					</span>
				</div>

				<div class="flex-c p-b-112">
                                    <button class="login100-social-item" onclick="window.location='<?php echo $FBloginURL ;?>';">
						<i class="fa fa-facebook-f"></i>
					</button>

                                    <button class="login100-social-item" onclick="window.location='<?php echo $loginURL ;?>'">
						<img src="login-style/images/icons/icon-google.png" alt="GOOGLE">
					</button>
				</div>
                                    
                        
                               
				<div class="text-center">
                                    Don't have an account ?
                                    <a href="sign-up.php" class="txt2 hov1">
                                        <u>Sign Up</u>
					</a>
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