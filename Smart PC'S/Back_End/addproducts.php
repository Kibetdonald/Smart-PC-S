



<?php

$con = mysqli_connect("localhost","root","","smartpcs");

if(mysqli_connect_errno()){
	
	echo"Failed to connect : " . mysqli_connect_error(); 
	  
}

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
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-12 col-sm-3 col-12">
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title">Add Products</h4>
								</div>
								<div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
										<div class="form-group row">
											<label class="col-form-label col-md-2">Product Title</label>
											<div class="col-md-10">
												<input type="text" name="prd_title" class="form-control">
											</div>
										</div><div class="form-group row">
											<label class="col-form-label col-md-2">Product Category</label>
											<div class="col-md-10">
												<select name="prd_cat" class="form-control">
													<option>-- Select Product Category --</option>
													<?php
           
   $get_cats = "select * from categories";
$run_cats = mysqli_query($con,$get_cats);

while($row_cats=mysqli_fetch_array($run_cats)){

$cat_title = $row_cats['cat_title'];
    $cat_id = $row_cats['cat_id'];
   

     echo "<option value=$cat_id>$cat_title</option>";    
   
      }    
           ?>
           
           </select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Product Price</label>
											<div class="col-md-10">
												<input type="text" name="prd_price" class="form-control" placeholder="Product Price">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">Product Description</label>
											<div class="col-md-10">
												<input type="text" name="prd_desc" class="form-control" placeholder="Product Description">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-form-label col-md-2">Choose Product Image</label>
											<div class="col-md-10">
												<input class="form-control" name="prd_img" type="file">
											</div>
					
                    					</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">Product Keyword</label>
											<div class="col-md-10">
												<input type="text" name="prd_keyword" class="form-control" placeholder="Product Keyword">
											</div>
										</div>
                                        <div class="form-group row">
											<label class="col-form-label col-md-2">Product Quantity</label>
											<div class="col-md-10">
												<input type="text" name="prd_quantity" class="form-control" placeholder="Product Quantity">
											</div>
										</div>
							<center>
<div class="form_row">
             &nbsp;<input type="submit" class="contact_input" name="index" value="Add Product" style="width: 720px"/>&nbsp;<br />
            </div>
    </center>


                                        
									</form>
								</div>
							</div>
                            

<?php


if(isset($_POST['index'])){

    //getting text data
   $prd_cat = $_POST['prd_cat'];
   $prd_title = $_POST['prd_title'];
   $prd_price = $_POST['prd_price'];
   $prd_desc = $_POST['prd_desc'];
   $prd_keyword = $_POST['prd_keyword'];
    $prd_quantity = $_POST['prd_quantity'];
    //getting image data
   $prd_img = $_FILES['prd_img']['name'];
   $prd_img_tmp = $_FILES['prd_img']['tmp_name'];
   
   move_uploaded_file($prd_img_tmp,"images/$prd_img");
   
   $insert_product = "insert into products (prd_cat,prd_title,prd_price,prd_desc,prd_img,prd_keyword,prd_quantity) values ('$prd_cat','$prd_title','$prd_price','$prd_desc','$prd_img','$prd_keyword','$prd_quantity')";
   
   $run_product = mysqli_query($con,$insert_product);
   
   
   if($run_product){
   
    echo "<script>
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'PRODUCT ADDED',
      showConfirmButton: false,
      timer: 2000
    })
    </script>"; 
    
  
  
  }



}
else{
  
    echo "<script>
   Product added
    </script>"; 
}


?>
</body>
</html>
