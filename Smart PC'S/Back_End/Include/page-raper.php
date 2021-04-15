	<!-- Page Wrapper -->
    <div class="page-wrapper">
			
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-primary border-primary">
                                        <i class="fa fa-book"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>168</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h6 class="text-muted">Orders</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-primary w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-success">
                                        <i class="fa fa-credit-card"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>487</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Stock</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-success w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-danger border-danger">
                                        <i class="fa fa-money"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>485</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Transactions</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-danger w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="dash-widget-header">
                                    <span class="dash-widget-icon text-warning border-warning">
                                        <i class="fa fa-folder"></i>
                                    </span>
                                    <div class="dash-count">
                                        <h3>$62523</h3>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    
                                    <h6 class="text-muted">Sales</h6>
                                    <div class="progress progress-sm">
                                        <div class="progress-bar bg-warning w-50"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                    
                        <!-- Sales Chart -->
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">Sales Report</h4>
                                <div class="card-body">

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
                            </div>
                          
                        </div>
                        <!-- /Sales Chart -->
                        
                    </div>
                    <div class="col-md-12 col-lg-6">
                    
                        <!-- Invoice Chart -->
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">Stock Report</h4>
                                <div class="card-body">

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
 
                            </div>
                            
                        </div>
                        <!-- /Invoice Chart -->
                        
                    </div>	
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex">
                    
                        <!-- Recent Orders -->
                        <div class="card card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Orders List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>
                                                <th> Name</th>
                                                <th>Speciality</th>
                                                <th>Earned</th>
                                                <th>Reviews</th>
                                            </tr>
                                        </thead>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Recent Orders -->
                        
                    </div>
                    <div class="col-md-6 d-flex">
                    
                        <!-- Feed Activity -->
                        <div class="card  card-table flex-fill">
                            <div class="card-header">
                                <h4 class="card-title">Transactions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-center mb-0">
                                        <thead>
                                            <tr>													
                                                <th>Product Name</th>
                                                <th>Prodyct Id</th>
                                                <th>Amount sold</th>
                                                <th>Amount remaining</th>													
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /Feed Activity -->
                        
                    </div>
                </div>
               
        <!-- /Page Wrapper -->