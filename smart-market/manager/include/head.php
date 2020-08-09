<?php
	include('../database/connection.php');
	session_start();
	if (!isset($_SESSION['USER_ID'])){
		header('location:./login.php');
	}

	//lOGIN USERNAME INFORMATION
	$user_id=$_SESSION['USER_ID'];

	$result=mysqli_query($DB_CONNECT,"SELECT * FROM admin_tb WHERE adminID='$user_id'")or die("mysql_error".mysql_error());
	$row=mysqli_fetch_array($result);

	$username = $row['username'];

	// $selUser=mysql_query("SELECT * FROM users WHERE user_ID='$user_id'")or die("mysql_error".mysql_error());
	// $fetUser=mysql_fetch_array($selUser);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
	<meta name="author" content="SmartMarket">
	<meta name="keywords" content="SmartMarket, bootstrap, web ui kit, dashboard template, admin template">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Manager Dashboard</title>

	<link href="css/app.css" rel="stylesheet">
	<!-- DataTables -->
	<link href="./datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="./datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="./datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="./css/bootstrap-fileupload.min.css" />
</head>