<?php
include './class/at-class.php';
login_auth();
//if(role_check("9","can_view")<1)
//{
//    redirect(base_url()."?success=2&msg=you dont have permission to access this page.");
//}
$page_title = "Sub Category";
?>
<!DOCTYPE html>
<html ng-app="myApp" ng-app lang="en">

    <head>
        <?php
        include './include/form-header-script.php';
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/assets/pages/data-table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

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
                include './include/header.php';
                ?>
                <!-- Menu header end -->
                <div class="pcoded-main-container">
                    <?php
                    include './include/side-bar.php';
                    ?>
                    <div class="pcoded-wrapper">
                        <div class="pcoded-content">
                            <div class="pcoded-inner-content">

                                <!-- Main-body start -->
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <!-- Page-header start -->
                                        <div class="page-header">
                                            <div class="page-header-title">
                                                <h4><?php echo $page_title; ?></h4>
                                            </div>
                                            <div class="page-header-breadcrumb">
                                                <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="<?php echo base_url(); ?>">
                                                            <i class="icofont icofont-home"></i>
                                                        </a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a href="#!"><?php echo $page_title; ?></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Page-header end -->
                                        <!-- Page-body start -->
                                        <div class="page-body">
                                            <div class="row">
                                                <div class="col-sm-12">

                                                    <!-- Multi-column table start -->
                                                    <div class="card">
                                                        
                                                        <div class="card-block">
                                                            <div class="dt-responsive table-responsive">
                                                                <div ng-controller="customersCrtl">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-2">Page Size:
                                                                        <?php
                                                                       $total =  get_result("SELECT
                                                                            *
                                                                        FROM
                                                                            `tbl_sub_category`")
                                                                        ?>
                                                                        <select ng-model="entryLimit" id="filterpage" class="form-control">
                                                                            <option>10</option>
                                                                            <option>20</option>
                                                                            <option>50</option>
                                                                            <option>100</option>
                                                                            <option value="<?php echo count($total); ?>">All</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-3">Filter:
                                                                        <input type="text" ng-model="search" ng-change="filter()" placeholder="Filter" class="form-control" style="height: 38px;"/>
                                                                    </div>
                                                                    <div class="col-md-7">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="col-md-7">
                                                                        <h5>  <?php echo count($total); ?> Records Found </h5>
                                                                </div>
                                                                <br/>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <table class="table table-striped table-bordered">
                                                                        <thead>
                                                                            <th>Id </th>
                                                                            <th>Sub Category Name </th>
                                                                            <th>Sub Category Image</th>
                                                                            <th>Category Name</th>
                                                                        </thead>
                                                                        <tbody>
                                                                            <?php
                                                                                $data="SELECT
                                                                                `tbl_sub_category`.`s_id`
                                                                                    , `tbl_sub_category`.`s_name`
                                                                                    , `tbl_sub_category`.`s_image`
                                                                                     , `tbl_category`.`c_name`
                                                                                    FROM
                                                                                    `summerproject`.`tbl_category`
                                                                                    INNER JOIN `summerproject`.`tbl_sub_category` 
                                                                                    ON (`tbl_category`.`c_id` = `tbl_sub_category`.`c_id`);";
                                                                                $get_sub_category= get_result($data);
                                                                                //$get_category= get_result("select c_name from tbl_category");
                                                                                foreach ($get_sub_category as $get_sub_category)
                                                                                {
                                                                            ?>
                                                                            <tr>
                                                                                <td><?php echo $get_sub_category['s_id'];?></td>
                                                                                <td><?php echo $get_sub_category['s_name'];?></td>
                                                                                <td><img style="width:115px;" src="<?php echo $get_sub_category['s_image'];?>"></td>
                                                                                <td><?php echo $get_sub_category['c_name'];?></td>
                                                                               
                                                                            </tr>
                                                                            <?php 
                                                                                    }
                                                                            ?>
                                                                        </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="col-md-12" ng-show="filteredItems == 0">
                                                                        <div class="col-md-12">
                                                                            <h4>No <?php echo $page_title; ?> found</h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12" ng-show="filteredItems > 0">    
                                                                        <div pagination="" max-size="5" page="" on-select-page="setPage(page)" boundary-links="trcurrentPageue" total-items="filteredItems" items-per-page="entryLimit" class="pagination-small" previous-text="&laquo;" next-text="&raquo;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                                  
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Multi-column table end -->

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page-body end -->
                                    </div>
                                </div>


                                <!-- Main-body end -->
                                
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
include './include/form-footer-script.php';
?>
      
        <script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/i18next/js/i18next.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
        <!-- Custom js -->
        <script src="<?php echo base_url(); ?>admin/assets/pages/data-table/js/data-table-custom.js"></script>
   <script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/pages/advance-elements/swithces.js"></script>
<!-- Switch component js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>admin/bower_components/switchery/js/switchery.min.js"></script>
     <?php
include './include/anguler-js.php';
    ?>
    <script>
        
        datatbl("get_sub_category");
         
    </script>
   
    </body>

</html>
