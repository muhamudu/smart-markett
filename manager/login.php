<?php
  include('../database/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="icon" href="../img/sch_sign.PNG" type="image">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../font-awesome.css" />
    <link rel="stylesheet" href="../css/login.css" />



  <script src="../js/jquery-2.1.4.min.js"></script>

  <style type="text/css">
       body{
          background: url(../images/bg.jpg);
        }
        .loader {
          border: 16px solid #f3f3f3; /* Light grey */
          border-top: 16px solid blue;
          border-right: 16px solid green;
          border-bottom: 16px solid red;
          border-left: 16px solid pink;
          border-radius: 50%;
          width: 20px;
          height: 20px;
          animation: spin 2s linear infinite;
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
        .form-signin{
          background-color: white;
          opacity: 0.7;
        }
  </style>
</head>
<body>
  <div class="container">
  <div class="row">
        <div class="col-md-12">
        <div class="tab-content" style="margin-top: -10px;">
        <div id="login" class="tab-pane active">
            <form class="form-signin" method="post" action="">
            
                <!-- Login Form -->
                <?php

                    if (isset($_POST['buttonSubmit'])) {
                        $inputUsername = $_POST['inputUsername'];
                        $inputPassword = $_POST['inputPassword'];
                        // $sqlNumRows = 0;

                        $sqlQuery = mysqli_query($DB_CONNECT,"SELECT * FROM admin_tb WHERE username='$inputUsername' AND password='$inputPassword' ");

                        // $sqlNumRows = mysql_num_rows($sqlQuery);
                        $sqlFetch = mysqli_fetch_array($sqlQuery);

                        if($inputUsername=$sqlFetch['username'] && $inputPassword=$sqlFetch['password'] ){
                            session_start();
                            $_SESSION['USER_ID'] = $sqlFetch['adminID'];

                            echo "<meta http-equiv='refresh' content='0;url=index.php'>";
                            // echo("Successfully Logged In");
                        }
                        else { 
                            ?>
                                <script>
                                    window.alert("Sorry! Type the correct Email Address or Password");
                                </script>
                            <?php
                        }
                        
                    }
                        

                ?>
              <!-- Registration Form -->
              
                    <h2><center>MANAGER LOGIN</center></h2><hr>
                <input type="text" placeholder="Username" name="inputUsername" class="form-control" required/><br>
                
                <input type="password" placeholder="Password" name="inputPassword" class="form-control" required/>
                <button class="btn text-muted btn-block text-center btn-primary" name="buttonSubmit" type="submit"><span class="icon-key"></span> LogIn</button>
            </form>
        </div>
        
    </div>
    
        </div>
  </div><!-- End of Row -->
  </div>

<script src="../js/bootstrap.js"></script>
</body>
</html>
