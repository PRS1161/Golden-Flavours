<?php
include '../admin/class/at-class.php';
require_once './fb-config.php';

try
{
    $accessToken = $helper->getAccessToken();
}
catch(\Facebook\Exceptions\FacebookResponseException $e)
{
    redirect("?Response Exception:$e->getMessage()");
}
catch(\Facebook\Exceptions\FacebookSDKException $e)
{
    redirect("?SDK Exception:$e->getMessage()");
}

if(!$accessToken)
{
    header("location:login.php");
    exit();
}

$oAuth2Client=$fb->getOAuth2Client();
if(!$accessToken->isLongLived())
{
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
}

$response=$fb->get("/me?fields=id,first_name,email",$accessToken);
$userData=$response->getGraphNode()->asArray();
$_SESSION['userData']=$userData;
$_SESSION['access_token']=(string)$accessToken;
if(isset($_SESSION['access_token']))
{
    $insert_array=array(
      "user_name"=>  $_SESSION['userData']['first_name'],
      "user_email"=>$_SESSION['userData']['email'],
      "ip"=>0,
      "insertion_time"=> today_datetime()
    );
    $inserted = bindinsert("tbl_user", $insert_array);
        $insid = insertid();
        if($inserted) 
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