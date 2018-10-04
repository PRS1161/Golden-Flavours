<?php
include '../admin/class/at-class.php';
require_once './config.php';

if(isset($_SESSION['access_token']))
{
    $gClient->setAccessToken($_SESSION['access_token']);
}
else if(isset($_GET['code']))
{
    $token=$gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token']=$token;
    
}
else
{
    header("location:login.php");
    exit();
}


$oAuth=new Google_Service_Oauth2($gClient);
$userData=$oAuth->userinfo_v2_me->get();

//echo "<pre>";
//var_dump($userData);

$_SESSION['email']=$userData['email'];
$_SESSION['givenName']=$userData['givenName'];


if(isset($_GET['code']))
{
    $insert_array=array(
      "user_name" => $_SESSION['givenName'],
      "user_email" => $_SESSION['email'],
      "ip" => 0,
      "insertion_time" => today_datetime(),
        
    );
     $inserted = bindinsert("tbl_user", $insert_array);
        $insid = insertid();

         if ($inserted) 
        {
            add_activity("New $page_title Add ","$page_title Added And $page_title Id Is $insid");
            header("location:index.php");
            exit();

        } 
        else 
        {
            redirect("?success=2&msg=Please Try After Some Time");
        }
}


?>