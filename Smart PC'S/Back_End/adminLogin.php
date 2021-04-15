<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/style.css">
<?php
session_start();
	//establish connection to the database server
	$connect=mysqli_connect("localhost","root","") or die("Could not connect to the database server");
	
	//select the database for use
	mysqli_select_db($connect,"smartpcs") or die("Could not select the database");
	
	//Receive login data and store in variables
  
if(isset($_POST['submit'])){
	$Email_Id=$_POST['Email_Id'];
	$password=md5($_POST['password']);
			
	//Check if username and password are in the table

$results=mysqli_query($connect,"select * from admin where Email_Id='$Email_Id' and password='$password'");
$count = mysqli_num_rows($results);
if($count ==1){
  //session_start();
$_SESSION['Email_Id']=$Email_Id;
echo "<script> window.open('index.php?', '_self')   </script>"; 
  
}else{
  echo"<script>alert('Wrong Password or Username!')</script>";
}}
//close connection
mysqli_close($connect);

?>

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
   <div class="login-wrapper">
     <div class="container">
         <div class="loginbox">
             <div class="login-left">
     <h3 class="smartLogo">Smart PC's</h3>
               </div>
               <div class="login-right">
     <div class="login-right-wrap">
       <h1>Admin Login</h1>
								
								<!-- Form -->
                <form action="adminlogin.php" method="post" autocomplete="off">
								
									<div class="form-group">
									<input class="form-control" type="email" name="Email_Id" placeholder="Email" required style="">
								</div>
								<div class="form-group">
									<input class="form-control" id="password" type="password" name="password" placeholder="Password"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                 
                </div>
                <input type="checkbox" onclick="myFunction()">Show Password
     <span id="passsword_error" class="error"></span>
 <br><br>
                  <center>
									<div class="form-group mb-0">
										<button class="btn btn-lg btn-common animated fadeInUp" name="submit" type="submit">Login</button>
									</div>
                  <center>
								</form>
								<!-- /Form -->
								
													
							
                    </div>
                </div>
            </div>
        </div>
</section>
<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
}



</script>

