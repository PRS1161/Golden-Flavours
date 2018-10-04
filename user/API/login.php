<?php

include '../../admin/class/at-class.php';

$response = array();

if(isset($_POST['email'])!='' && isset($_POST['password'])!=''){
 
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $check_login = get_results("select * from tbl_user where user_email='$email' and user_password='$password'");
    if(count($check_login)>0){
        
         $response['success'] = 1;
         $response['message'] = "Login Successful";
    }
    else{
    
    $response['success'] = 0;
    $response['message'] = "Enter Valid Login Details";
    
    }
    
}
else 
{
    
    $response['success'] = 0;
    $response['message'] = "Required fields missing";
    
}
echo json_encode($response);