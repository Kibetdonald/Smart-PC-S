<?php


function generateSandboxToken()
{
    $url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    $credentials = base64_encode('oS999vjDNVge7tEd2GqA5TJG64OI4YKf:5Rc9aMXPkafX4GtX');
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic ' . $credentials)); //setting a custom header
//    curl_setopt($curl, CURLOPT_HEADER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


    $curl_response = curl_exec($curl);

    $json_response = json_decode($curl_response, false);

    return $json_response->access_token;
}

function stkPushRequest()
{
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8', 'Authorization:Bearer ' . generateSandboxToken())); //setting custom header


    $curl_post_data = array(
        //Fill in the request parameters with valid values
        'BusinessShortCode' => '174379',
        'Password' => 'MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjAwMjI1MTgxNTI1',
        'Timestamp' => '20200225181525',
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => '1',
        'PartyA' => '254723945591',
        'PartyB' => '174379',
        'PhoneNumber' => '254723945591',
        'CallBackURL' => 'https://webhook.site/98a010d2-1988-4985-bf87-49442f504992',
        'AccountReference' => 'ref_ian12',
        'TransactionDesc' => 'Testing Saf Daraja',
        'Remark'=> 'None'
    );

    $data_string = json_encode($curl_post_data);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    // curl_setopt($curl, CURLOPT_HEADER, false);

    $curl_response = curl_exec($curl);
    //print_r($curl_response);

    return $curl_response;
}
