<?php

include '../../admin/class/at-class.php';

$response = array();

$subcategoryquery = get_result("select * from tbl_sub_category");


if(count($subcategoryquery) > 0)
{

    foreach($subcategoryquery as $row) 
    {
        $category['s_id'] = $row['s_id'];
        $category['s_name'] = $row['s_name'];
        $category['s_image'] = $row['s_image'];
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