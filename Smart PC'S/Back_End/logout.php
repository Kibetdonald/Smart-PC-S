<?php
session_start();
if(isset($_SESSION['admin_id'])&& $_SESSION['admin_id']!="")
{
  $_SESSION['user_id']="";
  unset($_SESSION['user_id']);
  session_destroy();
  header("location:adminLogin.php");

}
else
{
  header("location:adminLogin.php");
}
?>