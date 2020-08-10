<?php
include("../../database/connection.php");
if (isset($_POST['issubmit'])) {
    $inputUsername = $_POST['inputUsername'];
    $inputPassword = $_POST['inputPassword'];
    // $sqlNumRows = 0;

    $sqlQuery = mysqli_query($DB_CONNECT,"SELECT * FROM admin_tb WHERE username='$inputUsername' AND password='$inputPassword' ");

    // $sqlNumRows = mysql_num_rows($sqlQuery);
    $sqlFetch = mysqli_fetch_array($sqlQuery);

    if($inputUsername=$sqlFetch['username'] && $inputPassword=$sqlFetch['password'] ){
        session_start();
        $_SESSION['USER_ID'] = $sqlFetch['adminID'];

        echo "access";
        // echo("Successfully Logged In");
    }
    else { 
        echo "not accessible";
    }
    
}
?>