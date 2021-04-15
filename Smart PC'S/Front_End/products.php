
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

    <!-- Header Area wrapper Starts -->
    <?php
   include("include/header.php");
   ?>
    <!-- Header Area wrapper End -->

   

    
<br><br><br><br>
<br>
<section id="products" class="products-area">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Our <span>Products</span></h3>
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
        
        <i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
											<i class="fas fa-star filled"></i>
      
     </ul>

     
     <HR>
      <div class="title_box">Express Shipping</div>
      <input type="checkbox">Express
  

  </div>
  
    <!-- end of left content -->
    
   
    <!-- end of left content -->
    
    <!-- end of left content -->
    <div class="center_prod">
    



<?php  



$get_pro = "select * from products";
    $run_pro = mysqli_query($con,$get_pro);
    


    while($row_pro = mysqli_fetch_array($run_pro)){


        $product_id = $row_pro['prd_id'];
        $product_category = $row_pro['prd_cat'];
        $product_variety = $row_pro['prd_variety'];
        $product_title = $row_pro['prd_title']; 
        $product_price = $row_pro['prd_price'];
        $product_image = $row_pro['prd_img'];
        
   


        echo"
                
                <div class='prod_box'>
        <div class='top_prod_box'></div>
        <div class='center_prod_box'>
         
          <div class='product_img'><a href='details.php?pro_id=$product_id'><img src='images/$product_image' alt='' border='0' width='130' height='170' /></a></div>
          <div class='product_title'><a href='details.php?pro_id=$product_id'>$product_title</a></div>
          <div class='prod_price'><span class='price'> Ksh $product_price</span></div>
        </div>
        <div class='bottom_prod_box'></div>
        <div class='prod_details_tab'> <a href='allproducts.php?addcart=$product_id' title='header=[Add to cart] body=[&nbsp;] fade=[on]''></a>
          <a href='details.php?pro_id=$product_id' class='prod_details'></a> </div>
          
         
      </div>
     


        ";


    }




 ?>

 
  </div>
  </div>
  </div>
  </div>
  
  
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
