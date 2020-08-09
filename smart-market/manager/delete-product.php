<?php include('../database/connection.php'); ?>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Delete student</title>
</head>

<body>
<?php 
	 $id=$_REQUEST['id']; 
	 $query=mysqli_query($DB_CONNECT,"DELETE FROM product_tb WHERE ID=$id");
	 header('location:pages-product.php');	 
?>

  </p>
</div>
</body>
</html>