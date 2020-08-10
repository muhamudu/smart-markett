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



  <script src="../assets/js/jquery-1.11.1.min.js"></script>
  <script src="js/custom.js"></script>
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
div.
  <div class="container">
  <div class="row">
        <div class="col-md-12">
        <div class="tab-content" style="margin-top: -10px;">
        <div id="login" class="tab-pane active">
            <form class="form-signin loginForm" method="post" action="validation/va-login.php" redirectTo='index'>
                <h2><center>MANAGER LOGIN</center></h2><hr>
                <input type="text" placeholder="Username" name="inputUsername" class="form-control" required/><br>
                
                <input type="password" placeholder="Password" name="inputPassword" class="form-control" required/>
                <input type="hidden" name="issubmit" class="hidden">
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
