<header>

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
    <link rel="stylesheet" href="css/fontawesome-free-5.15.2-web/css/solid.css"/>
    
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.min.css"/>
    <!--Title logo-->
    <link rel="shortcut icon" href="images/smart_icons.png" type="image/png">
</header>
   
   
   <!-- Header Area wrapper Starts -->
   <?php
	session_start();
error_reporting(0);

  if(isset($_GET['user_email'])){
    
    $user_email = $_GET['user_email'];
  }
  

$session_email = $_SESSION['user_email'];
$select_customer = "select * from user where user_email='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$user_email = $row_customer['user_email'];
$firstname  = $row_customer['firstname'];


if (isset($_GET['user_email']) && is_numeric($_GET['user_email']) && $_GET['user_email'] > 0)
{

$user_email = $_GET['user_email'];
$result = mysqli_query($con,"SELECT * FROM user WHERE user_email=".$_GET['user_email']);

$row = mysqli_fetch_array($result);

if($row)
{

$user_email = $row['user_email'];
$firstname  = $row['firstname '];


}
}

   ?>
   
   <header id="header-wrap" background="#EB586F">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
        
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand">
           
            <h2>Smart PC's</h2></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item">
                <a class="nav-link" href="Index.php">
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

            
<li class="nav-item">
<div class="nav-link">
  <i class="fa fa-shopping-cart" ></i>&nbsp;<a href="cart.php">Cart</a>
<sup> <?php total_items(); ?>&nbsp;</sup></li>
</li>
              </div>


              
         <?php
          if(isset($_SESSION['user_email']))
          {
            
           ?>
  <li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
           <span>Welcome </span>&nbsp;<?php  if(isset($_SESSION['user_email']))
          { 
           echo $firstname ;}
           ?></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
              
							</div>
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="orders.php">Orders</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>	</div>	</div>	</div>
         
              </li></li> </li></li>

<li >
           
           <?php
           
        }else{
          echo '  <a class="mr-4" href="login.php">Login</a>';
        }
        ?>
 
</li>
              </div>
            </ul>
          </div>
        </div>
        </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="mobile-menu navbar-nav">
        <li>
            <a class="page-scroll" href="Index.php">
              Home
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#about">
              About
            </a>
          </li>
          <li>
            <a class="page-scroll" href="products.php">
              Products
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#services">
              Services
            </a>
          </li>
          <li>
            <a class="page-scroll" href="#contact">
              Contact us
            </a>
          </li>
          <li>
            <a class="page-scroll" href="cart.php">
            <i class="fa fa-shopping-cart" style="color:#585b60"></i> Cart<sup> <?php total_items(); ?>&nbsp;</sup>
            </a>
          </li>
          <li>
            <a class="page-scroll" href="login.php">
            <i class="fa fa-user" style="color:#585b60"></i> Login
            </a>
          </li>
          

        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->

   


    </header>

    <!-- Header Area wrapper End -->

   

    