<?php
include '../admin/class/at-class.php';
?>
<!doctype html>
<html lang="en">

<?php 
include './themepart/header-script.php';
$connection=  mysqli_connect("localhost", "root", "", "summerproject");
$aboutuscontentquery=  mysqli_query($connection, "select * from tbl_pages");
$aboutuscontentdata=  mysqli_fetch_array($aboutuscontentquery);

$category_query= mysqli_query($connection,"select * from tbl_category");
$category_num_rows= mysqli_num_rows($category_query);

$sub_category_query= mysqli_query($connection,"select * from tbl_sub_category");
$sub_category_num_rows= mysqli_num_rows($sub_category_query);

$product_query= mysqli_query($connection,"select * from tbl_product_master");
$product_num_rows= mysqli_num_rows($product_query);

?>

<body>
    <!-- ====== scroll to top ====== -->
    <a id="toTopBtn" title="Go to top" href="javascript:void(0)">
        <i class="fa fa-chevron-up"></i>
    </a>
   <!-- loader  -->
        <div class="loader">
            <h1>Loading...</h1>
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- loader ends  -->
    <div class="wrapper">
    <?php 
    include './themepart/header-menu.php';
    ?>
        <section class="page-title">
            <div class="container">
                <h2 class="title">
                    About Us
                </h2>
            </div>
        </section>

        <section class="page-section section-padding abt-page-bg" >
            <div class="container">
                <div class="row" >

                    <div class="col-md-12">

                        <div class="abt-content">
                            <p style="text-align: justify;">
                               <?php
                               
                               echo "{$aboutuscontentdata['page_content']}";
                               ?>
                            </p>
                           
                            <div class="row">
                                <div class="col-xs-11 col-sm-8 p-top20">
                                    <h3 class="main-title text-left">
                                        <span>
                                            Why Choose us
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-6 sm-full sm-text-center">
                                    <div class="quality-box">
                                        <div class="icon">
                                            <i class="flaticon-tray-1"></i>
                                        </div>

                                        <h4 class="quality-title">Weddings</h4>
                                        <p style="text-align: justify;">
                                           We can make dreams come true on your special day. Our experience & personal service has changed the way India celebrates weddings.
                                        </p>

                                    </div>
                                </div>
                               <div class="col-xs-6 sm-full sm-text-center">
                                    <div class="quality-box">
                                        <div class="icon">
                                            <div class="icon">
                                                <i class="flaticon-chef"></i>
                                            </div>
                                        </div>

                                        <h4 class="quality-title">Major Events</h4>
                                        <p style="text-align: justify;">
                                            Social affairs and grand dos get that mesmerising effect by a special touch from Golden Flavours.The dedicated staff is ever ready to make an event a grand success.
                                        </p>
                                    </div>
                                </div>
                            </div> 
                           
                            
                            <div class="row">
                                <div class="col-xs-6 sm-full sm-text-center">
                                    <div class="quality-box">
                                        <div class="icon">
                                            <div class="icon">
                                                <i class="flaticon-tray-1"></i>
                                            </div>

                                        </div>

                                        <h4 class="quality-title">Food & Beverages</h4>
                                        <p style="text-align: justify;">
                                            At Golden Flavours we believe in only quality hence, the raw material is carefully selected by us and is sourced from the best suppliers with an emphasis laid on fresh, organic produce.
                                        </p>
                                    </div>
                                </div>
                                
                            <div class="col-xs-6 sm-full sm-text-center">
                                    <div class="quality-box">
                                        <div class="icon">
                                            <i class="flaticon-chef"></i>
                                        </div>

                                        <h4 class="quality-title">Corporate Events</h4>
                                        <p style="text-align: justify;">
                                            Mix business with pleasure. At Golden Flavours, our complete catering solutions for your business meets or any other corporate events customised to suit your needs.
                                        </p>

                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-xs-6 sm-full sm-text-center">
                                    <div class="quality-box">
                                        <div class="icon">
                                            <div class="icon">
                                                <i class="flaticon-tray-1"></i>
                                            </div>

                                        </div>

                                        <h4 class="quality-title">Private Events</h4>
                                        <p style="text-align: justify;">
                                            Whether it's a small gathering of family and friends, a formal dinner party or a themed party for 1,000, our expert catering will make every event a delightful experience.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full sm-text-center">
                                    <div class="quality-box">
                                        <div class="icon">
                                            <div class="icon">
                                                <i class="flaticon-chef"></i>
                                            </div>
                                        </div>

                                        <h4 class="quality-title">Birthday Celebrations</h4>
                                        <p style="text-align: justify;">
                                            We can arrange parties for any number of guests and any occasion birthdays, office parties, exhibitions, etc. It makes every effort to give a warm welcome to the guests.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
