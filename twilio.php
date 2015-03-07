<?php


// $str = 'curl -X POST https://api.twilio.com/2010-04-01/Accounts/AC9d2d7c11becaccf0fbb23d68be2cd9bf/Messages -d "To=+447427412798" -d "From=+441934443026" -d "Body=Hello world" -d "MediaUrl=http://www.images.com/flower.png" -u "AC9d2d7c11becaccf0fbb23d68be2cd9bf:56b20b0e214cba8c3575ddb3dc2c0657"';
// exec($str);
// die();

//extract data from the post
// extract($_POST);


$to = '+447427412798';
$from = '+441934443026';
$username = 'AC9d2d7c11becaccf0fbb23d68be2cd9bf';
$password = '56b20b0e214cba8c3575ddb3dc2c0657';
$body = isset(_GET['msg']) ? _GET['msg'] : 'Default message...';

//set POST variables
$url = 'https://api.twilio.com/2010-04-01/Accounts/AC9d2d7c11becaccf0fbb23d68be2cd9bf/Messages';


send_sms('AC9d2d7c11becaccf0fbb23d68be2cd9bf', '56b20b0e214cba8c3575ddb3dc2c0657', $to, $from, $body);

function send_sms( $sid, $token, $to, $from, $body ) {
    // resource url & authentication
    $uri = 'https://api.twilio.com/2010-04-01/Accounts/' . $sid . '/SMS/Messages';
    $auth = $sid . ':' . $token;
 
    // post string (phone number format= +15554443333 ), case matters
    $fields = 
        '&To=' .  urlencode( $to ) . 
        '&From=' . urlencode( $from ) . 
        '&Body=' . urlencode( $body );
 
    // start cURL
    $res = curl_init();
     
    // set cURL options
    curl_setopt( $res, CURLOPT_URL, $uri );
    curl_setopt( $res, CURLOPT_POST, 3 ); // number of fields
    curl_setopt( $res, CURLOPT_POSTFIELDS, $fields );
    curl_setopt( $res, CURLOPT_USERPWD, $auth ); // authenticate
    curl_setopt( $res, CURLOPT_RETURNTRANSFER, true ); // don't echo
     
    // send cURL
    $result = curl_exec( $res );

    var_dump($result);

    return $result;
}