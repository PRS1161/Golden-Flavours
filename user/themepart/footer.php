<?php
include '../../admin/class/at-class.php';
//$connection=  mysqli_connect("locahost", "root", "", "summerproject");
?>  

<footer class="footer section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-xs-11 col-sm-10 col-md-9">
                                    <h3 class="main-title footer-title text-left">
                                        <span>
                                            Contact Us
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <div class="content">
                                <p>
                                    <i class="fa fa-map-marker"> </i>
                                    <span>ADDRESS :</span>K6 Shree Krishna Center Above Crossword Library, Mithakhali Six Rd, Navrangpura, Ahmedabad, Gujarat 380009
                                </p>
                                <p>
                                    <i class="fa fa-phone"> </i>
                                    <span>CALL US :</span>099786 21654
                                </p>
                                <p>
                                    <i class="fa fa-envelope-o"> </i>
                                    <span>EMAIL US :</span>info@akashtechnolabs.com
                                </p>
                                <h5>Follow us on :</h5>
                                <ul class="mini-social">
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
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-xs-11 col-sm-10 col-md-9">
                                    <h3 class="main-title footer-title text-left">
                                        <span>
                                            Latest News
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <ul class="posts clearfix">
                                <li>
                                    <a href="blog-detail-page.html">
                                        <img src="images/post.jpg" alt="" class="featured">
                                    </a>
                                    <h5>
                                        <a href="blog-detail-page.html">
                                            Lorem ipsum dolor sit amet, consectetu era adipiscing ligula.
                                        </a>
                                    </h5>
                                    <p>December 14, 2017</p>
                                </li>
                                <li>
                                    <a href="blog-detail-page.html">
                                        <img src="images/post2.jpg" alt="" class="featured">
                                    </a>
                                    <h5>
                                        <a href="blog-detail-page.html">
                                            Lorem ipsum dolor sit amet, consectetu era adipiscing ligula.
                                        </a>
                                    </h5>
                                    <p>December 14, 2017</p>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-widget">
                            <div class="row">
                                <div class="col-xs-11 col-sm-10 col-md-9">
                                    <h3 class="main-title footer-title text-left">
                                        <span>
                                            Gallery Pics
                                        </span>
                                    </h3>
                                </div>
                            </div>

                            <div class="content">
                                <ul class="gallery clearfix">
                                <?php 
                                    $photoquery= mysqli_query($connection, "select * from tbl_category where c_id between 13 and 18");
                                    while($photoqueryresult= mysqli_fetch_array($photoquery))
                                    {
                                ?>
                                
                                    <li>
                                        <div>
                                            <a href="<?php echo base_url();?>admin/<?php echo "{$photoqueryresult['c_image']}";?>" class="magni-link">
                                                <img style="height:115px; width:115px;" src="<?php echo base_url();?>admin/<?php echo "{$photoqueryresult['c_image']}";?>" alt="gallery pic">
                                            </a>
                                        </div>
                                    </li>
                                   
                                
                                    <?php }?>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright">

            <p>
                © Copyright | Golden Flavours 2018. All Right Reserved Developed By
                <a href="https://www.akashtechnolabs.com/">Akash Technolabs</a>
            </p>
        </div>