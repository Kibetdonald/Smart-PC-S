
<?php
	//establish connection to the database server
	$connect=mysqli_connect("localhost","root","") or die("Could not connect to the database server");
	
	//select the database for use
	mysqli_select_db($connect,"smartpcs") or die("Could not select the database");
	
	//Receive login data and store in variables
	$Email_id=$_POST['user_email'];
	$password=md5($_POST['user_password']);
			
	//Check if username and password are in the table
	$result=mysqli_query($connect,"select * from user where user_email='$Email_id' and user_password='$password'");
	
	$count = mysqli_num_rows($result);
		if($count ==1){
			session_start();
			$_SESSION['user_email']=$Email_id;
      echo"<script>alert('Logged in successfully!!')</script>";
		}else{
		
      echo"<script>alert('Wrong Password or Username!')</script>";
		}
	
	//close connection
	mysqli_close($connect);

?>