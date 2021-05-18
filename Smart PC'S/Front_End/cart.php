
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Smart PC's</title>
   
<?php

include("../Back_End/Include/functions.php");
include("../Back_End/Include/db.php");
error_reporting(0);

?>


<?php
	session_start();
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
    ?>


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
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/solid.css"/>
    
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/font-awesome.min.css"/>
    
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/fontawesome.min.css   ">
    
    
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/solid.css"/>
    <!--Title logo-->
    <link rel="shortcut icon" href="images/title_icon.png" type="image/png">

  </head>
  <body>
<?php
include("Include/header.php");
?>
<br><br><br><br>
<br>
<section id="products" class="products-area">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Selected <span>Products</span></h3>
                    </div>  </div>  </div> 
</div>

<?php
    
    if(isset($_GET['cat'])){
    
    $get_id = $_GET['cat'];
    
    $query = "select cat_title from categories where cat_id='$get_id'";
    $run_query = mysqli_query($con,$query);
    
    $row = mysqli_fetch_array($run_query);
    
    $cat = $row['cat_title'];
    
    echo"<span class=current>>$cat</span>";
    
    }
    
    ?>


 </div>
    <div class="left_content">

      <div class="title_box">Categories</div>
      <ul class="left_menu">
      <?php  getcats();  ?>
        
      </ul>
      <HR>
      <div class="title_box">Product Rating</div>
      <ul>
        <li><i class="fa fa-rate"></i></li>
      
     </ul>

     
     <HR>
      <div class="title_box">Express Shipping</div>
      <input type="checkbox">Express
  

  </div>
  
    <!-- end of left content -->
    
   
    <!-- end of left content -->
    
    <!-- end of left content -->
    <div class="center_prod">
  

</div>
<!-- end of left content -->
<div class="center_content">



        <form action="" enctype="multipart/form-data" method="post"><div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                              <thead>

        <tr>
        <th>Remove</th>
        <th>Product(s)</th>
        <th name="qty">Quantity </th>
        <th>Total Price</th>
        </tr>

        <?php


        $total = 0;
        global $con;

        $ip = getip();

        $price = "select * from cart where ip_add = '$ip'";

        $run_price = mysqli_query($con,$price) ;

        while($pprice = mysqli_fetch_array($run_price)){

        $pro_id = $pprice['p_id'];

        $prod_price = "select * from products where prd_id = '$pro_id'";

        $run_pro_price = mysqli_query($con,$prod_price);


        while($ppprice = mysqli_fetch_array($run_pro_price)){

        $product_price = array($ppprice['prd_price']);
        $product_title = $ppprice['prd_title'];
        $product_image = $ppprice['prd_img'];
        $single_price = $ppprice['prd_price'];


        $price_sum = array_sum($product_price);

        $total +=$price_sum;

        //echo  $product_price;

        ?>

        <tr align="center">

        <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;  ?>"></td>
        <td><?php echo $product_title; ?>
        <br>
        <img src="images/<?php echo $product_image; ?>" width="30px" height="100px">
        </td>
        <td>

        <input type="number" id="qty" name="qty" min="1" max="50" />
        </td>

        <?php
        error_reporting(0);
        if (isset($_POST['update_cart'])){

        $qty=$_POST['qty'];

        $update_qty="update cart set qty='$qty'";
        $run_qty=mysqli_query($con, $update_qty);
        $_SESSION['qty']=$qty;
        $total=$total*$qty;



        }
        ?>

        </td>
        <td>

        <?php echo "Ksh".$single_price;  ?>
        </td>

        <td></td>  


        </tr>


        <?php

        }
        }
        ?>

        <tr align="right">
        <td colspan="4"></td>

        <td>Total: <?php echo"Ksh&nbsp;".$total;   ?></td>

        </tr>

        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                              <thead>

        <td><input class="btn btn-lg btn-common animated fadeInUp" type="submit" name="update_cart" value="Update Cart"/>



        <br><br>
        <td>

        <a href="products.php" class="btn btn-lg btn-common animated fadeInUp">Continue Shopping</a>

        </td>
        &nbsp; &nbsp;
        <td>

        <a href="checkout.php" class="btn btn-lg btn-common animated fadeInUp">Checkout</a>

        </td>



        </tr>

        </table>
        </div>


        </form>






      <?php
      // Turn off all error reporting
      error_reporting(0);


      global $con;
      $ip = getIp();



      if(isset($_POST['update_cart'])){

      foreach($_POST['remove'] as $remove){

      $delete_product = "delete from cart where p_id='$remove' AND ip_add='$ip'";
      $run_delete = mysqli_query($con, $delete_product);
      echo $ip;
      if($run_delete){

      echo "<script>window.open('cart.php','_self')</script>"    ;  

      }


    }
    function update_cart(){

    if(isset($_POST['continue'])){

    echo "<script>window.open('allproducts.php','_self')</script>"    ;  
    }
    }

    echo @$up_cart=update_cart();

    }

    ?>


    </div>
    <!-- end of center content -->
    <div class="right_content">
    <div class="shopping_cart">
    <div class="cart_title"><i>Welcome Customer!</i><br>Shopping cart</div>
    <div class="cart_details"><font color="blue"><?php total_items(); ?></font>&nbsp;Items <br />
    <span class="border_cart"></span>Subtotal:<span class="price"><?php total_price(); ?> </span> </div>
    <div class="cart_icon"><a href="cart.php" title="header=[Checkout] body=[&nbsp;] fade=[on]"><i class="fa fa-shopping-cart"></i></a></div>
    </div>


    <br>

      <?php

      special();

      ?> 

    <br>


        <?php

        special();

        ?>

            <br>


        <?php

        special();

        ?>
        <br>


        <?php

        special();

        ?>



    




 
  
  
  <!-- end of main content -->      
      
</div></div></div></div></div></div></div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <?php


    cart();

    ?>

    <?php
      include('include/footer.php');
    ?>