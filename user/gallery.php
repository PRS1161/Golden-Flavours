
<!doctype html>
<html lang="en">



<?php include './themepart/header-script.php';?>
  <?php 
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
                    Our Gallery
                </h2>
               
            </div>
        </section>


        <!-- page section  -->
        <section class="page-section gallery-measonary  gallery-bg section-padding">
            <div class='container'>
<?php 
 $query=get_result("select * from tbl_gallery_images");

                echo "<div class='row gal-items'>";
                  
                    foreach ($query as  $queryres) {
                   echo "<div class='col-md-4 col-sm-6 grid-item'>";
                        echo "<div class='grid-gal'>";
                            echo "<div class='gal-content'>";
                                echo "<div class='gal-pic'>";

                                    echo "<img  alt='gallery pic' src='../admin/{$queryres['img_path']}'>";
                                
                              echo   "</div>";
                                echo "<div class='gal-details'>";
                                    echo "<h4 class='gal-title'>";
                                        echo "<a href='#'> {$queryres['img_title']}</a>";
                                    echo "</h4>";
                                    echo "<p>";
                                        echo $queryres['img_desc'];
                                       
                                    echo "</p>";

                                    echo "<a href='../admin/{$queryres['img_path']}' class='expand gallery-popup'>";
                                       echo  "<i class='fa fa-expand'></i>";
                                    echo "</a>";
                                echo "</div>";
                            echo "</div>";

                        echo "</div>";
                    echo "</div>"; 
                    }               
                    echo "</div>";
 ?>
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