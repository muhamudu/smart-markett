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
						<a class="sidebar-link" href="category.php">
						<i class="align-middle" data-feather="list"></i> <span class="align-middle">Category</span>
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
							<h3><strong>Categories</strong></h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">Smart-Market</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Categories</li>
								</ol>
							</nav>
						</div>
                    </div>

					<div class="row">
						<div class="col-md-4 col-xl-3">

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Category Settings</h5>
								</div>

								<div class="list-group list-group-flush" role="tablist">

                                    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#category" role="tab">Category List</a>
                                    
                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#addCategory" role="tab">Add Category</a>

                                    <a class="list-group-item list-group-item-action" data-toggle="list" href="#addSub-Category" role="tab">Add Sub-Category</a>
                                    
                                                                       
								</div>
							</div>
						</div>

						<div class="col-md-8 col-xl-9">
							<div class="tab-content">
								
								<div class="tab-pane fade show active" id="category" role="tabpanel">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title">List of Categories</h5>

											<?php include './category-list.php'; ?>

										</div>
                                    </div>
                                    
                                    <div class="card">
                                        <div class="card-body">
											<h5 class="card-title">List of Sub-Categories</h5>

											<table class="table table-hover table-bordered" id="datatable2">
                                                <thead>
                                                    <tr>
                                                        <th style="width:5%;">No</th>
                                                        <th>Category Name</th>
                                                        <th>Sub-Category Name</th>
                                                        <th style="width:15%">Status</th>
                                                        <th style="width:15%">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                <?php
                                                    

                                                    $query = mysqli_query($DB_CONNECT,"SELECT * FROM sub_category_tb ORDER BY category_ID ASC" );
                                                    $count = 0;

                                                    while($fetchQuery = mysqli_fetch_array($query))
                                                    {
                                                        $query1 = mysqli_query($DB_CONNECT,"SELECT * FROM category_tb WHERE category_ID='$fetchQuery[category_ID]' " );
                                                        $fet = mysqli_fetch_array($query1);

                                                        

                                                        $count++;
                                                        echo "
                                                        <tr>
                                                        <td>$count</td>
                                                        <td>".$fet['category_name']."</td>
                                                        <td>".$fetchQuery['sub_category_name']."</td>
                                                        <td>".$fetchQuery['status']."</td>

                                                        <td class='table-action'>
                                                            <a href='edit-category.php?id=".$fetchQuery['category_ID']."'><i class='align-middle' data-feather='edit-2'></i></a>

                                                            <a href='delete-category.php?id=".$fetchQuery['category_ID']."'><i class='align-middle' data-feather='trash'></i></a>
                                                        </td>
                                                        </tr> ";
                                                    }
                                                ?>
                                                    
                                                </tbody>
                                            </table>

										</div>
									</div>
                                </div>

                                <div class="tab-pane fade" id="addCategory" role="tabpanel">

                                    <div class="card">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">Add Category</h5>
                                        </div>

                                        <div class="card-body">
                                            <?php include './addCategory.php'; ?>
                                        </div>
                                    </div>

                                </div>


                                <div class="tab-pane fade" id="addSub-Category" role="tabpanel">

                                    <div class="card">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">Add Sub-Category</h5>
                                        </div>
                                        <div class="card-body">
                                            <?php include './addSubCategory.php'; ?>
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