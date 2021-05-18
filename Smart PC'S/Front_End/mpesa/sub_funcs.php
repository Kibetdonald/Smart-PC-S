<?php 

/*************** Utilities **************/

function generate_timestamp()
{
    return date("YmdHis");
}

function generate_mpassword($passkey, $timestamp, $bsc) {
    return base64_encode($bsc."".$passkey."".$timestamp);
}
