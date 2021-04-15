
<?php
include('connect_db.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>SMART PC's Admin</title>
        
<script type="text/javascript" src="./charts/loader.js"></script>

         <!--STYLES-->
        <script type="text/javascript" src="./charts/loader.js"></script>
         <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/feathericon.min.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../Front_End/fontawesome-free-5.15.2-web/css/solid.css">
        
        
    </head>
    
    <body>
        <?php
        include("include/head.php");
        include("include/side_bar.php");
        include("include/scripts.php");
       
        ?>
        
           <!-- Display Orders -->
    <div class="page-wrapper">
			
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Edit/Delete Products</h3>
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
<h1 align="center">Stock Report</h1>
  </div>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
 

 ['Product Name','Quantity'],
 <?php 
			$query = "SELECT * from products";
 
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['prd_title']."',".$row['prd_quantity']."],";
			 }
			 ?> 
 
 ]);
 
 var options = {
 title: 'Number of Products According to their Quantity',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },

 };
 var chart = new google.visualization.ColumnChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script>
 
</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width:100%; height: 500px;"></div>
 </div>
 
</body>
</html>