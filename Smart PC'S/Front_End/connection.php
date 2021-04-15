<?php


$hostname = "localhost";

$user = "root";

$password = "";

$database = "smartpcs";

$db = mysqli_connect($hostname,$user,$password) or die("Connection Failed........!!!");

mysqli_select_db($db,$database) or die("Database not selected....!!!");


$fn = $_POST['fname'];

$ln = $_POST['lname'];

$cno = $_POST['contact'];

$eid = $_POST['user_email'];

$pass =md5( $_POST['user_password']);

$pass2 = md5($_POST['user_confirm_password']);

if($pass === $pass2)
{
	
$query = "INSERT INTO user (firstname, lastname, contact_no, user_email, user_password) VALUES('".$fn."', '".$ln."', '".$cno."', '".$eid."', '".$pass."')";

mysqli_query($db,$query);

header("location:index.php");

}
else
{


echo "<script>alert('Sorry Your Password Dont Match, Please Try again.')</script>";
        
        echo "<script>window.open('Signup.php','_self')</script>";

}


mysqli_close($db);

?>
