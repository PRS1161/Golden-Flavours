<?php

include '../../admin/class/at-class.php';

$response = array();

$categoryquery = get_result("select * from tbl_category");


if(count($categoryquery) > 0)
{

    foreach($categoryquery as $row) 
    {
        $category['c_id'] = $row['c_id'];
        $category['c_name'] = $row['c_name'];
        $category['c_image'] = $row['c_image'];

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