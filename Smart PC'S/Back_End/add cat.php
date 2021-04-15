<html>
<head>
	<title>Add Category</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
		$cat_title = mysqli_real_escape_string($mysqli, $_POST['cat_title']);
	
		
	// checking empty fields
	if(empty($cat_title) ) {
				
		
		if(empty($cat_title)) {
			echo "";
		}
		
		
		
	} else { 
		
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO categories (cat_title) VALUES('$cat_title')");
		
		//display success message
		echo"<script>window.open('category.php?tn=$r','_self')</script>";
	}
}
?>
</body>
</html>
