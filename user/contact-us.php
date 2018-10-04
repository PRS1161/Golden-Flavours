<?php
include '../admin/class/at-class.php';
$connection=  mysqli_connect("localhost", "root", "", "summerproject");
if(isset($_POST['submit']))
{
    $page_title="Feedback Added";
    $name=$_POST['name'];
    $insert_array = array(
        "cu_name" => $_POST['name'],
        "cu_msg" => $_POST['message'],
        "cu_email" => $_POST['email'],
        "cu_mno"=>$_POST['phone'],
        "cu_date" => today_datetime(),
        "cu_ip"=>getIP(),
        "insertion_time" => today_datetime()
            );
    
//    $cuinsertquery=  mysqli_query($connection, $insert_array);
    $inserted=  bindinsert("tbl_contactus", $insert_array);
    $insid=  insertid();
    if($inserted)
    {
        add_activity("New $page_title added", "$page_title added by $name");
        echo "<script>alert('Feedback Given!!!');</script>";
    }
    else 
    {
        redirect("?error=2&msg=Try Again In A While");
    }
    
}

?>
<!doctype html>
<html lang="en">

    <head>
        
    </head>

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
            <?php include './themepart/header-menu.php'; ?>
            <section class="page-title">
                <div class="container">
                    <h2 class="title">
                        Contact Us
                    </h2>

                </div>
            </section>
            <!-- contact section -->
            <section class="contact-section section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <h3 class="main-title text-left">
                                <span>
                                    Get In Touch
                                </span>
                            </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">

                            <div class="row">
                                <div class="col-md-10">


                                    <div class="sub-title">
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <form action="#" method="post" class="reserv-form">
                                <div class="input-box">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                    <span>
                                        <i class="fa fa-pencil"></i>
                                    </span>
                                </div>
                                <div class="input-box">
                                    <input type="text" class="form-control" placeholder="Phone" name="phone">
                                    <span>
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </div>
                                <div class="input-box">
                                    <input type="text" class="form-control" placeholder="Email" name="email">
                                    <span>
                                        <i class="fa fa-envelope-o"></i>
                                    </span>
                                </div>
                                <div class="input-box">
                                    <textarea class="form-control" placeholder="your message" name="message"></textarea>
                                </div>


                                <button type="submit" class="btn-secondry" value="Send Message" name="submit">Send Message</button>
                            </form>
                            <!-- booking form  ends-->
                        </div>
                        <div class="col-md-4">
                            <ul class="contact">
                                <li>

                                    <div class="icon">
                                        <img src="images/con1.jpg" alt="contact">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <p class="title">Address:</p>
                                    <p>K6 Shree Krishna Center, Mithakhali Six Rd, Ahmedabad, Gujarat-380009</p>

                                </li>
                                <li>

                                    <div class="icon">
                                        <img src="images/con2.jpg" alt="contact">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <p class="title">Call Us:</p>
                                    <p>
                                        099786 21654<br><br>
                                    </p>

                                </li>
                                <li>

                                    <div class="icon">
                                        <img src="images/con3.jpg" alt="contact">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <p class="title">Email us:</p>
                                    <p>
                                        info@akashtechnolabs.com
                                       
                                    </p>

                                </li>
                            </ul>

                            <p class="min-title"> Follow us on</p>
                            <ul class="mini-social m-top20">
                                <li>
                                    <a href="https://www.facebook.com/public/Akash-Padhiyar">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/+akashpadhiyar">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/akashpadhiyar/">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/akash_padhiyar?lang=en">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://in.linkedin.com/in/akashpadhiyar">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                    <div class="map">
                        <div id="map"></div>
                    </div>
                </div>
            </section>

            <!-- call out section  -->
            <section class="call-out-section section-padding">
                <?php include './themepart/contactus.php'; ?>
            </section>
            <!-- call out section ends -->
            <!-- footer  -->
            <?php include './themepart/footer.php'; ?>
            <!-- footer ends -->

        </div>
        <script type="text/javascript" src="js/googlemaps.js"></script>
        <script src="js/jquery.1.12.4.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <!-- google map api  -->
       <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiHPSPD0vbbv0D5VIWAQvAnUtaMdKPZrk&callback=loadMap"
        async defer></script>

        
    </body>



</html>