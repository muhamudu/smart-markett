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

					<li class="sidebar-item active">
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
							<h3><a href="pages-product.php" class="btn btn-outline-primary"><i class='align-middle' data-feather='arrow-left'></i> Back</a> |<strong>Update Product</strong></h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">Smart-Market</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Update Products</li>
								</ol>
							</nav>
						</div>
                    </div>

                    <div class="row">
						<div class="col-6">
							<div class="card">
								
                                <div class="card-body">
                                    <?php
                                        $id=$_REQUEST['id'];
                                        $sel=mysqli_query($DB_CONNECT,"SELECT * FROM product_tb WHERE ID='$id'");

                                        $row=mysqli_fetch_array($sel);
                                    ?>

									<?php

										if(isset($_POST['update_product'])){
											$data_id = $_POST['data_id'];
											
											$update_pro_name = $_POST['update_pro_name'];
											$update_pro_brandname = $_POST['update_pro_brandname'];
											$update_pro_price = $_POST['update_pro_price'];
											$update_pro_option = $_POST['update_pro_option'];
											$update_pro_category = $_POST['update_pro_category'];
											$update_pro_subcategory = $_POST['update_pro_subcategory'];
											$update_pro_specificarion = $_POST['update_pro_specificarion'];

											
											$insertQuery = mysqli_query($DB_CONNECT,"UPDATE `product_tb` SET `pro_name`='$update_pro_name',`pro_brandName`='$update_pro_brandname',`pro_price`='$update_pro_price',`pro_option`='$update_pro_option',`category_ID`='$update_pro_category',`subCategory_ID`='$update_pro_subcategory',`pro_specification`='$update_pro_specificarion' WHERE `ID`='$data_id' ");


											if($insertQuery){
												echo '
												<div class="alert alert-success alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
			
													<div class="alert-icon">
														<i class="far fa-fw fa-bell"></i>
													</div>
			
													<div class="alert-message">
														<strong>Updating in Database</strong>

														<div class="spinner-border spinner-border-sm text-success mr-2" role="status">
															<span class="sr-only">Loading...</span>
														</div>
													</div>
												</div>
												';
												echo "<meta http-equiv='refresh' content='3;url=edit-product.php?id=".$id."'>";
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
															<strong>Upadate Failed!</strong> Please, Contact Us to Register your company First!!
														</div>
													</div>'.mysql_error();
											}
										}
									?>
                                    <form method="post" action"">
										<input type="hidden" name="data_id" class="form-control" value="<?php echo $row[0]; ?>">

										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Express Number</label>
												<input type="text" class="form-control" name="update_pro_expressno" value="<?php echo $row['express_number']; ?>" disabled>
											</div>
											<div class="form-group col-md-6">
												<label>Product Name</label>
												<input type="text" class="form-control" name="update_pro_name" value="<?php echo $row['pro_name']; ?>">
											</div>
                                            <div class="form-group col-md-6">
												<label>Brand Name</label>
												<input type="text" class="form-control" name="update_pro_brandname" value="<?php echo $row['pro_brandName']; ?>">
											</div>
											<div class="form-group col-md-3">
												<label>Price</label>
												<input type="number" class="form-control" name="update_pro_price" value="<?php echo $row['pro_price']; ?>">
											</div>
                                            <div class="form-group col-md-3">
												<label for="inputState">Status</label>
												<select id="inputState" name="update_pro_option" class="form-control">
                                                <option selected><?php echo $row['pro_option']; ?></option>
                                                <option>In Stock</option>
                                                <option>Out of Stock</option>
                                            </select>
											</div>
											
											
											<div class="form-group col-md-6">
												<label for="inputState">Category</label>
												<?php
													$category_ID = $row['category_ID'];

													$selQuery = mysqli_query($DB_CONNECT,"SELECT * FROM category_tb WHERE category_ID='$category_ID' ");

													$selQueryy = mysqli_query($DB_CONNECT,"SELECT * FROM category_tb WHERE status='Active' ");

													$fett = mysqli_fetch_assoc($selQuery);

													$rowCount = mysqli_num_rows($selQueryy);
												?>

												<select id="category" name="update_pro_category" class="form-control">
													<option value="<?php echo $fett['category_ID']; ?>" selected readonly><?php echo $fett['category_name']; ?></option>

													<option disabled><hr></option>
												
												<?php
													if ($rowCount > 0) {
														while ($fet = mysqli_fetch_assoc($selQueryy)) {
															echo "<option value='".$fet['category_ID']."'>".$fet['category_name']."</option>";
														}
													}
													else {
														echo "<option value=''>Category Not Available</option>";
													}
													
												?>
													
													
												</select>
											</div>

											<div class="form-group col-md-6">
												<label>Sub-Category</label>
												
												<?php
													$subCategory_ID = $row['subCategory_ID'];
													// $category_IDD = $row['category_ID']

													$subQuery = mysqli_query($DB_CONNECT,"SELECT * FROM sub_category_tb WHERE subCategory_ID='$subCategory_ID' ");

													$subQueryy = mysqli_query($DB_CONNECT,"SELECT * FROM `sub_category_tb` WHERE `category_ID`='$category_ID' AND `status`='Active' ");

													$fett = mysqli_fetch_assoc($subQuery);

													$rowCount = mysqli_num_rows($subQueryy);
												?>

												<select id="subcategory" name="update_pro_subcategory" class="form-control">
													<option value="<?php echo $fett['subCategory_ID']; ?>" selected readonly><?php echo $fett['sub_category_name']; ?></option>

													<option disabled><hr></option>
												
												<?php
													if ($rowCount > 0) {
														while ($fet = mysqli_fetch_assoc($selQueryy)) {
															echo "<option value='".$fet['category_ID']."'>".$fet['category_name']."</option>";
														}
													}
													else {
														echo "<option value=''>Category Not Available</option>";
													}
													
												?>					
												</select>
											</div>

										</div>
										<div class="form-group">
											<label>Company Name</label>

											<?php  
														
												$company_Name = $row['company_ID'];
												$user_ID = $row['user_ID'];

												$sel11=mysqli_query($DB_CONNECT,"SELECT * FROM company_tb WHERE company_ID ='$company_Name' ");

												$row11=mysqli_fetch_array($sel11);

																								
											?>

											<input type="text" disabled value="<?php echo $row11['company_name']; ?>" class="form-control">

											
										</div>
										
										<div class="form-group">
											<label for="inputAddress">Product Description</label>
											
                                            <textarea id="demo-summernote" class="form-control" name="update_pro_specificarion" rows="5"><?php echo $row['pro_specification']; ?></textarea>
										</div>
																				
										<button type="submit" name="update_product" class="btn btn-primary">Update</button>
									</form>

								</div>
							</div>
						</div>


                        <div class="col-6">
							<div class="card">
								
                                <div class="card-body">
                                    <?php
                                        if(isset($_POST['upload_img1'])){
											$img_id = $_POST['img_id'];
											$image1 = $_FILES['image1']['name'];
											$location1 = 'img/product-img/'.basename($_FILES['image1']['name']);

											$post_query = mysqli_query($DB_CONNECT,"UPDATE `product_tb` SET `image1`='$image1' WHERE `ID`='$img_id' ");

											if(move_uploaded_file($_FILES['image1']['tmp_name'], $location1)){
												echo '
												<div class="alert alert-success alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
			
													<div class="alert-icon">
														<i class="far fa-fw fa-bell"></i>
													</div>
			
													<div class="alert-message">
														<strong>Image Uploading</strong>

														<div class="spinner-border spinner-border-sm text-success mr-2" role="status">
															<span class="sr-only">Loading...</span>
														</div>
													</div>
												</div>
												';
												echo "<meta http-equiv='refresh' content='3;url=edit-product.php?id=".$id."'>";
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
														<strong>Error!</strong> Please, Check the size of your Image!!
													</div>
												</div>
												'.mysql_error();
											}
										}
										
										if(isset($_POST['upload_img2'])){
											$img_id = $_POST['img_id'];
											$image2 = $_FILES['image2']['name'];
											$location2 = 'img/product-img/'.basename($_FILES['image2']['name']);

											$post_query = mysqli_query($DB_CONNECT,"UPDATE `product_tb` SET `image2`='$image2' WHERE `ID`='$img_id' ");

											if(move_uploaded_file($_FILES['image2']['tmp_name'], $location2)){
												echo '
												<div class="alert alert-success alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
			
													<div class="alert-icon">
														<i class="far fa-fw fa-bell"></i>
													</div>
			
													<div class="alert-message">
														<strong>Image Uploading</strong>

														<div class="spinner-border spinner-border-sm text-success mr-2" role="status">
															<span class="sr-only">Loading...</span>
														</div>
													</div>
												</div>
												';
												echo "<meta http-equiv='refresh' content='3;url=edit-product.php?id=".$id."'>";
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
														<strong>Error!</strong> Please, Check the size of your Image!!
													</div>
												</div>
												'.mysql_error();
											}
										}
										
										if(isset($_POST['upload_img3'])){
											$img_id = $_POST['img_id'];
											$image3 = $_FILES['image3']['name'];
											$location3 = 'img/product-img/'.basename($_FILES['image3']['name']);

											$post_query = mysqli_query($DB_CONNECT,"UPDATE `product_tb` SET `image3`='$image3' WHERE `ID`='$img_id' ");

											if(move_uploaded_file($_FILES['image3']['tmp_name'], $location3)){
												echo '
												<div class="alert alert-success alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
			
													<div class="alert-icon">
														<i class="far fa-fw fa-bell"></i>
													</div>
			
													<div class="alert-message">
														<strong>Image Uploading</strong>

														<div class="spinner-border spinner-border-sm text-success mr-2" role="status">
															<span class="sr-only">Loading...</span>
														</div>
													</div>
												</div>
												';
												echo "<meta http-equiv='refresh' content='3;url=edit-product.php?id=".$id."'>";
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
														<strong>Error!</strong> Please, Check the size of your Image!!
													</div>
												</div>
												'.mysql_error();
											}
										}
										
										if(isset($_POST['upload_img4'])){
											$img_id = $_POST['img_id'];
											$image4 = $_FILES['image4']['name'];
											$location4 = 'img/product-img/'.basename($_FILES['image4']['name']);

											$post_query = mysqli_query($DB_CONNECT,"UPDATE `product_tb` SET `image4`='$image4' WHERE `ID`='$img_id' ");

											if(move_uploaded_file($_FILES['image4']['tmp_name'], $location4)){
												echo '
												<div class="alert alert-success alert-dismissible" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
			
													<div class="alert-icon">
														<i class="far fa-fw fa-bell"></i>
													</div>
			
													<div class="alert-message">
														<strong>Image Uploading</strong>

														<div class="spinner-border spinner-border-sm text-success mr-2" role="status">
															<span class="sr-only">Loading...</span>
														</div>
													</div>
												</div>
												';
												echo "<meta http-equiv='refresh' content='3;url=edit-product.php?id=".$id."'>";
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
														<strong>Error!</strong> Please, Check the size of your Image!!
													</div>
												</div>
												'.mysql_error();
											}
                                        }

                                    ?>
									<div class="row">
										<form method="post" action="" enctype="multipart/form-data" class="col-6">
											<input type="hidden" name="img_id" class="form-control" value="<?php echo $row[0]; ?>">
											<div class="form-group">
												<label>Product Image 1</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 60%; height: 120px;"><img src="img/product-img/<?php echo $row['image1']; ?>" alt="" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="width: 60%; height: 120px;"></div>
													<div>
														<span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image1" value="img/product-img/<?php echo $row['image1']; ?>" /></span>
														<button type="submit" name="upload_img1" class="btn btn-success fileupload-exists">Save</button>
													</div>
												</div>
											</div>
										</form>

										<form method="post" action="" enctype="multipart/form-data" class="col-6">
											<input type="hidden" name="img_id" class="form-control" value="<?php echo $row[0]; ?>">
											<div class="form-group">
												<label>Product Image 2</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 60%; height: 120px;"><img src="img/product-img/<?php echo $row['image2']; ?>" alt="" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="width: 60%; height: 120px;"></div>
													<div>
														<span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image2" value="img/product-img/<?php echo $row['image2']; ?>" /></span>
														<button type="submit" name="upload_img2" class="btn btn-success fileupload-exists">Save</button>
													</div>
												</div>
											</div>
										</form>

										<form method="post" action="" enctype="multipart/form-data" class="col-6">
											<input type="hidden" name="img_id" class="form-control" value="<?php echo $row[0]; ?>">
											<div class="form-group">
												<label>Product Image 2</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 60%; height: 120px;"><img src="img/product-img/<?php echo $row['image3']; ?>" alt="" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="width: 60%; height: 120px;"></div>
													<div>
														<span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image3" value="img/product-img/<?php echo $row['image3']; ?>" /></span>
														<button type="submit" name="upload_img3" class="btn btn-success fileupload-exists">Save</button>
													</div>
												</div>
											</div>
										</form>

										<form method="post" action="" enctype="multipart/form-data" class="col-6">
											<input type="hidden" name="img_id" class="form-control" value="<?php echo $row[0]; ?>">
											<div class="form-group">
												<label>Product Image 2</label>
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 60%; height: 120px;"><img src="img/product-img/<?php echo $row['image4']; ?>" alt="" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="width: 60%; height: 120px;"></div>
													<div>
														<span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image4" value="img/product-img/<?php echo $row['image4']; ?>" /></span>
														<button type="submit" name="upload_img4" class="btn btn-success fileupload-exists">Save</button>
													</div>
												</div>
											</div>
										</form>
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
	<!--Summernote [ OPTIONAL ]-->
	<script src="./js/summernote.min.js"></script>

</body>

</html>