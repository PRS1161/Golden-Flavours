<?php
    include '../../admin/class/at-class.php';
    $user_data = get_results("SELECT * FROM tbl_user WHERE user_id = {$_SESSION['userlogin_id']}");
    
?>
<header class="header">
    <div class="container">
        <div class="menubar">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-static-top">
                        <!--                                 Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            
                            <a class="navbar-brand" href="index.php">
<!--           <img class="img-responsive" style="width:139px;" src="./image/logo/golden flavours.jpg" alt="logo"/>-->
                            <div class="slider-text">
                                <h1 style="font-size: xx-large;"><span>Golden Flavours</span></h1>
                            </div>
                            </a>
                        </div>

                        <!--Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse ">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="res-btn">
                                    <a href="create-dish.php" class="book-btn">Create dish</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right" id="main-menu">
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <a href="about-us.php">About</a>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Menu</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                        <?php
                                        
                                        $query=get_result("select * from tbl_category");
                                        foreach($query as $catquery)
                                         {
                                        echo "<a href='{$catquery['c_id']}'>{$catquery['c_name']}</a>";
                                         }
                                                                       
                                        
                                        ?>
                                            </li>
                                    </ul>     
                                    
                                </li>
                                <li>
                                    <a href="gallery.php">Gallery</a>
                                </li>
                                <li>
                                    <a href="videos.php">Videos</a>
                                </li>
                                <li>
                                    <a href="contact-us.php">Contact us</a>
                                </li>
                                
                                 <?php
                                    if(isset($_SESSION['userlogin_id']))
                                    {
                                ?>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?php echo $user_data['user_name']; ?></a>
                                    <ul class="dropdown-menu">
                                    <li>
                                        <a href="change-password.php">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="logout.php">Log Out</a>
                                    </li>
                                    </ul>
                                    </li>
                                <?php 
                                   }
                                    else if(isset($_SESSION['email']))
                                    {
                                ?>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?php echo $_SESSION['givenName']; ?></a>
                                    <ul class="dropdown-menu">
                                   
                                    <li>
                                        <a href="logout.php">Log Out</a>
                                    </li>
                                    </ul>
                                    </li>
                                <?php
                                    }
                                    else if(isset($_SESSION['userData']['id']))
                                    {
                                ?>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi, <?php echo $_SESSION['userData']['first_name']; ?></a>
                                    <ul class="dropdown-menu">
                                   
                                    <li>
                                        <a href="logout.php">Log Out</a>
                                    </li>
                                    </ul>
                                    </li>
                                <?php
                                    }
                                    else 
                                    {
                                        echo '<li><a href="login.php">Join us</a></li>';
                                    }
                                ?>
                                      
                            </ul>
                        </div>

                    </nav>
                </div>
            </div>
        </div>

    </div>
    <div class="mobile-menu" data-logo="images/logo.png">


    </div>
</header>