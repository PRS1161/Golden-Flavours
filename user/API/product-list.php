<?php

include '../../admin/class/at-class.php';

$response = array();

$productquery = get_result("select * from tbl_product_master");


if(count($productquery) > 0)
{

    foreach($productquery as $row) 
    {
        $category['p_id'] = $row['p_id'];
        $category['p_name'] = $row['p_name'];
        $category['p_image'] = $row['p_image'];
        $category['s_id'] = $row['s_id'];
        $category['c_id'] = $row['c_id'];

        $fetch_data[] = $category;
    }
    
    $response['message'] = $fetch_data;
    $response['success'] = 1;

}
else
{
    $response['success'] = 0;
    $response['message'] = "No Record Found.";
}



echo json_encode($response);