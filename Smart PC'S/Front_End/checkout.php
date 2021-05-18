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
error_reporting(0);

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
	<div class="content">
					<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
									<form action="#">
										<h4 class="card-title">Personal Information</h4>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control"required> 
												</div>
												<div class="form-group">
													<label>Pick Up station</label>
													<select class="form-control"required>
														<option >Select</option>
														<option value="1">Kasarani</option>
														<option value="2">CBD+</option>
														<option value="3">Rongai</option>
														<option value="4">Pangani</option>
														<option value="5">Nakuru</option>
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Phone number</label>
													<input type="text" class="form-control"required>
												</div>
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control"required>
												</div>
												<div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control"required>
												</div>
												</div>

											
										<h4 class="card-title">Payment method</h4>
										
										
											<div class="col-md-6">
											<label class="payment-radio">
													<input type="radio" name="radio" default>
													<span class="checkmark"></span>
													Mpesa
												</label>
												<br>
										    <label class="payment-radio">
													<input type="radio" name="radio">
													<span class="checkmark"></span>
													Paypal
												</label>

												


										</div>
										</div>
				
										
										<Button href="#pay_now" data-toggle="modal"  type="submit" name="submit" class="btn btn-lg btn-common animated fadeInUp"> PAY NOW </Button>
									
										
									</form>
								
							</div>
						</div>
					</div>
					<div class="col-md-5 col-lg-4 theiaStickySidebar">
						
							<!-- Order Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Order Summary</h4>
								</div>
								
								

								<form action="" enctype="multipart/form-data" method="post">
								<table class="table table-hover mb-0">
											<thead>

				<th>Product(s)</th>
				<th name="qty">Quantity </th>
				<th>Price</th>
				</tr>

		<?php


					$total = 0;
					global $con;

					$ip = getip();

					$price = "select * from cart where ip_add = '$ip'";

					$run_price = mysqli_query($con,$price) ;

					while($pprice = mysqli_fetch_array($run_price)){

					$pro_id = $pprice['p_id'];

					$prod_price = "select * from products where prd_id = '$pro_id'";

					$run_pro_price = mysqli_query($con,$prod_price);


			while($ppprice = mysqli_fetch_array($run_pro_price)){

						$product_price = array($ppprice['prd_price']);
						$product_title = $ppprice['prd_title'];
						$product_image = $ppprice['prd_img'];
						$single_price = $ppprice['prd_price'];


				$price_sum = array_sum($product_price);

				$total +=$price_sum;

				//echo  $product_price;

				?>

						<tr align="center">


						<td><?php echo $product_title; ?>
						<br>
						<img src="images/<?php echo $product_image; ?>" >
						</td>
						<td>

						<p>1</p>

							</td>

							<?php
							error_reporting(0);
							if (isset($_POST['update_cart'])){

							$qty=$_POST['qty'];

							$update_qty="update cart set qty='$qty'";
							$run_qty=mysqli_query($con, $update_qty);
							$_SESSION['qty']=$qty;
							$total=$total*$qty;



								}
								?>

								</td>
											<td>

											<?php echo "Ksh".$single_price;  ?>
											</td>

								</tr>

								<?php

								}
								}
								?>
								</table>

								<div class="total_price">

								Total:<span class="price"><?php total_price(); ?> </span> </div>
								</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Add Time Slot Modal -->
	<div class="modal fade custom-modal" id="pay_now">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Mpesa payment</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						
						<br>
						<form action="mpesa.php" method="post">
						<label >Enter Phone Number: </label>
						<input class="form-control" type="text" id="phone" placeholder="2547000000000" name="phone" required><br>
						
						<label >Amount to be paid:</label>
						<input class="form-control" type="text" value=<?php total_price(); ?> name="amt" disabled><br>
						
						<center>
						<input type="submit" name="submit" class="btn btn-lg btn-common animated fadeInUp" value="Pay With Mpesa" name="btnPay">
						</center>
					</form>
								</div>
							
							</div>
						</div>
				   </div>
				</div>
			</div>
		</div>
		<!-- /Add Time Slot Modal -->

                            





          <?php
   include('Include/footer.php')
          ?>