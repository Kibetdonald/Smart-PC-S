<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smart PC's</title>
    
<?php

include("../Back_End/Include/functions.php");
include("../Back_End/Include/db.php");


?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="css/getit.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="css/extras.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <!--Font awesome -->
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/solid.css"/>
    
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/font-awesome.min.css"/>
    
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/fontawesome.min.css   ">
    
    
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/solid.css"/>
    <!--Title logo-->
    <link rel="shortcut icon" href="images/title_icon.png" type="image/png">

  </head>
  <body>
<?php
include("Include/header.php");
?>
<br><br><br><br>
<br>

<section class="sign-up">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title"><span>Sign Up</span></h3>
                    </div>
                     </div>
                </div> 
       </div>

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
								<h1>Sign Up</h1>
							
								
								<!-- Form -->
                <form name = "signin" action="connection.php" method="post" onSubmit = "return validation()" autocomplete="off">
								
								<div class="form-group">
									<input class="form-control" id = "fid" type="text" name="fname" placeholder="First Name" required style="">
								</div>
								<div class="form-group">
									<input class="form-control" id = "lid" type="text" name="lname" placeholder="Last Name" required style="">
								</div>
                <div class="form-group">
									<input class="form-control" id = "cid" type="text" name="contact" placeholder="Phone Number" required style="">
								</div>
								<div class="form-group">
									<input class="form-control" id="eid" type="email" name="user_email" placeholder="Email" required style="">
								</div>
								<div class="form-group">
									<input class="form-control" id="password" type="password" name="user_password" placeholder="Password"
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>
                <div class="form-group">
									<input class="form-control" id="password" type="password" name="user_confirm_password" placeholder="Password"  
                  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
								</div>
                <center>
									<div class="form-group mb-0">
										<button class="btn btn-lg btn-common animated fadeInUp" name="submit" type="submit">Register</button>
									</div>
                  <center>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								
								<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
								</div>
							
								
								<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
		<!-- /Main Wrapper -->
		

<!--validation-->
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



<?php include('include/footer.php'); ?>
