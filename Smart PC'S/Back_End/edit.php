<?php
error_reporting(0);
include('connect_db.php');

if (isset($_POST['submit']))
{
$id=$_POST['id'];
$prd_cat=mysqli_real_escape_string($con, $_POST['prd_cat']);
$prd_title=mysqli_real_escape_string($con, $_POST['prd_title']);
$prd_price=mysqli_real_escape_string($con, $_POST['prd_price']);
$prd_desc=mysqli_real_escape_string($con, $_POST['prd_desc']);
$prd_img=mysqli_real_escape_string($con, $_POST['prd_img']);
$prd_keyword=mysqli_real_escape_string($con, $_POST['prd_keyword']);
$prd_quantity=mysqli_real_escape_string($con, $_POST['prd_quantity']);

//updating the table
mysqli_query($con,"UPDATE products SET prd_cat='$prd_cat', prd_title='$prd_title', prd_price='$prd_price', prd_desc='$prd_desc', prd_img='$prd_img', prd_keyword='$prd_keyword' , prd_quantity='$prd_quantity' WHERE prd_id='$id'");


echo "<script>
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'PRODUCT ADDED',
  showConfirmButton: false,
  timer: 2000
})
</script>"; 

echo"<script>window.open('manage.php?tn=$r','_self')</script>";


}


if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
{

$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM products WHERE prd_id=".$_GET['id']);

$row = mysqli_fetch_array($result);

if($row)
{

$id = $row['prd_id'];
$prd_cat = $row['prd_cat'];
$prd_title=$row['prd_title'];
$prd_price = $row['prd_price'];
$prd_desc = $row['prd_desc'];
$prd_img=$row['prd_img'];
$prd_keyword = $row['prd_keyword'];
$prd_quantity = $row['prd_quantity'];
}
else
{
echo "No results!";
}
}

      $get_cat = "select * from categories where cat_id='$prd_cat'";
      $run_cat = mysqli_query($con,$get_cat);
      $row_cat = mysqli_fetch_array($run_cat);

      $cat_title = $row_cat['cat_title'];
	 
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
                            <h3 class="page-title">Edit/Delete Products</h3>
                            
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-xl-12 col-sm-3 col-12">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit products</h4>
								</div>
   
    <form method="post" action="edit.php">

    <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>"/>
	 <div class="card-body">

     <div class="form-group">
	 <label for="inputState">Product Category</label>
    <select name="prd_cat" class="form-control" required>
      <option value="<?php echo $prd_cat;?>"><?php echo $cat_title ;?></option>
      <?php
      $get_cat = "select * from categories";
      $run_cat = mysqli_query($con,$get_cat);

      while($row_cat = mysqli_fetch_array($run_cat)){
      $cat_id = $row_cat['cat_id'];
      $cat_title = $row_cat['cat_title'];

      echo "
      <option value='$cat_id'>$cat_title</option>

      ";
      }
      ?>
	  </select>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;  
     
	    <div class="form-group">
            <label>Product Title <span class="text-danger"></span>
            <input class="form-control" type="text" name="prd_title" id="prd_title" value="<?php echo $prd_title; ?>" required>
        </label>
          </div>
        <div class="form-group">
            <label>Product Price <span class="text-danger"></span></label>
            <input class="form-control" type="text" name="prd_price" id="prd_price" value="<?php echo $prd_price; ?>" required>
        </div>
        <div class="form-group">
            <label>Product Description <span class="text-danger"></span></label>
            <input class="form-control" type="text" name="prd_desc" id="prd_desc" value="<?php echo $prd_desc; ?>" required>
        </div>
     
        <!--mine-->
    <div class="form-group row">
											<label class="col-form-label col-md-2">Product Image</label>
											<div class="col-md-10">
                        
     
	   <img width="150" height="150" src="images/<?php echo $prd_img;?>" alt="<?php echo $prd_img;?>" >
	 
											<input class="form-control" name="prd_img" type="file">
											</div>
										</div>
        <div class="form-group">
            <label>Product Keyword <span class="text-danger"></span></label>
            <input class="form-control" type="text" name="prd_keyword" id="prd_keyword" value="<?php echo $prd_keyword; ?>" required>
        </div>
        <div class="form-group">
            <label>Product Quantity <span class="text-danger"></span></label>
            <input class="form-control" type="text" name="prd_quantity" id="prd_quantity" width="48" height="48" value="<?php echo $prd_quantity; ?>" required>
        </div>
        <div class="form-group">
		<div class="col-md-12">
			<button type="button" name="cancel" value="cancel" id="cancel" onClick="window.location='manage.php';" class="btn btn-rounded btn-outline-danger">Cancel</button>
      <button type="submit" name="submit" value="submit" id="submit" class="btn btn-rounded btn-outline-secondary"><i class="fa fa-fw fa-edit"></i> Update Record</button>
		</div>
        </div>
    </form>
</body>
</html>
		</div>                
      	</div>
	<div>
		</div>
	</div>
	</div>
	<div>
    </body>

</html>

   