


<?php
include('connect_db.php');
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>SMART PC's Admin</title>
         <!--STYLES-->
         
       
        
        
    </head>
    
    <body>
        <?php
        include("include/head.php");
        include("include/side_bar.php");
        include('include/scripts.php');
       
        ?>
        
           <!-- Display Orders -->
    <div class="page-wrapper">
			
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Report</h3>
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
<h1 align="center">Quantity Report</h1>
  </div>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
 
 ['Product Name','Quantity'],
 <?php 
      
      $query = "SELECT prd_title, SUM(qty) total FROM products p INNER JOIN customer_orders o ON o.product_id = p.prd_id GROUP BY prd_id; ";
        
			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){
 
			 echo "['".$row['prd_title']."',".$row['total']."],";
			 }
			 ?> 
 
 ]);
 
 var options = {
 title: 'Statistics Report for  Orders According to quantity',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 }; 
 var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

chart.draw(data, options);
}
</script>
</head>
<body>
<div id="curve_chart" style="width: 500px; height: 500px"></div>
</body>
</html>


