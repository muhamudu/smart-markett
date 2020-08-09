<?php
    include '../database/connection.php';
    // session_start();

    if(isset($_POST['save_product'])){
        $userID = $_POST['userID'];
        $expressNo = $_POST['expressNo'];
        $category = $_POST['category'];
        $sub_category = $_POST['sub_category'];
        $pro_name = $_POST['pro_name'];
        $pro_brandName = $_POST['pro_brandName'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $status = $_POST['status'];
        $pro_specification = $_POST['pro_specification'];

 
        $insertQuery = mysqli_query($DB_CONNECT,"INSERT INTO `product_tb`(`user_ID`,`category_ID`, `subCategory_ID`, `pro_name`, `pro_brandName`, `pro_price`,`quantity`, `pro_option`, `pro_specification`, `express_number`) VALUES ('$userID','$category','$sub_category','$pro_name','$pro_brandName','$price','$quantity','$status','$pro_specification','$expressNo') ");


        if($insertQuery){
           
            // echo "New Product has been added to your store!!!";
            echo "<meta http-equiv='refresh' content='0;url=pages-product.php'>";
        }
        else {
            echo "Failed to add your New Product!!!".mysql_error();
        }
    }
?>