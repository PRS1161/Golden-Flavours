<?php
    session_start();
    require_once './GoogleAPI/vendor/autoload.php';
    
    $gClient=new Google_Client();
    $gClient->setClientId("9406685558-asmj55g3264d994cuca574602tpq26be.apps.googleusercontent.com");
    $gClient->setClientSecret("32VRTt6iwrhf_AWRNUN4DoIQ");
    
    $gClient->setApplicationName("Golden Flavours");
    $gClient->setRedirectUri("http://localhost/golden-flavours/user/callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
    
?>