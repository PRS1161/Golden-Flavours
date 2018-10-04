<?php 
include '../admin/class/at-class.php';
login_auth();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Golden Flavours</title>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="#">
    <meta name="keywords" content="flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Mada:300,400,500,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!--SVG Icons Animated-->
    <link rel="stylesheet" type="text/css" href="assets/icon/SVG-animated/svg-weather.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/menu-search/css/component.css">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/dashboard/horizontal-timeline/css/style.css">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/dashboard/amchart/css/amchart.css">
    <!-- Calender css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/widget/calender/pignose.calendar.min.css">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="assets/pages/flag-icon/flag-icon.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/linearicons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/ionicons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/pages/sticky/css/jquery.postitall.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php echo base_url(); ?>admin/assets/pages/sticky/css/trumbowyg.css" type="text/css" media="all">
       <style type="text/css">
    /**  =====================
      Sticky css start
      ==========================  **/
      /*add Button css Start*/
      
      .pulse-ring {
        content: '';
        width: 140px;
        height: 55px;
        border: 20px solid #1b8bf9;
        position: absolute;
        top: 18px;
        left: 18px;
        background-color: #1b8bf9;
        animation: pulsate infinite 1.5s;
    }
    
    @-webkit-keyframes pulsate {
        0% {
            -moz-transform: scale(0);
            opacity: 0.0;
        }
        25% {
            -moz-transform: scale(0);
            opacity: 0.1;
        }
        50% {
            -moz-transform: scale(0.1);
            opacity: 0.3;
        }
        75% {
            -moz-transform: scale(0.5);
            opacity: 0.5;
        }
        100% {
            -moz-transform: scale(1);
            opacity: 0.0;
        }
    }
    
    @-moz-keyframes pulsate {
        0% {
            -moz-transform: scale(0);
            opacity: 0.0;
        }
        25% {
            -moz-transform: scale(0);
            opacity: 0.1;
        }
        50% {
            -moz-transform: scale(0.1);
            opacity: 0.3;
        }
        75% {
            -moz-transform: scale(0.5);
            opacity: 0.5;
        }
        100% {
            -moz-transform: scale(1);
            opacity: 0.0;
        }
    }

    
    /*====== Sticky End ======*/