<!--                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-11 col-sm-6">
                                <h3 class="main-title text-left">
                                    <span>
                                        Our Story
                                    </span>
                                </h3>
                            </div>
                        </div>

                        <ul class="timeline">
                            <li>

                                <img src="images/about/timeline.jpg" class="featured-pic" alt="">

                                <h4 class="title"><a href="#">WHERE IT ALL Started…</a></h4>
                                <p>
                                    Consectetuer adipiscing elit. Aenean commodo eg cos dolor. Aenean massa. Cum sociis natoq
                                    penat us magnis dis parturient montes, nascet ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>

                            </li>
                            <li>

                                <img src="images/about/timeline2.jpg" class="featured-pic" alt="">

                                <h4 class="title"><a href="#">SOMETHING FOR EVERYONE</a></h4>
                                <p>
                                    Consectetuer adipiscing elit. Aenean commodo eg cos dolor. Aenean massa. Cum sociis natoq
                                    penat us magnis dis parturient montes, nascet ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>

                            </li>
                            <li>

                                <img src="images/about/timeline3.jpg" class="featured-pic" alt="">

                                <h4 class="title"><a href="#">Our Food, Our Good Times</a></h4>
                                <p>
                                    Consectetuer adipiscing elit. Aenean commodo eg cos dolor. Aenean massa. Cum sociis natoq
                                    penat us magnis dis parturient montes, nascet ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>

                            </li>
                            <li>

                                <img src="images/about/timeline4.jpg" class="featured-pic" alt="">

                                <h4 class="title"><a href="#">Descover Our Story</a></h4>
                                <p>
                                    Consectetuer adipiscing elit. Aenean commodo eg cos dolor. Aenean massa. Cum sociis natoq
                                    penat us magnis dis parturient montes, nascet ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>

                            </li>
                            <li>

                                <img src="images/about/timeline4.jpg" class="featured-pic" alt="">

                                <h4 class="title"><a href="#">We Gain Respect</a></h4>
                                <p>
                                    Consectetuer adipiscing elit. Aenean commodo eg cos dolor. Aenean massa. Cum sociis natoq
                                    penat us magnis dis parturient montes, nascet ridiculus mus. Donec quam felis, ultricies
                                    nec, pellentesque eu, pretium quis, sem.
                                </p>

                            </li>
                        </ul>
                    </div>-->

                </div>
            </div>
        </section>


        <!-- video section  -->
        <section class="section-padding video-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">
                            <!-- fearture -->
                            <div class="col-xs-6">
                                <div class="feature">
                                    <div class="icon">
                                        <i class="flaticon-restaurant"></i>
                                    </div>
                                    <div class="feature-text">

                                        <h5 class="title">
                                            <span class="count"><?php echo $category_num_rows?></span>
                                            Categories
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- feature ends  -->
                            <!-- fearture -->
                            <div class="col-xs-6">
                                <div class="feature">
                                    <div class="icon">
                                        <i class="flaticon-coffee"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h5 class="title">
                                            <span class="count"><?php echo $sub_category_num_rows?></span>Sub Categories
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- feature ends  -->
                           
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="video-box">

                           <!-- fearture -->
                            <div class="col-xs-6">
                                <div class="feature">
                                    <div class="icon">
                                        <i class="flaticon-chef"></i>
                                    </div>
                                    <div class="feature-text">

                                        <h5 class="title">
                                            <span class="count"><?php echo $product_num_rows?></span>Products
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- feature ends  -->
                            <!-- fearture -->
                            <div class="col-xs-6">
                                <div class="feature">
                                    <div class="icon">
                                        <i class="flaticon-table"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h5 class="title">
                                            <span class="count">5</span>Years of experience
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <!-- feature ends  -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video section ends -->
       
      
     
        <!-- footer  -->
      <?php 
  include './themepart/footer.php';
      ?>
        <!-- footer ends -->

    </div>
    <script src="js/jquery.1.12.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>



</html>