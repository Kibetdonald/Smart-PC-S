<?php
/**
 * Created by PhpStorm.
 * Author: Ian Kipchirchir
 * Date: 9/7/18
 * Time: 3:52 PM
 */

require_once 'functions.php';

$response = stkPushRequest();

print_r($response);
echo gettype($response);

$jsonData = json_decode($response);

echo "<br>";

echo $jsonData->CheckoutRequestID;
