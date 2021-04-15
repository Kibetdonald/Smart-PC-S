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
                        <h3 class="title"> <span>Checkout</span></h3>
                    </div>  </div>  </div> 
</div>
<div class="row">
						<div class="col-md-10">
							<div class="card">
								
								<div class="card-body">
									<form action="#">
										<h4 class="card-title">Personal Information</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Blood Group</label>
													<select class="select">
														<option>Select</option>
														<option value="1">A+</option>
														<option value="2">O+</option>
														<option value="3">B+</option>
														<option value="4">AB+</option>
													</select>
												</div>
												<div class="form-group">
													<label class="d-block">Gender:</label>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
														<label class="form-check-label" for="gender_male">Male</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
														<label class="form-check-label" for="gender_female">Female</label>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control">
												</div>

												<div class="form-group">
													<label>Password</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Repeat Password</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<h4 class="card-title">Postal Address</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Address Line 1</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Address Line 2</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Country</label>
													<input type="text" class="form-control">
												</div>
												<div class="form-group">
													<label>Postal Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
</section>
          <?php
   include('Include/footer.php')
          ?>