<?php

require_once 'sub_funcs.php';

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

function stk_push_request($amount, $phone_number)
{
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
    $lnmo_shortcode = '174379';

    $timestamp = generate_timestamp();
    $password = generate_mpassword($passkey, $timestamp, $lnmo_shortcode);

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF-8', 'Authorization:Bearer ' . generateSandboxToken())); //setting custom header


    $curl_post_data = array(
        //Fill in the request parameters with valid values
        'BusinessShortCode' => $lnmo_shortcode,
        'Password' => $password,
        'Timestamp' => $timestamp,
        'TransactionType' => 'CustomerPayBillOnline',
        'Amount' => $amount,
        'PartyA' => $phone_number,
        'PartyB' => $lnmo_shortcode,
        'PhoneNumber' => $phone_number,
        'CallBackURL' => 'https://webhook.site/2cb08c4e-f5c9-4190-914c-daee496cecf9',
        'AccountReference' => 'SmartPCs',
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

function stk_push_query($checkout_req)
{
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';
    $lnmo_shortcode = '174379';
    $passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';

    $timestamp = generate_timestamp();
    $password = generate_mpassword($passkey, $timestamp, $lnmo_shortcode);

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json charset=UTF-8','Authorization:Bearer '. generateSandboxToken())); //setting custom header


    $curl_post_data = array(
        //Fill in the request parameters with valid values
        'BusinessShortCode' => $lnmo_shortcode,
        'Password' => $password,
        'Timestamp' => $timestamp,
        'CheckoutRequestID' => $checkout_req
    );

    $data_string = json_encode($curl_post_data);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

    $curl_response = curl_exec($curl);
    //print_r($curl_response);

   echo $curl_response;

    // return $curl_response;
}