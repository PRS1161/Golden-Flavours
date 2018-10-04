<?php
include '../../admin/class/at-class.php';

$response = array();

if(isset($_POST['category-id']))
{
    $subcategoryquery= get_results("select * from tbl_sub_category where c_id={$_POST['category-id']}");
    if(count($subcategoryquery)>0)
    {
        foreach($subcategoryquery as $row) 
        {
            $category['s_name'] = $row['s_name'];
            $category['s_image'] = $row['s_image'];
            $fetch_data[] = $category;
        }
        $response['message'] = $fetch_data;
        $response['success'] = 1;
    }
}
else
{
    $response['success'] = 0;
    $response['message'] = "No category is selected";
}

echo json_decode($response);



?>