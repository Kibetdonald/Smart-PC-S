
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


<?php
	session_start();
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
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
<section id="products" class="products-area">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Selected <span>Products</span></h3>
                    </div>  </div>  </div> 
</div>

<?php
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
    ?>


 </div>
    <div class="left_content">

      <div class="title_box">Categories</div>
      <ul class="left_menu">
      <?php  getcats();  ?>
        
      </ul>
      <HR>
      <div class="title_box">Product Rating</div>
      <ul>
        <li><i class="fa fa-rate"></i></li>
      
     </ul>

     
     <HR>
      <div class="title_box">Express Shipping</div>
      <input type="checkbox">Express
  

  </div>
  
    <!-- end of left content -->
    
   
    <!-- end of left content -->
    
    <!-- end of left content -->
    <div class="center_prod">
  

</div>
<!-- end of left content -->
<div class="center_content">



<form action="" enctype="multipart/form-data" method="post">

<table align="center" width="500" border="0">



<tr align="center">
<th>Remove</th>
<th>Product(s)</th>
<th name="qty">Quantity </th>
<th>Total Price</th>
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

<td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;  ?>"></td>
<td><?php echo $product_title; ?>
<br>
<img src="images/<?php echo $product_image; ?>" width="60" height="60">
</td>
<td>

<input type="number" id="qty" name="qty" min="1" max="50" />
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

<td></td>  


</tr>


<?php

}
}
?>

<tr align="right">
<td colspan="4"><b>Total:</b></td>

<td><?php echo"Ksh&nbsp;".$total;   ?></td>

</tr>


<tr align="center">

<td colspan="2"><input type="submit" name="update_cart" value="Update Cart"

style="background-color: #fe8464;
border: none;
color: white;
padding: 15px 20px;
text-align: center;
text-decoration: none;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;">
</td>


<br><br>
<td>

<a href="products.php" style="background-color: #fe8464;
border: none;
color: white;
padding: 15px 15px;
text-align: center;
text-decoration: none;
font-size: 15px;
margin: 4px 2px;
cursor: pointer;"
>Continue Shopping</a>

</td>
&nbsp; &nbsp;
<td>

<a href="checkout.php" style="background-color: #fe8464;
border: none;
color: white;
padding: 15px 15px;
text-align: center;
text-decoration: none;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;"
>Checkout</a>

</td>



</tr>

</table>



</form>






<?php
// Turn off all error reporting
error_reporting(0);


global $con;
$ip = getIp();



if(isset($_POST['update_cart'])){

foreach($_POST['remove'] as $remove){

$delete_product = "delete from cart where p_id='$remove' AND ip_add='$ip'";
$run_delete = mysqli_query($con, $delete_product);
echo $ip;
if($run_delete){

echo "<script>window.open('cart.php','_self')</script>"    ;  

}


}
function update_cart(){

if(isset($_POST['continue'])){

echo "<script>window.open('allproducts.php','_self')</script>"    ;  
}
}

echo @$up_cart=update_cart();

}

?>


</div>
<!-- end of center content -->
<div class="right_content">
<div class="shopping_cart">
<div class="cart_title"><i>Welcome Customer!</i><br>Shopping cart</div>
<div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;Items <br />
 <span class="border_cart"></span>Subtotal:<span class="price"><?php total_price(); ?> </span> </div>
<div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><i class="fa fa-shopping-cart"></i></a></div>
</div>


<br>

   <?php

   special();

  ?> 

<br>


<?php

special();

?>

    <br>


<?php

special();

?>
<br>


<?php

special();

?>



    




 
  
  
  <!-- end of main content -->      
      
</div></div></div></div></div></div></div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php


cart();

?>
<!-- end of main_container --> <!-- Footer Section -->
      <footer class="footer">
      <!-- Container Starts -->
      <div class="container">
        <!-- Row Starts -->
        <div class="row section">
          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn">
            <h3 class="small-title">
              About Us
            </h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis veritatis eius porro modi hic. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </p>
           
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".2s">
            <h3 class="small-title">
              Links
            </h3>
            <ul class="menu">
            <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Products</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".5s">
            <h3 class="small-title">
              GALLERY
            </h3>
            <div class="plain-flicker-gallery">
              <a href="#"><img src="Images/core i7.png" alt=""></a>
              <a href="#"><img src="Images/hp.png" alt=""></a><a href="#"><img src="Images/core i7.png" alt=""></a>
              <a href="#"><img src="Images/hp.png" alt=""></a>
              <a href="#"><img src="Images/core i7.png" alt=""></a>
              <a href="#"><img src="Images/hp.png" alt=""></a>
              <a href="#"><img src="Images/core i7.png" alt=""></a>
              <a href="#"><img src="Images/hp.png" alt=""></a>
              <a href="#"><img src="Images/core i7.png" alt=""></a>
            </div>
          </div>
          <!-- Footer Widget Ends -->

          <!-- Footer Widget Starts -->
          <div class="footer-widget col-lg-3 col-md-6 col-xs-12 wow fadeIn" data-wow-delay=".8s">
            <h3 class="small-title">
              SUBSCRIBE US
            </h3>
            <div class="contact-us">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputName2" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter your email">
                </div>
                <button type="submit" class="btn btn-common">Submit</button>
              </form>
            </div>
          </div>
          <!-- Footer Widget Ends -->
        </div>
        <!-- Row Ends -->
      </div>
      <!-- Copyright -->
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <p class="copyright-text">All copyrights reserved © 2021</p>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
              <ul class="nav nav-inline  justify-content-end ">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sitemap</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy Policy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms of services</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
<center>
        <div class="bottom_footer">
          <p>Privacy | Terms | Support | Security </p>
          
        </div>
        <hr class="hr">
               
<a class="btn-floating btn-lg btn-fb" type="button" role="button"><i class="fab fa-facebook-f"></i></a>
<!--Twitter-->
<a class="btn-floating btn-lg btn-tw" type="button" role="button"><i class="fab fa-twitter"></i></a>
<!--Google +-->
<a class="btn-floating btn-lg btn-gplus" type="button" role="button"><i class="fab fa-google-plus-g"></i></a>
<!--Linkedin-->
<a class="btn-floating btn-lg btn-li" type="button" role="button"><i class="fab fa-linkedin-in"></i></a>
<!--Instagram-->
<a class="btn-floating btn-lg btn-ins" type="button" role="button"><i class="fab fa-instagram"></i></a>
<!--Youtube-->
<a class="btn-floating btn-lg btn-yt" type="button" role="button"><i class="fab fa-youtube"></i></a>
<!--Slack-->
<a class="btn-floating btn-lg btn-email" type="button" role="button"><i class="fas fa-envelope"></i></a>


<a class="btn-floating btn-lg btn-whatsapp" type="button" role="button"><i class="fab fa-whatsapp"></i></a>
                </ul>
           
        <br>
      
      <p>©2021 COVID-19 UPDATE, INC.All rights reserved</p></center>

      <!-- Copyright  End-->
      </footer>
      <!-- Container Ends -->
      <!-- Go to Top Link -->
      <a href="#" class="back-to-top">
      <i class="fa fa-arrow-up"></i>
    </a>

     <!-- Preloader -->
     <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/main.js"></script>
    </body>
</html>
