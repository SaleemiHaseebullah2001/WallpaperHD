<?php
require 'vendor/autoload.php';
$fb = new Facebook\Facebook ([
        'app_id' => '1839782052879775',
        'app_secret' => 'e60ad3be80e5d91349a00c60a67766fd',
        'default_graph_version' => 'v2.10'
]);
$helper = $fb->getRedirectLoginHelper();
$Login_url = $helper->getLoginurl("http://localhost/WebstormProjects/WallpaperSite/Login.php");
try {
    $accessToken = $helper->getAccessToken();
    if (isset ($accessToken)) {
        $_SESSION['access_token'] = (string)$accessToken;
            header("Location:index.php");
            }
 } catch (Exception $e) {
    echo $e -> getTraceAsString();
}

if (isset($_SESSION['access_token'])) {
    try {
        $fb->setDefaultAccessToken($_SESSION['access_token']);
        $res = $fb->get('/me?locale=en_US&fields=name, email');
        $user = $res->getGraphuser();
    } catch (Exception $e) {
        echo $e->getTraceAsString();
    }
}