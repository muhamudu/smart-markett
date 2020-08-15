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
						Setting
					</li>
					
                    
                    
					<li class="sidebar-item active">
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
							<h3><strong>Settings</strong></h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">Smart-Market</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Setting</li>
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

                                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">Account</a>

									<a class="list-group-item list-group-item-action" data-toggle="list" href="#company" role="tab">Company</a>
                                    
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">Password</a>
                                    
                                                                        
								</div>
							</div>
						</div>

						<div class="col-md-9 col-xl-10">
						<?php 
											$userID = $row['user_ID'];
											$sel = mysqli_query($DB_CONNECT,"SELECT * FROM users WHERE user_ID = '$userID' ");
											$fet = mysqli_fetch_array($sel);



											if(isset($_POST['update_user'])){

												$update_firstname = $_POST['update_firstname'];
												$update_lastname = $_POST['update_lastname'];
												$update_username = $_POST['update_username'];
												$update_phone = $_POST['update_phone'];
												$update_email = $_POST['update_email'];
												$update_position = $_POST['update_position'];
												$update_address = $_POST['update_address'];
												$update_city = $_POST['update_city'];
												$update_state = $_POST['update_state'];
												$update_zip = $_POST['update_zip'];

												$update_profile_img = $_FILES['update_profile_img']['name'];
												$location = '../images/profile-img/'.basename($_FILES['update_profile_img']['name']);

												$update_query = mysqli_query($DB_CONNECT,"UPDATE `users` SET `username`='$update_username',`firstname`='$update_firstname',`lastname`='$update_lastname',`email`='$update_email',`phone`='$update_phone',`address`='$update_address',`city`='$update_city',`state`='$update_state',`zip`='$update_zip',`position`='$update_position',`user_img`='$update_profile_img' WHERE user_ID='$userID' ");

												if(move_uploaded_file($_FILES['update_profile_img']['tmp_name'], $location)){
													if ($update_query) {
														echo '
															<div class="alert alert-success alert-dismissible" role="alert">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																	<span aria-hidden="true">&times;</span>
																</button>
						
																<div class="alert-icon">
																	<i class="far fa-fw fa-bell"></i>
																</div>
						
																<div class="alert-message">
																	<strong>Updating New Data!</strong>

																	<div class="spinner-border spinner-border-sm text-success mr-2" role="status">
																		<span class="sr-only">Loading...</span>
																	</div>
																</div>
															</div>
														';

														echo "<meta http-equiv='refresh' content='3;url=up-setting.php'>";
													}
													else {
														echo '
														<div class="alert alert-info alert-dismissible" role="alert">
															<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
					
															<div class="alert-icon">
																<i class="far fa-fw fa-bell"></i>
															</div>
					
															<div class="alert-message">
																<strong>Error!</strong> Please, Try Again!!
															</div>
														</div>
														'.mysql_error();
													}
												}
												else {
													echo '
													<div class="alert alert-danger alert-dismissible" role="alert">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
				
														<div class="alert-icon">
															<i class="far fa-fw fa-bell"></i>
														</div>
				
														<div class="alert-message">
															<strong>Error!</strong> Failed to upload Image, Try again!
														</div>
													</div>
													'.mysql_error();
												}
													
											}
										?>
							<div class="tab-content">
								<div class="tab-pane fade show active" id="account" role="tabpanel">

									<div class="card">
										<div class="card-header">

											<h5 class="card-title mb-0">Public info</h5>
										</div>

										
										<div class="card-body">
											<form method="post" action="" enctype="multipart/form-data">
												<div class="row">
													<div class="col-md-8">
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>First name</label>
																<input type="text" name="update_firstname" class="form-control" value="<?php echo $fet['firstname']; ?>">
															</div>
															<div class="form-group col-md-6">
																<label>Last name</label>
																<input type="text" name="update_lastname" value="<?php echo $fet['lastname']; ?>" class="form-control" id="inputLastName">
															</div>
															<div class="form-group col-md-6">
																<label>Username</label>
																<input type="text" name="update_username" value="<?php echo $fet['username']; ?>" class="form-control" id="inputLastName">
															</div>
															<div class="form-group col-md-6">
																<label>Phone Number</label>
																<input type="text" name="update_phone" value="<?php echo $fet['phone']; ?>" class="form-control" id="inputEmail4">
															</div>
															<div class="form-group col-md-6">
															<label>Email</label>
															<input type="email" name="update_email" value="<?php echo $fet['email']; ?>" class="form-control" id="inputAddress" placeholder="1234 Main St">
														</div>
														<div class="form-group col-md-6">
															<label>Position</label>
															<input type="text" name="update_position" value="<?php echo $fet['position']; ?>" class="form-control" id="inputAddress" placeholder="1234 Main St">
														</div>
														</div>
														<div class="form-group">
															<label>Address</label>
															<input type="text" name="update_address" value="<?php echo $fet['address']; ?>" class="form-control" id="inputAddress">
														</div>
														
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>City</label>
																<input type="text" name="update_city" value="<?php echo $fet['city']; ?>" class="form-control" id="inputCity">
															</div>
															<div class="form-group col-md-4">
																<label>State</label>
																<select id="inputState" name="update_state" class="form-control">
																	<option selected><?php echo $fet['state']; ?></option>
																	<option>...</option>
																</select>
															</div>
															<div class="form-group col-md-2">
																<label>Zip</label>
																<input type="text" name="update_zip" value="<?php echo $fet['zip']; ?>" class="form-control" id="inputZip">
															</div>
														</div>
													</div>

													<div class="form-group col-md-4">
														<div class="fileupload fileupload-new text-center" data-provides="fileupload">
															<div class="fileupload-new thumbnail" style="width: 70%; height: 130px;"><img src="../images/profile-img/<?php echo $fet['user_img']; ?>" alt="Profile Image" /></div>
															<div class="fileupload-preview fileupload-exists thumbnail" style="width: 70%; height: 130px;"></div>
															<div>
																<span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="update_profile_img" value="<?php echo $fet['user_img']; ?>" /></span>
															</div>

															<small>For best results, use an image at least 128px by 128px in .jpg format</small>

														</div>
													</div>
												</div>

												<button type="submit" name="update_user" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>

								</div>


								<div class="tab-pane fade" id="password" role="tabpanel">
									<?php
										$pass = $row['password']; 

										if(isset($_POST['update_pass'])){
											$current_password = md5($_POST['current_password']);
											$update_password = $_POST['update_password'];
											$update_repassword = md5($_POST['update_repassword']);

											$update = mysqli_query($DB_CONNECT,"UPDATE `users` SET `password`='$update_repassword' WHERE `user_ID`='$userID' ");

											
										}
									?>

									<?php
										if (isset($_POST['update_pass'])) {
											$current_password = md5($_POST['current_password']);
											$update_password = md5($_POST['update_password']);
											$update_repassword = md5($_POST['update_repassword']);

											$check_pass = mysqli_query($DB_CONNECT,"SELECT * FROM users WHERE user_ID='".$_SESSION['USER_ID']."'");
											$p_row = mysqli_fetch_array($check_pass);

											if($current_password == $p_row['password']){
												if(strlen($update_password < 6)){
												if($update_repassword == $update_password){
													if($n_query = mysql_query("UPDATE `users` SET `password`='$update_password' WHERE user_ID='".$_SESSION['USER_ID']."'")){
													echo "<div class='col-md-12 alert alert-success'><center><span class=' icon-ok'></span> The Password was successfully Updated!!! <font color='red'>Click <a href='logout.php'>LOGOUT</a> to verify you new password</font></center></div>";
													}
													else{
													echo "<div class='col-md-12 alert alert-success'><center><span class=' icon-ok'></span> The Password has failed to bee  Updated!!!</center></div>";
													}
												}
												else{
													echo "<div class='col-md-12 alert alert-danger'><center><span class=' icon-remove'></span> The Re-Typed password is not equal to the New Password inserted!!!</center></div>";
												}
												}
												else {
												echo "<div class='col-md-12 alert alert-info'><center><span class=' icon-remove'></span> The New Password must be greater than 6 Characters!!!</center></div>";
												}
											}
											else {
												echo "<div class='col-md-12 alert alert-warning'><center><span class=' icon-remove'></span> The Old Password Inserted is Incorrect!!!</center></div>";
											}
										}
									?>
									
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">Password</h5>

											<form method="post" action="">
												
												<div class="form-group">
													<label>Current password</label>
													<input type="password" class="form-control" name="current_password">
													<small><a href="#">Forgot your password?</a></small>
												</div>
												<div class="form-group">
													<label>New password</label>
													<input type="password" class="form-control" name="update_password">
												</div>
												<div class="form-group">
													<label>Verify password</label>
													<input type="password" class="form-control" name="update_repassword">
												</div>
												<button type="submit" name="update_pass" class="btn btn-primary">Save changes</button>
											</form>

										</div>
									</div>
                                </div>
                                


                                <div class="tab-pane fade" id="company" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title"><strong>Company Details</strong></h5>
											<?php
												$user_ID = $row['user_ID'];
												$getData = mysqli_query($DB_CONNECT,"SELECT * FROM company_tb WHERE user_ID='$user_ID' ");
												
												$fetData = mysqli_fetch_array($getData);
												$companyID = $fetData['company_ID'];


												if (isset($_POST['update_company_details'])) {
                                                    $update_company_name = $_POST['update_company_name'];
                                                    $update_category = $_POST['update_category'];
                                                    $update_phone = $_POST['update_phone'];
                                                    $update_address = $_POST['update_address'];
                                                    $update_logo = $_FILES['update_logo']['name'];
                                                    $update_location = '../images/logos/'.basename($_FILES['update_logo']['name']);
                                                    
                                                    $sqlUpdate = mysqli_query($DB_CONNECT,"UPDATE `company_tb` SET `company_name`='$update_company_name',`category`='$update_category',`phone_number`='$update_phone',`address`='$update_address',`logo`='$update_logo' WHERE company_ID='$companyID' ");

                                                    if(move_uploaded_file($_FILES['update_logo']['tmp_name'], $update_location)){
                                                        if ($sqlUpdate) {
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
                                                            <label>Company Name</label>
                                                            <input type="text" class="form-control" value="<?php echo $fetData['company_name']; ?>" name="update_company_name">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Category</label>
                                                            <select name="update_category" class="form-control">
                                                                <option value="<?php echo $fetData['category']; ?>"  selected><?php echo $fetData['category']; ?></option>
																<option disabled></option>
                                                                <option>Private</option>
                                                                <option>Public</option>
                                                                <option>Co-operative</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Business Phone Number</label>
                                                            <input type="text" name="update_phone" class="form-control"  value="<?php echo $fetData['phone_number']; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" name="update_address" class="form-control" value="<?php echo $fetData['address']; ?>">
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="text-center">
                                                            <div class="form-group">
                                                                <label><strong>Company's Logo</strong></label>
                                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                                    <div class="fileupload-new thumbnail" style="width: 60%; height: 120px;"><img src="../images/logos/<?php echo $fetData['logo']; ?>" alt="" /></div>
                                                                    <div class="fileupload-preview fileupload-exists thumbnail" style="width: 60%; height: 120px;"></div>
                                                                    <div>
                                                                        <span class="btn btn-file btn-primary"><span class="fileupload-new">Select logo</span><span class="fileupload-exists">Change</span><input type="file" value="<?php echo $fetData['logo']; ?>" name="update_logo" /></span>

                                                                        <!-- <button type="submit" class="btn btn-success fileupload-exists">Save</button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <small>For best results, use an image at least 128px by 128px in .jpg format</small>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button type="submit" name="update_company_details" class="btn btn-primary">Save changes</button>
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