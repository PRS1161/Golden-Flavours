<?php

include '../class/at-class.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
 
    if ($page == "get_cat") {
        $term = $_GET['term'];

        $headname = get_result("SELECT * FROM `tbl_category` where is_delete='0' AND category_name like '%$term%' limit 0,5");

        foreach ($headname as $headname) {
            $name[] = $headname['category_name'];
        }
        echo json_encode($name);
    }
    
    
    if ($page == "get_product") {
        $sub_id = $_GET['sub_id'];

    
        $pquery = get_result("SELECT
    `tbl_sub_category`.`s_id`
    , `tbl_product_master`.`s_id`
    , `tbl_product_master`.`p_name`
    , `tbl_product_master`.`p_image`
FROM
    `summerproject`.`tbl_category`
    INNER JOIN `summerproject`.`tbl_sub_category` 
        ON (`tbl_category`.`c_id` = `tbl_sub_category`.`c_id`)
    INNER JOIN `summerproject`.`tbl_product_master` 
        ON (`tbl_category`.`c_id` = `tbl_product_master`.`c_id`) AND (`tbl_sub_category`.`s_id` = `tbl_product_master`.`s_id`);");
    }    
     
    
}
?>