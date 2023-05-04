<?php
require '../src/Osms.php';

use \Osms\Osms;


$config = array(
	'clientId' => 'Af8Yljmbf1DtKJiaGajsylicD2p7jNDf',
	'clientSecret' => 'GzIIZwnAzRymHlFN'
);
$osms = new Osms($config);

//$osms->setVerifyPeerSSL(false);

$response = $osms->getTokenFromConsumerKey();

if (empty($response['error'])) {
    
    echo $response['access_token'];
    // echo $osms->getToken();
    // echo '<pre>'; print_r($response); echo '</pre>';
}


$config = array(
    'token' =>$response['access_token']
);

$osms = new Osms($config);

//$osms->setVerifyPeerSSL(false);

$response = $osms->getAdminStats(array('country' => 'CIV'));
// $response = $osms->getAdminStats();
// $response = $osms->getAdminStats(array('appid' => 'your_app_id'));
// $response = $osms->getAdminStats(array('country' => 'CIV', 'appid' => 'your_app_id'));

if (empty($response['error'])) {
    echo '<pre>'; print_r($response); echo '</pre>';
} else {
    echo $response['error'];
}
