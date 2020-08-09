<?php include './include/head.php'; ?>

<body>
	<div class="wrapper">
		<!-- BEGIN SIDEBAR NAVIGATION -->
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
          <span class="align-middle">Smart-Market 250</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="index.php">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-product.php">
              <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Products</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-order.php">
              <i class="align-middle" data-feather="shopping-bag"></i> <span class="align-middle">Orders</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-invoice.php">
              <i class="align-middle" data-feather="credit-card"></i> <span class="align-middle">Invoice</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-customer.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Customer</span>
            </a>
					</li>

					<li class="sidebar-header">
						Users & Setting
					</li>
					

					<li class="sidebar-item active">
						<a class="sidebar-link" href="up-user.php">
              <i class="align-middle" data-feather="users"></i> <span class="align-middle">Users</span>
            </a>
                    </li>
                    
                    
					<li class="sidebar-item">
						<a class="sidebar-link" href="up-setting.php">
              <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Setting</span>
            </a>
					</li>

					<li class="sidebar-header">
						Other
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="other-mails.php">
              <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Mails</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="other-notification.php">
              <i class="align-middle" data-feather="bell"></i> <span class="align-middle">Notifications</span>
            </a>
                    </li>
                    
                    <li class="sidebar-item">
						<a class="sidebar-link" href="logout.php">
              <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">LogOut</span>
            </a>
					</li>
				</ul>

				<div class="sidebar-cta">
					<div class="sidebar-cta-content">
						<strong class="d-inline-block mb-2">Upgrade to Pro</strong>
						<div class="mb-3 text-sm">
							Get more elements like ads and videos by ugrading to pro
						</div>
						<a href="https://SmartMarket.io/pricing" target="_blank" class="btn btn-outline-primary btn-block">Upgrade</a>
					</div>
				</div>
			</div>
		</nav>
		<!-- END SIDEBAR NAVIGATION -->

		<div class="main">
			<?php include './include/navbar.php'; ?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row mb-2 mb-xl-3">
						<div class="col-auto d-none d-sm-block">
							<h3><strong>Users</strong></h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">Smart-Market</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Users</li>
								</ol>
							</nav>
						</div>
                    </div>

					<div class="row">
						<div class="col-md-3 col-xl-2">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Profile Settings</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">

                                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#users" role="tab">Users</a>
                                    
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#addUser" role="tab">Add User</a>
                                    
                                                                       
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
							<div class="tab-content">
								
								<div class="tab-pane fade show active" id="users" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">List of Users</h5>

											<table class="table table-hover table-bordered" id="datatable">
                                                <thead>
                                                    <tr>
                                                        <th style="width:5%;">No</th>
                                                        <th style="width:15%">Username</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Company</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                    $query = mysqli_query($DB_CONNECT,"SELECT * FROM users ORDER BY user_ID DESC" );
                                                    $count = 0;

                                                    while($fetchQuery = mysqli_fetch_array($query))
                                                    {
                                                        $user_ID = $fetchQuery['user_ID'];
                                                        
                                                        $query2 = mysqli_query($DB_CONNECT,"SELECT * FROM company_tb WHERE user_ID='$user_ID' " );

                                                        $fetchQuery2 = mysqli_fetch_array($query2);

                                                        $count++;
                                                        echo "
                                                        <tr>
                                                        <td>$count</td>
                                                        <td>".$fetchQuery['username']."</td>
                                                        <td>".$fetchQuery['email']."</td>
                                                        <td>".$fetchQuery['phone']."</td>
                                                        <td>".$fetchQuery2['company_name']."</td>
                                                        <td class='table-action'>
                                                            <a href='edit-user.php?id=".$fetchQuery['user_ID']."'><i class='align-middle' data-feather='edit-2'></i></a>

                                                            <a href='delete-user.php?id=".$fetchQuery['user_ID']."'><i class='align-middle' data-feather='trash'></i></a>
                                                        </td>
                                                        </tr> ";
                                                    }
                                                ?>
                                                    
                                                </tbody>
                                            </table>

										</div>
									</div>
                                </div>

                                <div class="tab-pane fade" id="addUser" role="tabpanel">

                                    <div class="card">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">User Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <?php
                                                if (isset($_POST['save_user_info'])) {
                                                    $inputFirstName = $_POST['inputFirstName'];
                                                    $inputLastName = $_POST['inputLastName'];
                                                    $inputUsername = $_POST['inputUsername'];
                                                    $inputEmail = $_POST['inputEmail'];
                                                    $inputPassword = md5($_POST['inputPassword']);
                                                    $inputRePassword = md5($_POST['inputRePassword']);
                                                    $inputPhone = $_POST['inputPhone'];
                                                    $inputAddress = $_POST['inputAddress'];
                                                    $inputCity = $_POST['inputCity'];
                                                    $inputState = $_POST['inputState'];
                                                    $inputZip = $_POST['inputZip'];
                                                    $inputPosition = $_POST['inputPosition'];
                                                    $dfault_img = $_POST['dfault_img'];

                                                    $sqlInput = mysqli_query($DB_CONNECT,"INSERT INTO `users`(`username`, `firstname`, `lastname`, `email`, `password`, `phone`, `address`, `city`, `state`, `zip`, `position`,`user_img`) VALUES ('$inputUsername','$inputFirstName','$inputLastName','$inputEmail','$inputPassword','$inputPhone','$inputAddress','$inputCity','$inputState','$inputZip','$inputPosition','$dfault_img')");

                                                    if ($inputPassword != $inputRePassword) {
                                                        echo "Re-Typed Password doesn't Macth!!!".mysqli_error($DB_CONNECT);
                                                    }
                                                    else {
                                                        if ($sqlInput) {
                                                            ?>
                                                                <script type="text/javascript">
                                                                    window.alert ('New User Successfully Added');
                                                                </script>
                                                            <?php
                                                            echo "<meta http-equiv='refresh' content='0'>";
                                                        }
                                                        else {
                                                            echo "Failed to add new user".mysqli_error($DB_CONNECT);
                                                        }
                                                    }

                                                    

                                                }
                                            ?>
                                            <form action="" method="post">
                                                <input type="hidden" name="dfault_img" value="DfaultProfileImage.png">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>First name</label>
                                                        <input type="text" class="form-control" name="inputFirstName" placeholder="First name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputLastName">Last name</label>
                                                        <input type="text" class="form-control" name="inputLastName" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" name="inputUsername" placeholder="Username">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="inputEmail" placeholder="Email">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="inputPassword" placeholder="Paasword">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Re Type Password</label>
                                                        <input type="password" class="form-control" name="inputRePassword" placeholder="Re-Type Password">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Phone Number</label>
                                                        <input type="text" class="form-control" name="inputPhone" placeholder="Phone Number">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label>Position</label>
                                                        <input type="text" class="form-control" name="inputPosition" placeholder="Position">
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label>City</label>
                                                        <input type="text" class="form-control" name="inputCity">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label>State</label>
                                                        <select name="inputState" class="form-control">
                                                            <option disabled selected>Choose...</option>
                                                            <option>Uganda</option>
                                                            <option>Burundi</option>
                                                            <option>Kenya</option>
                                                            <option>Rwanda</option>
                                                            <option>Tanzania</option>
                                                            <option>DR Congo</option>
                                                            <option>South Sudan</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-2">
                                                        <label>Zip</label>
                                                        <input type="text" class="form-control" name="inputZip">
                                                    </div>
                                                </div>
                                                <button type="submit" name="save_user_info" class="btn btn-primary">Save changes</button>
                                            </form>

                                        </div>
                                    </div>


                                    <div class="card">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">Company Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <?php
                                                if (isset($_POST['submit_company_details'])) {
                                                    $companyUserName = $_POST['companyUserName'];
                                                    $company_name = $_POST['company_name'];
                                                    $category = $_POST['category'];
                                                    $phone = $_POST['phone'];
                                                    $address = $_POST['address'];
                                                    $logo = $_FILES['logo']['name'];
                                                    $location = '../images/logos/'.basename($_FILES['logo']['name']);
                                                    
                                                    $sqlInsert = mysqli_query($DB_CONNECT,"INSERT INTO `company_tb`(`user_ID`,`company_name`, `category`, `phone_number`, `address`, `logo`) VALUES ('$companyUserName','$company_name','$category','$phone','$address','$logo')");

                                                    if(move_uploaded_file($_FILES['logo']['tmp_name'], $location)){
                                                        if ($sqlInsert) {
                                                            echo "<meta http-equiv='refresh' content='0'>";
                                                        }
                                                        else {
                                                            echo "Data not saved into the Database";
                                                        }
                                                                                                                
                                                    }
                                                    else {
                                                        echo "Failed to upload image!!".mysqli_error($DB_CONNECT);
                                                    }
                                                    
                                                }
                                            ?>
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="form-group">
                                                            <label>Company UserName</label>
                                                            <select name="companyUserName" class="form-control">
                                                                <option disabled selected>Select...</option>
                                                                <?php 
                                                                    $sqlSelect = mysqli_query($DB_CONNECT,"SELECT * FROM users");

                                                                    while ($sqlFecth = mysqli_fetch_array($sqlSelect)) {
                                                                        echo "<option value='".$sqlFecth['user_ID']."'>".$sqlFecth['firstname']." ".$sqlFecth['lastname']."</option>";
                                                                    }

                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Company Name</label>
                                                            <input type="text" class="form-control" placeholder="Company Name" name="company_name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <select name="category" class="form-control">
                                                                <option disabled selected>Choose...</option>
                                                                <option>Private</option>
                                                                <option>Public</option>
                                                                <option>Co-operative</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Business Phone Number</label>
                                                            <input type="text" name="phone" class="form-control"  placeholder="Business Number">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" name="address" class="form-control" placeholder="KK 4 Ave, Kigali city,Rwanda">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <div class="form-group">
                                                                <label>LOGO</label>
                                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                    <div class="fileupload-new thumbnail" style="width: 60%; height: 120px;"><img src="../images/logos/demoUpload.jpg" alt="" /></div>
                                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="width: 60%; height: 120px;"></div>
                                                                    <div>
                                                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select logo</span><span class="fileupload-exists">Change</span><input type="file" name="logo" /></span>

                                                                        <!-- <button type="submit" class="btn btn-success fileupload-exists">Save</button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <small>For best results, use an image at least 128px by 128px in .jpg format</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" name="submit_company_details" class="btn btn-primary">Save changes</button>
                                            </form>

                                        </div>
                                    </div>

                                </div>

							</div>
						</div>
					</div>

				</div>
			</main>

			<?php include './include/footer.php'; ?>
		</div>
	</div>

	
	<script src="js/app.js"></script>
    <script src="js/vendor.js"></script>

    <!-- Required datatable js -->
    <script src="./datatables/jquery.dataTables.min.js"></script>
    <script src="./datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Responsive examples -->
    <script src="./datatables/dataTables.responsive.min.js"></script>
    <script src="./datatables/responsive.bootstrap4.min.js"></script>
	<script src="./js/bootstrap-fileupload.js"></script>

	<script>
		// document.getElementById("expressNo").innerHTML =Math.floor(Math.random() * 1000000000) + 1;

		
	</script>

</body>

</html>