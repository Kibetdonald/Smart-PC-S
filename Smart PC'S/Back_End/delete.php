
<?php
$db = mysqli_connect('localhost', 'root', '', 'smartpcs');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
<?php

if (isset($_GET['id']))
{

$result = mysqli_query($db,"DELETE FROM products WHERE prd_id=".$_GET['id']);
if($result==true)
	echo "sucess";
header("Location:manage.php");
}

?>