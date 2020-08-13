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

					<li class="sidebar-item active">
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
							<h3><strong>Invoice</strong></h3>
						</div>

						<div class="col-auto ml-auto text-right mt-n1">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
									<li class="breadcrumb-item"><a href="#">Smart-Market</a></li>
									<li class="breadcrumb-item"><a href="#">Dashboards</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
                                                <h5 class="modal-title">Centered modal</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form>
                                                <div class="modal-body m-3">
                                                
                                                    <div class="form-group">
                                                        <label class="form-label">Email address</label>
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label">Textarea</label>
                                                        <textarea class="form-control" placeholder="Textarea" rows="1"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-label w-100">File input</label>
                                                        <input type="file">
                                                        <small class="form-text text-muted">Example block-level help text here.</small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Check me out</span>
                                                        </label>
                                                    </div>
                                                
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save Product</button>
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
											<th style="width:40%;">Name</th>
											<th style="width:25%">Phone Number</th>
											<th class="d-none d-md-table-cell" style="width:25%">Date of Birth</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Vanessa Tucker</td>
											<td>864-348-0485</td>
											<td class="d-none d-md-table-cell">June 21, 1961</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>William Harris</td>
											<td>914-939-2458</td>
											<td class="d-none d-md-table-cell">May 15, 1948</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Sharon Lessman</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
                                        </tr>
                                        <tr>
											<td>Sharon Lessman</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
                                        </tr>
                                        <tr>
											<td>Sharon Lessman</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
                                        </tr>
                                        <tr>
											<td>Sharon Lessman</td>
											<td>704-993-5435</td>
											<td class="d-none d-md-table-cell">September 14, 1965</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Christina Mason</td>
											<td>765-382-8195</td>
											<td class="d-none d-md-table-cell">April 2, 1971</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
										<tr>
											<td>Robin Schneiders</td>
											<td>202-672-1407</td>
											<td class="d-none d-md-table-cell">October 12, 1966</td>
											<td class="table-action">
                                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                                <a href="#"><i class="align-middle" data-feather="book-open"></i></a>
												<a href="#"><i class="align-middle" data-feather="trash"></i></a>
											</td>
										</tr>
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

</body>

</html>