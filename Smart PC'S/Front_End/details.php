
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
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white menu-bg">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand">
             <!-- <img src="images/title_icon.png"/>-->
            <h2>Smart PC's</h2></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#sliders">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              
             
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>

              <div id="user-menu">

<li>
  <i class="fa fa-shopping-cart" 

   style="color:#585b60"></i> <a href="cart.php">Cart</a>
<sup> <?php total_items(); ?>&nbsp;</sup></li>
</li>






<li>


              
            </ul>
          </div>
        </div>


        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
          <li>
            <a class="page-scroll" href="#sliders">
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#about">
              About
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#services">
              Services
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#portfolio">
              Portfolio
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#feature">
              Features
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#team">
              Team
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#pricing">
              Pricing
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              Contact
            </a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </nav>
      <!-- Navbar End -->

   


    </header>

    <!-- Header Area wrapper End -->

   

    
<br><br><br><br>

<section id="products" class="products-area">
        <div class="container">
            <div class="row justify-content-center">
            
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
    <div class="center_prod">
    <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Our <span>Products</span></h3>
                    </div>  </div>  
  
     
   <div class="banner_adds"> <a href="details.php?prd_id=20"><img src="images/bann2.jpg" alt="" border="0" /></a> </div>
 </div>
 
 
 
<div class="content_right">
<br><br>
<b>
  
<h6>DELIVERY & RETURNS</h6></b>
<div class="content_icon">
    <img src="images/tick.jpg">
  </div>
  <b>
<h7>Express Shipment</h7><br></b>
<h9>Express shipment to all major cities
  </h9>
  
  <!--delivery information-->
  
<h6>DELIVERY INFORMATION</h6></b>
<div class="content_icon">
    <i class="fa fa-tachometer"></i>
  </div>
  <b>
<h7>Delivered between</h7><br></b>
<h9>Delivered within 4 working days
  </h9>



  <!--return policy -->
  
  <h6>RETURN POLICY</h6></b>
<div class="content_icon">
    <img src="images/tick.jpg">
  </div>
  <b>
<h7>Easy return &
  refund
</h7><br>
<br></b>
<h9><a href="#">Read More</a>
  </h9>

  <!--warranty -->
  
  <h6>WARRANTY</h6></b>
<div class="content_icon">
    <img src="images/tick.jpg">
  </div>
  <b>
<h7>One year warranty
</h7><br></b>
<h9><a href="#">Read More</a>
  </h9>

</div>

 <!-- end of left content -->
 <div class="center_content">
  
   
<?php

details();

?>





   
   
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
