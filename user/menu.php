<?php
include '../admin/class/at-class.php';
include '../admin/ajax/get_ajax.php';
$connection=  mysqli_connect("localhost", "root", "", "summerproject");
?>
<!doctype html>
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
        <section class="page-title">
            <div class="container">
                <h2 class="title">
                    Food Menu
                </h2>
            </div>
        </section>
        <!-- menu section  -->
        <form method="get">
            <?php
                $catq=get_result("select * from tbl_category");
                foreach ($catq as $subcatres) 
                {
            ?>
                    <!--Category Section-->
                    <section class="chef-hero-bg chef-hero-drinks-pic section-padding">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2 class="main-title text-left">
                                        <span class="chef-hero-drinks-pic">
                                            <?php
                                                echo $subcatres['c_name'];
                                            ?> 
                                            <i class="chef-hero-drinks-pic">  </i>
                                        </span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--Category Section End-->

                    <section class="food-menu-section food-drinks-bg section-padding">
                        <div class="container">
                            <!--Sub Category Section-->
                            <ul class="menus sort-drinks">
                                <?php           
                                    $query=get_result("SELECT *
                                                      FROM tbl_sub_category t1
                                                      INNER JOIN tbl_category t2 ON `t1`.`c_id` = `t2`.`c_id`
                                                      WHERE `t2`.`c_name`='".$subcatres['c_name']."'");
                                    foreach ($query as $queryres) 
                                    { 
                                ?>
                                <li class="filter-button  col-md-4" id="sub-category" onclick="navigate(this);" data-id="<?php echo $queryres['s_id'] ?>">   
                                    <?php echo $queryres['s_name'] ?>
                                </li>                           
                                <?php                        
                                    } 
                                ?>
                            </ul>
                            <!--Sub Category Section End-->
                            <!--Product Section-->
                            <div class="row drinks-items" id="product">
                                <?php
                                    if($page=="get_product")
                                    {
                                        $sub_id = $_GET['sub_id'];
                                        $pquery= get_result("select * from tbl_product_master where s_id=$sub_id");
                                    }
                                    foreach ($pquery as $pqueryres) 
                                    {  
                                ?>
                                    <div class="col-md-4 col-sm-6 col-xs-12 grid-item ">
                                        <div class="menu-box">
                                            <a>
                                                <img src="../admin/<?php echo $pqueryres['p_image'];?>" alt="menu pic" class="featured-pic">
                                            </a>
                                            <div class="menu-title">
                                                <h5 class="title bg-main">
                                                    <a href="food-detail.html"><?php echo $pqueryres['p_name'];?></a>
                                                </h5>
                                                <span></span> 
                                            </div>                            
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <!--Product Section End-->
                        </div>
                    </section>
            <?php
                }
            ?>
        </form>

        <!-- Desserts section ends  -->
        <!-- call out section  -->
        <section class="call-out-section section-padding">
            <?php include './themepart/contactus.php';?>
        </section>
        <!-- call out section ends -->
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
    <script type="text/javascript">
       function navigate(id){
            var id = $(id).attr('data-id');
         
                $.ajax({
                    url: "menu.php?page=get_product",
                    type: "GET",
                    data: {sub_id : id},
                    success: function (response) 
                    {
                        console.log(response);
                        $("#product").html(response);
                    },
                });
             
        };

</script>
</body>



</html      