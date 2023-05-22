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
} else {
    echo $response['error'];
}

$config = array(
    'token' => $response['access_token']
);

$osms = new Osms($config);

//$osms->setVerifyPeerSSL(false);





$response = $osms->sendSms(
    // sender
    'tel:+2250767597630',
    // receiver
    'tel:+2250595064012',
    // message
    'Hello World!'
);

if (empty($response['error'])) {

    echo 'Done!';
} else {
    echo $response['error'];
}
