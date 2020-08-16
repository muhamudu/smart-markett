<?php
include '../../../database/connection.php';
if (isset($_POST['save_product'])) {
    $userID = $_POST['userID'];
    $demoImg = $_POST['demoImg'];
    $expressNo = $_POST['expressNo'];
    $category = $_POST['category'];
    $sub_category = $_POST['sub_category'];
    $pro_name = $_POST['pro_name'];
    $pro_brandName = $_POST['pro_brandName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $pro_specification = $_POST['pro_specification'];


    $sel = mysqli_query($DB_CONNECT, "SELECT * FROM company_tb WHERE user_ID='$userID' ");
    $fet = mysqli_fetch_array($sel);

    if ($userID = $fet['user_ID']) {

        $companyID = $fet['company_ID'];


        $insertQuery = mysqli_query($DB_CONNECT, "INSERT INTO `product_tb`(`user_ID`,`company_ID`,`category_ID`, `subCategory_ID`, `pro_name`, `pro_brandName`, `pro_price`,`quantity`, `pro_option`, `pro_specification`, `express_number`,`image1`,`image2`,`image3`,`image4`) VALUES ('$userID','$companyID','$category','$sub_category','$pro_name','$pro_brandName','$price','$quantity','$status','$pro_specification','$expressNo','$demoImg','$demoImg','$demoImg','$demoImg') ");


        if ($insertQuery) {

            echo '
									<div class="alert alert-success alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>

										<div class="alert-icon">
											<i class="far fa-fw fa-bell"></i>
										</div>

										<div class="alert-message">
											<strong>Successfully!</strong> Your New Product Has Been Added To Our Database!
										</div>
									</div>
									';
            // echo "<meta http-equiv='refresh' content='3;url=pages-product.php'>";
        } else {
            echo '
									<div class="alert alert-warning alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>

										<div class="alert-icon">
											<i class="far fa-fw fa-bell"></i>
										</div>

										<div class="alert-message">
											<strong>Failed!</strong> Please, Check if all Fields are filled!!
										</div>
									</div>
									' . mysqli_error($DB_CONNECT);
        }
    } else {
        echo '
									<div class="alert alert-danger alert-dismissible" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>

										<div class="alert-icon">
											<i class="far fa-fw fa-bell"></i>
										</div>

										<div class="alert-message">
											<strong>Company Needed!</strong> Please, Contact Us to Register your company First!!
										</div>
									</div>
								';
    }
}
