
<!doctype html>
<html lang="en">



<?php include './themepart/header-script.php';?>

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
        <?php include './themepart/header-menu.php';?>
        <section class="page-title">
            <div class="container">
                <h2 class="title">
                    Create Dish
                </h2>
                
            </div>
        </section>
        <!-- service section  -->
        <!-- reservation section -->
        <section class="reservation-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-8">
                                <h2 class="main-title text-left">
                                    <span>Create Your Dish</span>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10">


                                <div class="sub-title">
                                    <p>
                                       Create your own dish with our delicious menu items and make your event memorable with us.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form action="#" method="post" class="reserv-form">

                            <div class="row">
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Name">
                                        <span>
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Phone">
                                        <span>
                                            <i class="fa fa-phone"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Email">
                                        <span>
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Date">
                                        <span>
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-xs-6 sm-full">
                                    <div class="input-box">
                                        <input type="text" class="form-control" placeholder="Time">
                                        <span>
                                            <i class="fa fa-clock-o"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-6 sm-full">
                                    <div class="input-box pr-40">
                                        <select class="form-control">
                                            <option value="-1">Persons</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <span>
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <button type="submit" class="btn-submit">Create Dish</button>
                                </div>
                            </div>

                        </form>
                        <!-- booking form  ends-->
                    </div>
                    <div class="col-md-4">
                        <div class="special-box reserv-aside">
                            <div class="hours-box">
                                <h3>Food Items</h3>

                                <div class="row">
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-coffee"></i>
                                            </div>
                                            <h4 class="hours-title">Breakfast</h4>
                                            <p class="hours-text">9:00AM - 11:30AM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-chicken"></i>
                                            </div>
                                            <h4 class="hours-title">Lunch</h4>
                                            <p class="hours-text">11:30AM - 2:00PM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-restaurant-4"></i>
                                            </div>
                                            <h4 class="hours-title">Dinner</h4>
                                            <p class="hours-text">5:30PM - 11:00PM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                    <!-- hours  -->
                                    <div class="col-xs-6">
                                        <div class="hours">
                                            <div class="icon">
                                                <i class="flaticon-ice-cream"></i>
                                            </div>
                                            <h4 class="hours-title">Dessert</h4>
                                            <p class="hours-text">9:00AM - 11:00PM</p>
                                        </div>
                                    </div>
                                    <!-- hours ends  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- reservation section -->
        <section class="service-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
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
                                    <h4 class="service-title"><a href="#">Birthday Party</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-catering"></i>
                                    </div>
                                    <h4 class="service-title"><a href="#">Charity Events</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
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
                                        <i class="flaticon-people"></i>
                                    </div>
                                    <h4 class="service-title"><a href="#">Events Party</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12">
                                <div class="service">
                                    <div class="icon">
                                        <i class="flaticon-table"></i>
                                    </div>
                                    <h4 class="service-title"><a href="#">Private Dinning</a></h4>
                                    <p>
                                        Dolor sit amet consectetuer adipiscn elit commodo ligula eget dolor. Aenean etsa massa
                                        Cum sociis natoque.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- service section  -->
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
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
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
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
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
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
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
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget
                                            dolor. Aenean mas cum sociis natoque penatibus magnis dis.
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