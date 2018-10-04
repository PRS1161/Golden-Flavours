
<?php 
include './class/at-class.php';
login_auth();
$page_title = "Admin";
if (role_check("1", "can_update") < 1) {
    redirect(base_url() . "?success=2&msg=you dont have permission to access this page.");
}
$id = $_GET['eid'];
$edit_details = get_results("SELECT * FROM `tbl_admin`  where `tbl_admin`.`admin_id`='{$id}'");

if(isset($_POST['submit']))
{
        $insert_array = array(
            "admin_name" => $_POST['admin_name'],
            "admin_email" => $_POST['admin_email'],
            "admin_password" => $_POST['admin_password'],
        );
        $inserted = bindupdate("tbl_admin", $insert_array, "admin_id='{$id}'");
        
        if($inserted)
        { 
                add_activity("Admin Update","Admin Update And Admin Id Is $id");
                redirect("admin-list.php?success=1&msg=Admin Updated Successfully");
        }
        else{
            redirect("?success=2&msg=Please Try After Some Time");
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
                                        <h4>Add New <?php echo $page_title; ?></h4>
                                        
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
                                                    
                                                    <div style="float: right">
                                                        <button onclick="window.location.href = '<?php echo base_url(); ?>admin-list.php'" class="btn btn-primary">View</button>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    <form method="post" id="myform">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                        
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label strong">Admin Name</label>
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="admin_name" required="" value="<?php echo $edit_details['admin_name']; ?>" placeholder="Admin Name">
                                                                <span class="messages"></span>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label strong">Admin E-mail</label>
                                                            <div class="col-sm-12">
                                                                <input type="email" class="form-control" name="admin_email" required="" value="<?php echo $edit_details['admin_email']; ?>" placeholder="Admin E-mail">
                                                                <span class="messages"></span>
                                                            </div>
                                                        </div>
                                                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-12 col-form-label strong">Password</label>
                                                            <div class="col-sm-12">
                                                                <input type="password" class="form-control" name="admin_password" required="" value="<?php echo $edit_details['admin_password']; ?>" placeholder="Admin Password">
                                                                <span class="messages"></span>
                                                            </div>
                                                        </div>
                                                            
                                                            <div class="form-group row" style="float: right;">
                                                            <label class="col-sm-12"></label>
                                                            <div class="col-sm-12">
                                                                <button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
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
</body>

</html>
