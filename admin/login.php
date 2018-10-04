<?php

include '../admin/class/at-class.php';

$page_title = "Login";
if(isset($_POST['submit']))
{
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];
     
    if($email!='' && $password!=''){ 
    /*admin*/
    $check_admin = get_results("select * from tbl_admin where admin_email='{$email}'");
    
    if($check_admin['admin_email']==$email){
        if($check_admin['admin_password']==$password)
        {
             
            $_SESSION['userlogin_id'] = $check_admin['admin_id'];
            $_SESSION['userlogin_time'] = date('Y-m-d h:i:sa');
            
            $is_super = $check_admin['is_super']==1 ? "1" : '0';
            $_SESSION['is_super'] = $is_super;
             insert_login_log($check_admin['admin_id'],$email,'1');
            redirect("index.php");
            
        }
        else
        {
            redirect("?error=1&msg=Password Not Matched With System");
            
        }
    }
        else
        {
            redirect("?error=1&msg=Email Not Matched With System");
            
        }
    }
    else
    {
        redirect("?error=1&msg=Required Fields Missing");

    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <?php
   include './include/form-header-script.php';
   ?>
</head>

<body class="fix-menu">
    <section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body m-auto">
                        <form class="md-float-material" method="post" id="myform">
                          
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input type="email" name="admin_email" required="" class="form-control" placeholder="Your Email Address">
                                    <span class="md-line"></span>
                                </div>
                                <div class="input-group">
                                    <input type="password" name="admin_password"  required="" class="form-control" placeholder="Password">
                                    <span class="md-line"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
<!--                                        <a href="auth-reset-password.html" class="text-right f-w-600 text-inverse"> Forgot Your Password?</a>-->
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign in</button>
                                    </div>
                                </div>
                                

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/classie/js/classie.js"></script>
<!-- Validation js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/form-validation/validate.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/pages/form-validation/form-validation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo-12.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.mousewheel.min.js"></script>

<script src="<?php echo base_url(); ?>assets/toast-master/js/jquery.toast.js"></script>
<script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert.js" type="text/javascript"></script>
<?php
if(isset($_GET['success']))
{
    if($_GET['success']==1)
    {
        ?>
            success_alert("<?php echo $_GET['msg']; ?>");
        <?php        
    }else{
    ?>
            danger_alert("<?php echo $_GET['msg']; ?>");
    <?php
    }
}
?>
            <script>
                function success_alert(data){
      $.toast({
        heading: data,
        position: 'top-right',
        icon: 'success',
        hideAfter: 3500, 
        stack: 6
      });
}
function danger_alert(data){
      $.toast({
        heading: data,
        position: 'top-right',
        icon: 'warning',
        hideAfter: 3500, 
        stack: 6
      });
}
                </script>
</body>

</html>
