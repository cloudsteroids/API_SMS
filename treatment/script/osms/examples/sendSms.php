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
    session_start();
    $_SESSION['token'] = $response['access_token'];
    echo $_SESSION['token'] ;
    // echo $osms->getToken();
    // echo '<pre>'; print_r($response); echo '</pre>';
}




$config = array(
    
    'token' => $_SESSION['token']
);




$osms = new Osms($config);

//$osms->setVerifyPeerSSL(false);

$response = $osms->sendSms(
    // sender
    'tel:+2250565282962',
    // receiver
    'tel:+2250595064012',
    // message
    'tchai'

    
);

if (empty($response['error'])) {
    echo 'Done!';
} else {
    echo $response['error'];
}
