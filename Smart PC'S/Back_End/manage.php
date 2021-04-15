

<?php
include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY prd_id DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>SMART PC's Admin</title>
        
        
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
                            <h3 class="page-title">Edit/Delete Products</h3>
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-12 col-sm-3 col-12">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Manage products</h4>
								</div>
                            <div class="table-responsive">
										<table class="table table-hover mb-0">
                                            <tr padding="12px">
    <td>Product ID</td>
    <td>Product Cat</td>
    <td>Product Title</td>
    <td>Product price</td>
    <td>Product Description</td>
    <td>Product Image</td>
    <td>Product keyword</td>
    <td>Product Quantity</td>
    <td>Update</td>
</tr>
<?php 
//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
while($res = mysqli_fetch_array($result)) { 		
    echo "<tr>";
    echo "<td>".$res['prd_id']."</td>";
    echo "<td>".$res['prd_cat']."</td>";
    echo "<td>".$res['prd_title']."</td>";
    echo "<td>".$res['prd_price']."</td>";
    echo "<td>".$res['prd_desc']."</td>";
    echo "<td>".$res['prd_img']."</td>";
    echo "<td>".$res['prd_keyword']."</td>";
    echo "<td>".$res['prd_quantity']."</td>";
        
    
    echo "<td>
    <a href=\"edit.php?id=$res[prd_id]\">Edit</a>|
    <a href=\"delete.php?id=$res[prd_id]\" 
    onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";				
    


}
?>
</table>


    </body>
</html>