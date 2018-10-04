<?php
session_start();
require_once './Facebook/autoload.php';

$fb = new \Facebook\Facebook([
   'app_id' => '404511760027385',
    'app_secret' => 'cee228feea49224f1e6160e353268ce3',
    'default_graph_version' => 'v2.10'
]); 

$helper = $fb->getRedirectLoginHelper();


?>
