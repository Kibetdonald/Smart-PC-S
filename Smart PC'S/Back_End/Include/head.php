
<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['Email_Id'])){
    $Email_Id=$_SESSION['Email_Id'];

}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/adminLogin.php");
exit();
}

$session_email = $_SESSION['Email_Id'];
$select_customer = "select * from admin where Email_Id='$session_email'";
$run_customer = mysqli_query($con,$select_customer) or die( mysqli_error($con));
$row_customer = mysqli_fetch_array($run_customer);
$username = $row_customer['username'];

if (isset($_GET['Email_Id']) && is_numeric($_GET['Email_Id']) && $_GET['Email_Id'] > 0)
{

$Email_Id = $_GET['Email_Id'];
$result = mysqli_query($con,"SELECT * FROM admin WHERE Email_Id=".$_GET['Email_Id']);

$row = mysqli_fetch_array($result);

if($row)
{
$Email_Id = $row['Email_Id'];
$username = $row['username'];
}
}
?>
          <link rel="stylesheet" href="assets/css/font-awesome.min.css">
          <script type="text/javascript" src="charts/loader.js"></script>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/feathericon.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/sweet-alert.css">
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                  
						<h5>Smart PC's</h5>
			
                </div>
				<!-- /Logo -->
				
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fa fa-bell"></i> <span class="badge badge-pill">1</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/doctors/doctor-thumb-01.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">James Bond</span> Orders <span class="noti-title">Order received, Thank you!</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							
							Welcome
							<?php  if(isset($_SESSION['Email_Id']))
							{ 
							 echo $username ;}
							 ?></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								
								<div class="user-text">
									<h6>Administrator</h6>
									
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="settings.php">Settings</a>
							<a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>

			<!-- /Header -->
