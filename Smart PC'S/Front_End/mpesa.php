
<?php
require_once 'mpesa/MPesaAPI.php';

if (isset($_POST['btnPay'])) {
  $phone_num = $_POST['phone'];
  $amt = $_POST['amt'];

  $checkout_rqid = stk_push_request($amt, $phone_num);

  // echo $checkout_rqid;
  sleep(10);

  $pay_status = stk_push_query($checkout_rqid);

  echo $pay_status;


}