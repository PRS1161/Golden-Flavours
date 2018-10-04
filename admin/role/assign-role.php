<?php
include '../class/at-class.php';
$page_title = "Assign Role To Admin";
$admin_id = $_GET['admin'];

if(isset($_POST['add_data']))
{
    $form_id = $_POST['form_id'];
    $rs=0;
    for($i=0;$i<count($form_id);$i++)
    {
        $frmid = $_POST['form_id'][$i];
        $can_view = $_POST["can_view{$frmid}"];
        $can_insert = $_POST["can_insert{$frmid}"];
        $can_delete = $_POST["can_delete{$frmid}"];
        $can_update = $_POST["can_update{$frmid}"];
        $approval = $_POST["approval{$frmid}"];
        $insert = array(
            "admin_id" => $admin_id,
            "form_id" => $_POST['form_id'][$i],
            "can_view" => isstval($can_view),
            "can_insert" => isstval($can_insert),
            "can_delete" => isstval($can_delete),
            "can_update" => isstval($can_update),
            "approval" => isstval($approval),
        );
        $ins = bindinsert("tbl_role_master", $insert);
        if($ins)
        {
            $rs+=$i;
        }
    }
    if($rs>0)
    {
        $_SESSION['set_roles'] = '1';
//        unset($emp_id);
        redirect(base_url()."admin-list.php?success=1&msg=Admin Role Assigned");
    }else{
        redirect("?success=2&msg=Please Try Again");
    }
}
function isstval($val)
{
    return isset($val) ? 1 : 0;
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
<?php
include '../include/form-header-script.php';
?>
        <style>
            .tax_percntage{width: 90% !important;}
            .table td, .table th {
                padding: 0.3rem !important;
            }
            .main-body .page-wrapper .page-header {
            margin-bottom: 0px !important;
            margin-top: -38px !important;
        }
        hr {
           margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;  
        }


/*        .pcoded-wrapper {
            margin-top: -104px;
        }*/
th, td {
    white-space: nowrap;
    padding-left: 42px;
}
        </style>
    </head>
    <!-- Menu horizontal fixed layout -->

    <body>
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="ball-scale">
                <div></div>
            </div>
        </div>
        <!-- Pre-loader end -->

        <div id="pcoded" class="pcoded">

            <div class="pcoded-container">
                <!-- Menu header start -->
<?php
include '../include/header.php';
?>
                <!-- Menu header end -->
                <div class="pcoded-main-container">
                <?php
                include '../include/side-bar.php';
                ?>
                    <div class="pcoded-wrapper">
<!--                        <center>
                            <button class="btn btn-success openmenu" style="border-radius: 11px;">Menu <span class="fa fa-arrow-down"></span></button>
                            <button class="btn btn-success closemenu" style="border-radius: 11px;display: none;">Menu <span class="fa fa-arrow-up"></span></button>
                        </center>-->
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">

                                <!-- Main-body start -->
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <!-- Page header start -->
                                        <div class="page-header">
                                            <div class="page-header-title">
                                                <h4 style="padding-top: 47px;"><?php echo $page_name; ?></h4>

                                            </div>
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="<?php echo base_url(); ?>">
                                                            <i class="icofont icofont-home"></i>
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!"><?php echo $page_name; ?> </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Page header end -->
                                        <!-- Page body start -->
                                        <div class="page-body">
                                            <div class="row">
                                                <div class="col-sm-12" style="padding-top: 33px;">
                                                    <!-- Basic Inputs Validation start -->
                                                    <div class="card">
                                                         
                                                        <div class="card-block">
                                                            <form  method="post">
                                                                <table>
                                                                    <tr>
                                                                        <td>Select All</td>
                                                                        <td><input type="checkbox" value="1" id="allview" onclick="check_all('allview','viewchk');" name="all_view"></td>
                                                                        <td><input type="checkbox" value="1" id="all_insert" onclick="check_all('all_insert','insertchk');" name="all_insert"></td>
                                                                        <td><input type="checkbox" value="1" id="all_update" onclick="check_all('all_update','updatechk');" name="all_update"></td>
                                                                        <td><input type="checkbox" value="1" id="all_delete" onclick="check_all('all_delete','deletechk');" name="all_delete"></td>
                                                                        <td><input type="checkbox" value="1" id="all_aprove" onclick="check_all('all_aprove','aprovechk');" name="all_aprove"></td>
                                                                    </tr>
                                                                </table>
                                                                <hr>
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td>Form Name</td>
                                                                        <td>View</td>
                                                                        <td>Insert</td>
                                                                        <td>Update</td>
                                                                        <td>Delete</td>
                                                                        <td>Approve</td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    $form_details = get_result("SELECT * FROM `tbl_form_master`");
                                                                    $sr = 0;
                                                                    foreach ($form_details as $form_details){
                                                                        $sr++;
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <?php echo "(".$sr.") ".$form_details['form_name']; ?>
                                                                            <input type="hidden" value="<?php echo $form_details['form_id']; ?>" name="form_id[]">
                                                                        </td>
                                                                        <td><input type="checkbox" class="viewchk" id="viewchkbx<?php echo $form_details['form_id']; ?>" data-id="<?php echo $form_details['form_id']; ?>" value="1" name="can_view<?php echo $form_details['form_id']; ?>"></td>
                                                                        <td><input type="checkbox" class="insertchk rolechk" id="elseviewchk1<?php echo $form_details['form_id']; ?>" data-id="<?php echo $form_details['form_id']; ?>" value="1" name="can_insert<?php echo $form_details['form_id']; ?>"></td>
                                                                        <td><input type="checkbox" class="updatechk rolechk" id="elseviewchk2<?php echo $form_details['form_id']; ?>" data-id="<?php echo $form_details['form_id']; ?>" value="1" name="can_update<?php echo $form_details['form_id']; ?>"></td>
                                                                        <td><input type="checkbox" class="deletechk rolechk" id="elseviewchk3<?php echo $form_details['form_id']; ?>" data-id="<?php echo $form_details['form_id']; ?>" value="1" name="can_delete<?php echo $form_details['form_id']; ?>"></td>
                                                                        <td><input type="checkbox" class="aprovechk rolechk" id="elseviewchk4<?php echo $form_details['form_id']; ?>" data-id="<?php echo $form_details['form_id']; ?>" value="1" name="approval<?php echo $form_details['form_id']; ?>"></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                    </tbody>
                                                                </table>

                                                                <div class="form-group row pull-right">
                                                                    <label class="col-sm-10"></label>
                                                                    <!--<div class="col-sm-10">-->
                                                                    <button type="submit" name="add_data" class="btn btn-primary m-b-0">Submit</button>
                                                                    <a href="#." style="margin-left: 15px;" class="btn btn-primary m-b-0">View</a>
                                                                    <!--</div>-->
                                                                </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Basic Inputs Validation end -->

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->

    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
<?php
include '../include/form-footer-script.php';
?>
     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>design/assets/pages/form-validation/validate.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <?php
        include './script.php';
    ?>
</body>

</html>
