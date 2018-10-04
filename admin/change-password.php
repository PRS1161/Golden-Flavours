
<?php
include '../admin/class/at-class.php';
login_auth();
$page_title = "Change Password";


$login_details = get_results("select * from tbl_admin where admin_id='{$_SESSION['userlogin_id']}'");

if (isset($_POST['submit'])) {
    
    $opass = $_POST['opass'];
    $npass = $_POST['npass'];
    $cpass = $_POST['cpass'];
    
    if($login_details['admin_password']==$opass){
        if($npass==$cpass){
            
            if($npass==$login_details['admin_password']){
                redirect("?success=2&msg=You have used old password as a new password please choose another.");
            }else{
                
                bindupdate("tbl_admin", array("admin_password"=>$npass), "admin_id='{$_SESSION['userlogin_id']}'");
                redirect("?success=1&msg=Password Changed Successfully");
            }
        }
        else{
            redirect("?success=2&msg=Confirm Password Not Match");
        }
    }
    else{
        redirect("?success=2&msg=Old Password Not Matched");
    }
    
    
    $insert_array = array(
        "category_name" => $_POST['category_name'],
    );
//    $inserted = bindinsert("tbl_category", $insert_array);
//
//    if ($inserted) {
//        redirect("?success=1&msg=Category Created Successfully");
//    } else {
//        redirect("?success=2&msg=Please Try After Some Time");
//    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
<?php
include './include/form-header-script.php';
?>
    </head>

    <body >
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>
        <!-- Pre-loader end -->

        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">

<?php
include './include/header.php';
?>

                <!-- Sidebar chat start -->

                <!-- Sidebar inner chat start-->

                <!-- Sidebar inner chat end-->
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
<?php
include './include/side-bar.php';
?>
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">

                                <!-- Main-body start -->
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <!-- Page header start -->
                                        <div class="page-header">
                                            <div class="page-header-title">
                                                <h4><?php echo $page_title; ?></h4>

                                            </div>
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="index.php">
                                                            <i class="icofont icofont-home"></i>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="breadcrumb-item"><a href="#!"><?php echo $page_title; ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Page header end -->
                                        <!-- Page body start -->
                                        <div class="page-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- Basic Inputs Validation start -->
                                                    <div class="card">
                                                        <div class="card-header">

                                                            
                                                        </div>
                                                        <div class="card-block">
                                                            <form method="post">
                                                                <div class="row">





                                                                    <div class="col-md-12">

                                                                        <div class="form-group row">

                                                                            <div class="col-sm-12">
                                                                                <input type="password" class="form-control" name="opass" id="category_name" placeholder="Old Password" required="">
                                                                                <span class="messages"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <div class="col-sm-12">
                                                                                <input type="password" class="form-control" name="npass" id="category_name" placeholder="New Password" required="">
                                                                                <span class="messages"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">

                                                                            <div class="col-sm-12">
                                                                                <input type="password" class="form-control" name="cpass" id="category_name" placeholder="Confirm Password" required="">
                                                                                <span class="messages"></span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row" style="float: right;">
                                                                            <label class="col-sm-12"></label>
                                                                            <div class="col-sm-12">
                                                                                 <button type="button" onclick="window.location.href = '<?php echo base_url(); ?>index.php'" class="btn btn-danger m-b-0">Cancel</button>
                                                                                <button type="reset" name="submit" class="btn btn-info m-b-0">Reset</button>
                                                                                <button type="submit" name="submit" class="btn btn-success m-b-0">Submit</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page body end -->
                                    </div>
                                </div>
                                <!-- Main-body end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php
include './include/form-footer-script.php';
?>

        <script>

            $().ready(function () {
                $("#category_name").validate();
            });

        </script>

    </body>

</html>
