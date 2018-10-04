<!doctype html>

<?php
include '../admin/class/at-class.php';
$connection= mysqli_connect("localhost", "root", "", "summerproject");

?>
<html lang="en">



    <?php include './themepart/header-script.php'; ?>

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
            <section class="sliders">
                <div class="testy-slider owl-carousel" data-items="1" data-loop="true" data-smart-speed="400" data-dots="true" data-nav="true"
                     data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="true" data-r-x-medium="1" data-r-x-medium-nav="false"
                     data-r-x-medium-dots="true" data-r-small="1" data-r-small-nav="true" data-r-small-dots="true" data-r-medium="1"
                     data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="1" data-r-large-nav="true" data-r-large-dots="false">
                    <?php 
                        $sliderquery=mysqli_query($connection,"select * from tbl_slider");
                        while($sliderqueryresult= mysqli_fetch_array($sliderquery))
                        {
                    ?>
                            <div class="item">
                                <img src="<?php echo base_url(); ?>admin/<?php echo "{$sliderqueryresult['slider_image_path']}"; ?>" alt="slider image">
                            <div class="container">
                            <div class="slider-text">
                            <h2>
                            <span><?php echo "{$sliderqueryresult['slider_title']}"; ?></span>
                            </h2>
                            <p class="slide-desc"><?php echo "{$sliderqueryresult['slider_description']}"; ?></p>
                            </div>
                            </div>
                            </div> 
                    <?php
                        }
                    ?>
                </div>
            </section>
            <!-- about section  -->
            <section class="about-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 hidden-sm hidden-xs">
                            <div class="chef-figure">
                                <img src="images/abt-chef.png" alt="about chef pic" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-xs-11 col-xs-offset-1">
                                    <h2 class="main-title text-right">
                                        <span class="bg-reverse">About Us</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="abt-content">
                                <p>
                                       Golden Flavors has been promoted by Bhavya shah by his own experience who is engaged in the food and outdoor catering business since many years. Golden Flavors has created his own empire in the outdoor catering field by his own efforts without any help of generation at the age of 23.He has gain many achievements and experience any a creator of new items. Golden Flavors is the company who sets every occasions according to budget and mind of the party.
                                       Golden Flavors is managed by qualified and experienced persons having a proven track record in this field.the company is managed in a professional way with adequate organization.the employees of the organization are trained. Golden Flavors is engaged in the business of delicious food processing and catering business. It manufatures more than 500 items comprising of Juice,Mocktails,Starters,
                                       Bittings,Soups,Chaat,Salads,North Indian(Punjabi),Chinese,Mexican,Rajasthani, Gujarati,Sweets,
                                       Deserts,Snacks,Continental,Mexican,Italian,Thai,Muglai,Etc.All theses food items are prepared as per our own traditional customs and procedures.
                                       Golden Flavors is known for its professional catering service with latest infrastructure,delicious and quality food prepared with utmost care in hygienic conditions. Bhavya caterers has specialized in outdoor catering for weeding and other occasions
                                </p>
                               

                                <div class="abt-quality">
                                    <div class="row">
                                        <div class="col-xs-6 sm-full sm-text-center">
                                            <div class="quality-box">
                                                <div class="icon">
                                                    <i class="flaticon-tray-1"></i>
                                                </div>

                                                <h4 class="quality-title">
                                                    <a href="#">100 % Fresh Organic Foods</a>
                                                </h4>
                                                <p>
                                                    Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa Cum sociis natoque.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6 sm-full sm-text-center">
                                            <div class="quality-box">
                                                <div class="icon">
                                                    <i class="flaticon-chef"></i>
                                                </div>

                                                <h4 class="quality-title">
                                                    <a href="#">Great Food Taste and quality</a>
                                                </h4>
                                                <p>
                                                    Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa Cum sociis natoque.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- about section  ends -->
            <!-- service section  -->
            <section class="service-section service-bg section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-11">
                            <h2 class="main-title text-left">
                                <span>Services</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="flaticon-cake"></i>
                                        </div>
                                        <h4 class="service-title">Birthday Party</h4>
                                        <p>
                                            Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa Cum sociis natoque.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="flaticon-catering"></i>
                                        </div>
                                        <h4 class="service-title">Charity Events</h4>
                                        <p>
                                            Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa Cum sociis natoque.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="service-chef-figure">
                                <img src="images/service-chef.png" class="img-responsive" alt="service chef">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col-sm-6 col-md-12">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="flaticon-fast-food"></i>
                                        </div>
                                        <h4 class="service-title">Events Party</h4>
                                        <p>
                                            Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa Cum sociis natoque.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-12">
                                    <div class="service">
                                        <div class="icon">
                                            <i class="flaticon-table"></i>
                                        </div>
                                        <h4 class="service-title">Private Dinning</h4>
                                        <p>
                                            Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa Cum sociis natoque.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
            <!-- service section  -->
          
            <!-- blog section -->
            <section class="blog-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="main-title text-left">
                                <span class="bg-reverse">From Our Blogs</span>
                            </h2>
                        </div>
                    </div>
                    <div class="row center-grid">
                        <div class="col-md-4 col-sm-6">
                            <div class="blog">
                                <div class="featured-pic">
                                    <a href="blog-detail-page.html">
                                        <img src="images/blog.jpg" alt="blog pic" class="img-responsive">
                                    </a>
                                </div>

                                <div class="content">
                                    <ul class="meta">
                                        <li>
                                            <i class="fa fa-calendar"></i> JAN 9, 2018
                                        </li>
                                        <li>
                                            <i class="fa fa-comments-o"></i>06
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> 12
                                        </li>
                                    </ul>
                                    <h4 class="blog-title txt-hover">
                                        <a href="blog-detail-page.html">Dolor sit amet consectetuer adipiscn</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, elit. Aenean commodo ligula eget dolor. Aenean mas cum sociis natoque penatibus magnis dis.
                                    </p>
                                    <a href="blog-detail-page.html" class="btn-secondry">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog">
                                <div class="featured-pic">
                                    <a href="blog-detail-page.html">
                                        <img src="images/blog2.jpg" alt="blog pic" class="img-responsive">
                                    </a>
                                </div>

                                <div class="content">
                                    <ul class="meta">
                                        <li>
                                            <i class="fa fa-calendar"></i> JAN 9, 2018
                                        </li>
                                        <li>
                                            <i class="fa fa-comments-o"></i>06
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> 12
                                        </li>
                                    </ul>
                                    <h4 class="blog-title txt-hover">
                                        <a href="blog-detail-page.html">Dolor sit amet consectetuer adipiscn</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, elit. Aenean commodo ligula eget dolor. Aenean mas cum sociis natoque penatibus magnis dis.
                                    </p>
                                    <a href="blog-detail-page.html" class="btn-secondry">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="blog">
                                <div class="featured-pic">
                                    <a href="blog-detail-page.html">
                                        <img src="images/blog3.jpg" alt="blog pic" class="img-responsive">
                                    </a>
                                </div>

                                <div class="content">
                                    <ul class="meta">
                                        <li>
                                            <i class="fa fa-calendar"></i> JAN 9, 2018
                                        </li>
                                        <li>
                                            <i class="fa fa-comments-o"></i>06
                                        </li>
                                        <li>
                                            <i class="fa fa-heart"></i> 12
                                        </li>
                                    </ul>
                                    <h4 class="blog-title txt-hover">
                                        <a href="blog-detail-page.html">Dolor sit amet consectetuer adipiscn</a>
                                    </h4>
                                    <p>
                                        Lorem ipsum dolor sit amet, elit. Aenean commodo ligula eget dolor. Aenean mas cum sociis natoque penatibus magnis dis.
                                    </p>
                                    <a href="blog-detail-page.html" class="btn-secondry">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog section ends -->
            <!-- call out section  -->
            <section class="call-out-section section-padding">
                <?php include './themepart/contactus.php';?>
            </section>
            <!-- call out section ends -->
            <!-- testimonial section -->
            <section class="testimonial-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-6">
                            <h2 class="main-title text-right">
                                <span class="bg-reverse">Testimonials</span>
                            </h2>
                        </div>
                    </div>
                    <div class="testy-slider testimonial-slider owl-carousel" data-items="2" data-margin="30" data-loop="true" data-smart-speed="400"
                         data-dots="false" data-nav="true" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false"
                         data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="false" data-r-small="1" data-r-small-nav="true"
                         data-r-small-dots="false" data-r-medium="2" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="2"
                         data-r-large-nav="true" data-r-large-dots="false">
                        <div class="item">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="image">
                                            <img src="images/testi-pic.jpg" alt="testimonial pic">

                                            <h5>SERENA DOE</h5>
                                            <span>Happy Customer</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="testi-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas cum sociis natoque
                                                penatibus magnis dis.
                                            </p>
                                            <p class="rating">
                                                <span>Customer Rating :</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="image">
                                            <img src="images/testi-pic2.jpg" alt="testimonial pic">

                                            <h5>RICHARD DOE</h5>
                                            <span>Happy Customer</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="testi-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas cum sociis natoque
                                                penatibus magnis dis.
                                            </p>
                                            <p class="rating">
                                                <span>Customer Rating :</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="image">
                                            <img src="images/testi-pic.jpg" alt="testimonial pic">

                                            <h5>SERENA DOE</h5>
                                            <span>Happy Customer</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="testi-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas cum sociis natoque
                                                penatibus magnis dis.
                                            </p>
                                            <p class="rating">
                                                <span>Customer Rating :</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="item">
                            <div class="testimonial">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="image">
                                            <img src="images/testi-pic2.jpg" alt="testimonial pic">

                                            <h5>RICHARD DOE</h5>
                                            <span>Happy Customer</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="testi-content">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean mas cum sociis natoque
                                                penatibus magnis dis.
                                            </p>
                                            <p class="rating">
                                                <span>Customer Rating :</span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial section ends -->
            
           
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