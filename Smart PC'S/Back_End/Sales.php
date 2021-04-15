

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
                       
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
<h1 align="center">Monthly Sales Recarp Report</h1>
  </div>

  <br><br>
  <center>
  <div id="barchart" style="width: 750px; height: 500px;" align="centre">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="./charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['bar']});
  google.charts.setOnLoadCallback(drawChart);


  function drawChart(){
    var data = google.visualization.arrayToDataTable([
      ['Months', 'Sales  '],
      
      
     
      <?php
      for($i = 01; $i <= 04; $i++){
      //sales
      $sql = "SELECT sum(due_amount) AS total FROM customer_orders WHERE month(order_date) = '$i'";
      $sales_query = $con->query($sql);
      $sales_row = $sales_query->fetch_assoc();
      //displaying the needed data
      echo '["Month'.$i.'", '.$sales_row['total'].'],';
      }
      ?>
    ]);

    var options = {
      chart: {
   
      }
    };

    var chart = new google.charts.Bar(document.getElementById('barchart_material'));

chart.draw(data, google.charts.Bar.convertOptions(options));
}
</script>
</>
<body>
<div id="barchart_material" style="width: 500px; height: 300px;"></div>
</center>


</body>
</html>
