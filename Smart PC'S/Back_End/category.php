

<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM categories ORDER BY cat_id ASC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>SMART PC's Admin</title>
         <!--STYLES-->
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
		include('include/scripts.php');
        ?>
        
           <!-- Display Orders -->
           <div class="page-wrapper">
			
            <div class="content container-fluid">
                
                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Category</h3>
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->
            <div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add Category</h4>
								</div>
								<div class="card-body">
                                <form action="add cat.php" method="post" name="form1">
										<div class="form-group">
											<label>Category Title</label>
											<input type="text" name="cat_title" class="form-control" required>
										</div>
										
										<div class="text-right">
											<button type="submit" class="btn btn-rounded btn-outline-danger" name="submit">Submit</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Manage Category</h4>
								</div>
								<div class="card-body">
									<!--List of categories-->
                                    <div class="table-responsive">
										<table class="table table-nowrap mb-0">
                                            <tr>
		<td>Category_id</td>
		<td>Cat_Title</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['cat_id']."</td>";
		echo "<td>".$res['cat_title']."</td>";
		echo "<td><a href=\"cat_delete.php?id=$res[cat_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";				
	
	
	}
	?>
	</table>
								</div>
							</div>
						</div>
					</div>
					