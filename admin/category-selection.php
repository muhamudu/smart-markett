<?php

    include '../database/connection.php';

    if (isset($_POST['category_ID'])) {
        $C_ID = $_POST['category_ID'];
        // GET ALL SUB-CATEGORY
        $query = mysqli_query($DB_CONNECT,"SELECT * FROM `sub_category_tb` WHERE `category_ID`='$C_ID' AND `status`='Active' ");


        echo "<option value=''>Select Sub-category</option>";
        while ($fet = mysqli_fetch_array($query)) {
            echo "<option value='".$fet['subCategory_ID']."'>".$fet['sub_category_name']."</option>";
        }

    }


?>