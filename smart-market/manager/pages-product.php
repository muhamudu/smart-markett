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
						<a class="sidebar-link" href="category.php">
						<i class="align-middle" data-feather="list"></i> <span class="align-middle">Category</span>
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
						Users & Setting
					</li>
					

					<li class="sidebar-item">
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
							<h3><strong>Products</strong></h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">Smart-Market</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Products</li>
								</ol>
							</nav>
						</div>
                    </div>
                    

                    <div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
                                    <button type="button" class="btn btn-square btn-success" data-toggle="modal" data-target="#centeredModalPrimary">
                                        <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add Product</span>
                                    </button>
                                </div>

                                <!-- BEGIN Add Product Modal -->
                                <div class="modal fade" id="centeredModalPrimary" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Register New Product</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="product-save.php" method="post">
												<input type="hidden" name="userID" value="<?php echo $row['adminID']; ?>">
												
												
                                                <div class="modal-body m-2 form-row">
													<div class="form-group col-md-6">
														<label class="form-label">Generate Express Number</label>
														<select class="custom-select mb-3 countrcode" required>
															<option disabled selected>Select Country Code</option>
															<option value="250">250</option>
														</select>
													</div>

													<div class="form-group col-md-6">
                                                        <label class="form-label">Express Number</label>
                                                        <input type="text" class="form-control" id="express_id" name="expressNo" readonly>
                                                    </div>

													<div class="form-group col-md-6">
														<label for="inputState">Category</label>
														<?php
															$selQuery = mysqli_query($DB_CONNECT,"SELECT * FROM category_tb WHERE status='Active' ");
															$rowCount = mysqli_num_rows($selQuery);
														?>

														<select id="category" name="category" class="form-control">
															<option disabled selected>Select Category</option>
														
														<?php
															if ($rowCount > 0) {
																while ($fet = mysqli_fetch_assoc($selQuery)) {
																	echo "<option value='".$fet['category_ID']."'>".$fet['category_name']."</option>";
																}
															}
															else {
																echo "<option value=''>Catrgory Not Available</option>";
															}
															
														?>
															
															
														</select>
													</div>

												<div class="form-group col-md-6">
													<label>Sub-Category</label>
													<select id="subcategory" name="sub_category" class="form-control">
														<option disabled selected>Select Category First</option>
																					
													</select>
												</div>

                                                	<div class="form-group col-md-6">
                                                        <label class="form-label">Product Name</label>
                                                        <input type="text" class="form-control" name="pro_name" placeholder="Product Name">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="form-label">Brand Name</label>
                                                        <input type="text" name="pro_brandName" class="form-control" placeholder="Brand Name">
                                                    </div>
                                                    

													

													<div class="form-group col-md-4">
                                                        <label class="form-label">Price</label>
                                                        <input type="number" name="price" class="form-control" placeholder="Price">
                                                    </div>

													<div class="form-group col-md-4">
                                                        <label class="form-label">Quantity</label>
                                                        <input type="number" min='1' name="quantity" class="form-control" >
                                                    </div>
                                                    

													<div class="form-group col-md-4">
														<label>Status</label>
														<select id="" name="status" class="form-control">
															<option>Active</option>
															<option>Disactive</option>
																						
														</select>
													</div>
													
													<div class="form-group col-md-12">
                                                        <label class="form-label">Description</label>
                                                        <textarea class="form-control" name="pro_specification" placeholder="Specification" rows="5"></textarea>
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="save_product" class="btn btn-primary">Save Product</button>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- END ADD PRODUCT MODAL -->
                                
								<div class="card-body">
                                <table class="table table-hover table-bordered" id="datatable">
									<thead>
										<tr>
											<th style="width:5%;">No</th>
											<th style="width:5%;">Images</th>
											<th style="width:25%">Product Name</th>
											<th style="width:25%">Brand Name</th>
											<th style="width:15%">Price</th>
											<th style="width:15%">Express No</th>
											<th class="d-none d-md-table-cell" style="width:25%">Time</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>

									<?php
										$query = mysqli_query($DB_CONNECT,"SELECT * FROM product_tb WHERE user_ID='$user_id' ORDER BY ID DESC" );
										$count = 0;

										while($fetchQuery = mysqli_fetch_array($query))
										{
											$count++;
											echo "
											<tr>
											<td>$count</td>
											<td><img src='img/product-img/".$fetchQuery['image1']."' style='width: 80px; height:80px;'></td>
											<td>".$fetchQuery['pro_name']."</td>
											<td>".$fetchQuery['pro_brandName']."</td>
											<td>".$fetchQuery['pro_price']." FRW</td>
											<td>".$fetchQuery['express_number']."</td>
											<td class='d-none d-md-table-cell'>".$fetchQuery['timezone']."</td>
											<td class='table-action'>
												<a href='edit-product.php?id=".$fetchQuery['ID']."'><i class='align-middle' data-feather='edit-2'></i></a>

												<a href='delete-product.php?id=".$fetchQuery['ID']."'><i class='align-middle' data-feather='trash'></i></a>
											</td>
											</tr> ";
										}
									?>
										
									</tbody>
								</table>
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