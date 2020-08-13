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

					<h1 class="h3 mb-3"><a href="pages-product.php" class="btn btn-outline-primary"><i class='align-middle' data-feather='arrow-left'></i> Back</a> | Product View</h1>

					<div class="row">
						<div class="col-md-6 col-xl-7">
							<div class="card mb-3">
								<div class="card-header">
									<h5 class="card-title mb-0">Product Details</h5>
								</div>


                                <?php
                                    $id=$_REQUEST['id'];
                                    $sel=mysqli_query($DB_CONNECT,"SELECT * FROM product_tb WHERE ID='$id'");

                                    $row=mysqli_fetch_array($sel);
                                ?>


								<div class="card-body text-center">
									<img src="img/product-img/<?php echo $row['image1'];  ?>" alt="" class="img-fluid rounded-circle mb-2" width="128" height="128" />

                                    <img src="img/product-img/<?php echo $row['image2'];  ?>" alt="" class="img-fluid rounded-circle mb-2" width="128" height="128" />

                                    <img src="img/product-img/<?php echo $row['image3'];  ?>" alt="" class="img-fluid rounded-circle mb-2" width="128" height="128" />

                                    <img src="img/product-img/<?php echo $row['image4'];  ?>" alt="" class="img-fluid rounded-circle mb-2" width="128" height="128" />

									<h1 class="card-title mb-3"><?php echo $row['pro_name'];  ?></h1>
									<div class="text-muted mb-2"><?php echo "".$row['pro_price']." FRW";  ?></div>

									<div>
										<a class="btn btn-primary btn-sm" href="#">Views: 2000</a>
										<a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span> Message</a>
									</div>
								</div>
								<hr class="my-0" />
								<div class="card-body">
                                    <?php 
                                        $company_ID = $row['company_ID'];
                                        $sell = mysqli_query($DB_CONNECT,"SELECT * FROM company_tb WHERE company_ID='$company_ID' ");
                                        $fet = mysqli_fetch_array($sell);
                                    ?>
                                    <h5 class="h6 card-title"><b>Shop Name:</b> <?php echo $fet['company_name'];  ?></h5>
									<h5 class="h6 card-title"><b>Brand Name:</b> <?php echo $row['pro_brandName'];  ?></h5>
                                    <h5 class="h6 card-title"><b>Quantity:</b> <?php echo $row['quantity'];  ?></h5>
                                    <h5 class="h6 card-title"><b>Express Number:</b> <?php echo $row['express_number'];  ?></h5>
                                    <h5 class="h6 card-title"><b><u>Discription:</u></b> <br><br><?php echo $row['pro_specification'];  ?></h5>

								</div>
																
							</div>
						</div>

						<div class="col-md-4 col-xl-5">
							<div class="card">
								<div class="card-header">

									<h5 class="card-title mb-0">Feedback</h5>
								</div>
								<div class="card-body h-100">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">

                                            <div class="card-header" id="headingOne">
                                                <h5 class="card-title my-2">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">                    Accordion</a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="card-title my-2">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">                    Another one</a>
                                                </h5>
                                            </div>

                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="card-title my-2">
                                                    <a href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">                    Something else</a>
                                                </h5>
                                            </div>

                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                                                    Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch
                                                    et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                                    craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									

									<hr />
									<a href="#" class="btn btn-primary btn-block">Load more</a>
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

</body>

</html>