</style>
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <!-- Menu header start -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?php
            include './include/header.php';
            ?>

            <!-- Sidebar chat start -->
          
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php
                                include './include/side-bar.php';
                    ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Dashboard</h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Pages</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                        <div class="row">
                                            <!-- statstic card start -->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card widget-statstic-card borderless-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h4>Categories</h4>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $connection = mysqli_connect("localhost", "root", "", "summerproject");
                                                    $count_category = mysqli_query($connection, "select * from tbl_category") or die(mysqli_error($connection));
                                                    $category_num_rows= mysqli_num_rows($count_category);
                                                    ?>
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block"><?php echo $category_num_rows; ?> Categories</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statstic card end -->
                                            <!-- statstic card start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card widget-statstic-card borderless-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h4>Sub Categories</h4>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <?php
                                                            $count_sub_category= mysqli_query($connection,"select * from tbl_sub_category");
                                                            $sub_category_num_rows=mysqli_num_rows($count_sub_category);
                                                        ?>
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block"> <?php echo $sub_category_num_rows; ?> Sub Categories</h3>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statstic card end -->
                                            <!-- statstic card start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card widget-statstic-card borderless-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h4>Products</h4>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                       <?php
                                                            $count_product= mysqli_query($connection,"select * from tbl_product_master");
                                                            $product_num_rows=mysqli_num_rows($count_product);
                                                        ?>
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block"><?php echo $product_num_rows;  ?> Products</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6">
                                                <div class="card widget-statstic-card borderless-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h4>Our Photos</h4>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                       <?php
                                                            $count_photos= mysqli_query($connection,"select * from tbl_gallery_images");
                                                            $photos_num_rows=mysqli_num_rows($count_photos);
                                                        ?>
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block"><?php echo $photos_num_rows;  ?> Photos</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-6 col-xl-6">
                                                <div class="card widget-statstic-card borderless-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h4>Our Videos</h4>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                       <?php
                                                            $count_video= mysqli_query($connection,"select * from tbl_video");
                                                            $video_num_rows=mysqli_num_rows($count_video);
                                                        ?>
                                                        <div class="text-left">
                                                            <h3 class="d-inline-block"><?php echo $video_num_rows;  ?> Videos</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statstic card end -->
                                            <!-- Start -->
                                            
                                            <div class="col-xl-6 col-md-6 card-block sticky-card">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>Recurring Income Transaction</h5>
                                                   <div class="card-block reset-table p-t-0">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr class="text-uppercase">
                                                                        <th>Date</th>
                                                                        <th>Category</th>
                                                                        <th>Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $fetch_income = get_result("SELECT * FROM `tbl_recurring_transaction` WHERE is_delete = '0' AND is_debit_credit = 'credit' order by `tbl_recurring_transaction`.recurring_transaction_id DESC limit 0,5");
                                                                      $fetch_cat = get_result("SELECT * FROM `tbl_category` WHERE category_id = {$fetch_income['category_id']}");    
                                                                    foreach ($fetch_income as $fetch_income)
                                                                  
                                                                    {
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $fetch_income['recurring_transaction_date'] ?></td>
                                                                        <?php    $fetch_cat = get_results("SELECT * FROM `tbl_category` WHERE category_id = {$fetch_income['category_id']}");  ?>
                                                                        <td><?php echo $fetch_cat['category_name'] ?></td>
                                                                        <td><?php echo $fetch_income['recurring_transaction_amount'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                         </div>
                                                </div>
                                            </div>
                                            <!-- Analytics End -->
                                             <div class="col-xl-6 col-md-6 card-block sticky-card">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>Recurring Expense Transaction</h5>
                                                   <div class="card-block reset-table p-t-0">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr class="text-uppercase">
                                                                        <th>Date</th>
                                                                        <th>Category</th>
                                                                        <th>Amount</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $fetch_income = get_result("SELECT * FROM `tbl_recurring_transaction` WHERE is_delete = '0' AND is_debit_credit = 'debit' order by `tbl_recurring_transaction`.recurring_transaction_id DESC limit 0,5");
                                                                        
                                                                    foreach ($fetch_income as $fetch_income)
                                                                  
                                                                    {
                                                                    ?>
                                                                    <tr>
                                                                      <td><?php echo $fetch_income['recurring_transaction_date'] ?></td>
                                                                      <?php    $fetch_cat = get_results("SELECT * FROM `tbl_category` WHERE category_id = {$fetch_income['category_id']}");  ?>
                                                                      <td><?php echo $fetch_cat['category_name'] ?></td>
                                                                        <td><?php echo $fetch_income['recurring_transaction_amount'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                         </div>
                                                </div>
                                            </div>
                                             <div class="col-xl-12 col-md-6 card-block sticky-card">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>TO DO</h5>
                                                   <div class="card-block reset-table p-t-0">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr class="text-uppercase">
                                                                        <th>Title</th>
                                                                        <th>Date</th>
                                                                        <th>Time</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $fetch_todo = get_result("SELECT * FROM `tbl_todo` WHERE is_delete = '0' order by `tbl_todo`.todo_id DESC limit 0,5");
                                                                    foreach ($fetch_todo as $fetch_todo)
                                                                  
                                                                    {
                                                                    ?>
                                                                    <tr>
                                                                      <td><?php echo $fetch_todo['todo_title'] ?></td>
                                                                        <td><?php echo $fetch_todo['todo_date'] ?></td>
                                                                        <td><?php echo $fetch_todo['todo_time'] ?></td>
                                                                    </tr>
                                                                    <?php } ?>
                                                                  
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                         </div>
                                                </div>
                                            </div>
                                            <!-- Reset Order Start -->
                                            
                                            <!-- Reset Order End -->
                                            <!-- facebook Start -->
                                           
                                            <!-- End-->
                                            <!-- Start -->
                                            <!-- Last Task Start-->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>Last Task</h5>
                                                    </div>
                                                    <div class="card-block p-t-0">
                                                        <div class="new-task">
                                                            <div class="to-do-list">
                                                                <div class="checkbox-fade fade-in-primary">
                                                                    <label class="check-task">
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                        </span>
                                                                        <span>Create Ecommerce Template</span>
                                                                        <p class="text-muted">Woocommerce</p>
                                                                    </label>
                                                                </div>
                                                                <div class="f-right">
                                                                    <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="to-do-list">
                                                                <div class="checkbox-fade fade-in-primary">
                                                                    <label class="check-task">
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                        </span>
                                                                        <span>Meeting with HOD and board</span>
                                                                        <p class="text-muted">Woocommerce</p>
                                                                    </label>
                                                                </div>
                                                                <div class="f-right">
                                                                    <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="to-do-list">
                                                                <div class="checkbox-fade fade-in-primary">
                                                                    <label class="check-task">
                                                                        <input type="checkbox" value="">
                                                                        <span class="cr">
                                                                            <i class="cr-icon icofont icofont-ui-check txt-primary"></i>
                                                                        </span>
                                                                        <span>Create Ecommerce Template</span>
                                                                        <p class="text-muted">Woocommerce</p>
                                                                    </label>
                                                                </div>
                                                                <div class="f-right">
                                                                    <a href="#!" class="delete_todolist"><i class="icofont icofont-ui-delete"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-block">
                                                        <h5>Client Activity</h5>
                                                    </div>
                                                    <div class="card-block client-card table-1-card p-t-0">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr class="text-capitalize">
                                                                        <th>User</th>
                                                                        <th>Visits</th>
                                                                        <th>Purchases</th>
                                                                        <th>Call</th>
                                                                        <th>Total Profit</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="photo-table img"><a href="#!"><img class="img-circle" src="assets/images/widget/user2.png" alt="chat-user"></a>
                                                                            <p>Angelina Vitale</p>
                                                                        </td>
                                                                        <td>287</td>
                                                                        <td>34</td>
                                                                        <td>52</td>
                                                                        <td class="text-success">5,946 $</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="photo-table img"><a href="#!"><img class="img-circle" src="assets/images/widget/user3.png" alt="chat-user"></a>
                                                                            <p>Angelina Vitale</p>
                                                                        </td>
                                                                        <td>102</td>
                                                                        <td>346</td>
                                                                        <td>52</td>
                                                                        <td class="text-success">5,946 $</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="photo-table img"><a href="#!"><img class="img-circle" src="assets/images/widget/user4.png" alt="chat-user"></a>
                                                                            <p>Angelina Vitale</p>
                                                                        </td>
                                                                        <td>287</td>
                                                                        <td>123</td>
                                                                        <td>52</td>
                                                                        <td class="text-success">5,946 $</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Last Task End-->
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <!-- Required Jqurey -->
    <script type="text/javascript" src="bower_components/jquery/js/jquery.min.js"></script>
    <script src="bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- Calender js -->
    <script type="text/javascript" src="bower_components/moment/js/moment.min.js"></script>
    <script type="text/javascript" src="assets/pages/widget/calender/pignose.calendar.min.js"></script>
    <!-- classie js -->
    <script type="text/javascript" src="bower_components/classie/js/classie.js"></script>
    <!-- c3 chart js -->
    <script src="bower_components/c3/js/c3.js"></script>
    <!-- knob js -->
    <script src="assets/pages/chart/knob/jquery.knob.js"></script>
    <script type="text/javascript" src="assets/pages/widget/jquery.sparkline.js"></script>
    <!-- Rickshow Chart js -->
    <script src="bower_components/d3/js/d3.js"></script>
    <script src="bower_components/rickshaw/js/rickshaw.js"></script>
    <!-- Morris Chart js -->
    <script src="bower_components/raphael/js/raphael.min.js"></script>
    <script src="bower_components/morris.js/js/morris.js"></script>
    <!-- Todo js -->
    <script type="text/javascript" src="assets/pages/todo/todo.js"></script>
    <!-- Float Chart js -->
    <script src="assets/pages/chart/float/jquery.flot.js"></script>
    <script src="assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="assets/pages/chart/float/jquery.flot.pie.js"></script>
    <!-- echart js -->
    <script src="assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>
    <!-- Horizontal-Timeline js -->
    <script type="text/javascript" src="assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
    <!-- amchart js -->
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/amcharts.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/serial.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/light.js"></script>
    <script type="text/javascript" src="assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <!-- pcmenu js -->
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/demo-12.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    
    
<!--sticky js-->
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/pages/sticky/js/trumbowyg.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/pages/sticky/js/jquery.minicolors.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/pages/sticky/js/jquery.postitall.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin/assets/pages/sticky/js/sticky.js"></script>
</body>

</html>
