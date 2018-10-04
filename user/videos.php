
<!doctype html>
<html lang="en">



<?php include './themepart/header-script.php';


include '../admin/class/at-class.php';
?>

<body>
    <!-- ====== scroll to top ====== -->
    <a id="toTopBtn" title="Go to top" href="javascript:void(0)">
        <i class="fa fa-chevron-up"></i>
    </a>
   <!-- loader  -->
      
        <!-- loader ends  -->
    <div class="wrapper">
        <?php include './themepart/header-menu.php';?>
        <section class="page-title">
            <div class="container">
                <h2 class="title">
                    Our Videos
                </h2>
                
            </div>
        </section>


        <!-- page section  -->
        <section class="page-section  gallery-bg section-padding">
            <div class="container">
                <div class="row">
                    <?php
                        $query=get_result("select * from tbl_video");
                        foreach ($query as  $queryres) 
                        {
                    ?>
                        <div class="col-md-6 ">
                            <div class="grid-gal">
                                <div class="gal-content">
                                    <div class="gal-pic">
                                        <video width='530px' controls>
                                            <source src='../admin/<?php echo "{$queryres['vid_path']}"; ?>' type='video/mp4' >
                                        </video>
                                        <h4 class="gal-title">
                                            <?php echo "{$queryres['vid_title']}"; ?>
                                        </h4>
                                         <p>
                                            <?php  echo "{$queryres['vid_desc']}" ;?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                       
                </div>
<!--                <div class="pagi m-top20">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-angle-left"></i>Prev</a>
                        </li>
                        <li>
                            <a href="#" class="active">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">...</a>
                        </li>
                        <li>
                            <a href="#">Next<i class="fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </div>-->
            </div>
        </section>
        <!-- page section ends  -->
        <!-- call out section  -->
        <section class="call-out-section section-padding">
            <?php include './themepart/contactus.php';?>
        </section>
        <!-- call out section ends -->
          <!-- footer  -->
          <?php include './themepart/footer.php';?>
        <!-- footer ends -->

       
    </div>
    <script src="js/jquery.1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>



</html>