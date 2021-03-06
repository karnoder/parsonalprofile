<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Mentoring - Invoice Report Page</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<!-- Header -->
		<div class="header">

			<!-- Logo -->
			<div class="header-left">
				<a href="index.php" class="logo">
					<img src="assets/img/logo-white.png" alt="Logo">
				</a>
				<a href="index.php" class="logo logo-small">
					<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
				</a>
			</div>
			<!-- /Logo -->

			<a href="javascript:void(0);" id="toggle_btn"> <i class="fas fa-bars"></i>
			</a>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="feather-search"></i>
					</button>
				</form>
			</div>

			<!-- Mobile Menu Toggle -->
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i>
			</a>
			<!-- /Mobile Menu Toggle -->

			<!-- Header Right Menu -->
			<ul class="nav user-menu">
				<!-- Flag -->
				<li class="nav-item dropdown has-arrow flag-nav mr-2">
					<a class="nav-link dropdown-toggle align-items-center" data-toggle="dropdown" href="#"
						role="button">
						<img src="assets/img/flags/us-1.png" alt="" width="24" height="16" class="lang-flag mr-1">
						English
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/us.png" alt="" height="16"> English
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/fr.png" alt="" height="16"> French
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/es.png" alt="" height="16"> Spanish
						</a>
						<a href="javascript:void(0);" class="dropdown-item">
							<img src="assets/img/flags/de.png" alt="" height="16"> German
						</a>
					</div>
				</li>
				<!-- /Flag -->

				<!-- Fullscreen -->
				<li class="nav-item dropdown">
					<a href="#" id="btnFullscreen" class=" ">
						<i class="feather-maximize"></i>
					</a>
				</li>
				<!-- /Fullscreen -->

				<!-- Notifications -->
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<i class="feather-bell"></i> <span class="badge badge-pill">3</span>
					</a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header">
							<span class="notification-title">Notifications</span>
							<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
						</div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Jonathan Doe</span>
													Schedule <span class="noti-title">his appointment</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user1.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Julie Pennington</span>
													has booked her appointment to <span class="noti-title">Ruby
														Perrin</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user2.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tyrone Roberts</span>
													sent a amount of $210 for his <span
														class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media">
											<span class="avatar avatar-sm">
												<img class="avatar-img rounded-circle" alt="User Image"
													src="assets/img/user/user4.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Patricia Manzi</span>
													send a message <span class="noti-title"> to his Mentee</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span>
												</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="#">View all Notifications</a>
						</div>
					</div>
				</li>
				<!-- /Notifications -->

				<li class="nav-item dropdown has-arrow main-drop ml-3">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img"><img src="assets/img/profiles/avatar-06.jpg" alt=""> Admin
							<span class="status online"></span></span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.php"><i class="feather-user"></i> My Profile</a>
						<a class="dropdown-item" href="login.php"><i class="feather-power"></i> Logout</a>
					</div>
				</li>
			</ul>
			<!-- /Header Right Menu -->

		</div>
		<!-- /Header -->

		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title"> <span>Main</span>
						</li>
						<li>
							<a href="index.php"><i class="feather-home"></i><span>Dashboard</span></a>
						</li>
						<li>
							<a href="mentor.php"><i class="feather-user"></i><span>Mentor</span></a>
						</li>
						<li>
							<a href="mentee.php"><i class="feather-users"></i><span>Mentee</span></a>
						</li>
						<li>
							<a href="booking-list.php"><i class="feather-list"></i><span>Booking List</span></a>
						</li>
						<li>
							<a href="categories.php"><i class="feather-disc"></i><span>Categories</span></a>
						</li>
						<li>
							<a href="transactions-list.php"><i
									class="feather-dollar-sign"></i><span>Transactions</span></a>
						</li>
						<li>
							<a href="settings.php"><i class="feather-settings"></i><span>Settings</span></a>
						</li>
						<li class="submenu active">
							<a href="#"><i class="feather-book"></i><span> Reports</span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoice-report.php" class="active">Invoice Reports</a></li>
							</ul>
						</li>
						<li class="menu-title">
							<span>Pages</span>
						</li>
						<li>
							<a href="profile.php"><i class="feather-user-plus"></i><span>My Profile</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-book-open"></i><span>Blog</span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="blog.php"> Blog </a></li>
								<li><a href="blog-details.php"> Blog Details </a></li>
								<li><a href="add-blog.php"> Add Blog </a></li>
								<li><a href="edit-blog.php"> Edit Blog </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-lock"></i><span> Authentication </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="login.php"> Login </a></li>
								<li><a href="register.php"> Register </a></li>
								<li><a href="forgot-password.php"> Forgot Password </a></li>
								<li><a href="lock-screen.php"> Lock Screen </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-alert-octagon"></i><span> Error Pages </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="error-404.php">404 Error </a></li>
								<li><a href="error-500.php">500 Error </a></li>
							</ul>
						</li>
						<li>
							<a href="blank-page.php"><i class="feather-file"></i><span>Blank Page</span></a>
						</li>
						<li class="menu-title">
							<span>UI Interface</span>
						</li>
						<li>
							<a href="components.php"><i class="feather-layers"></i><span>Components</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-sidebar"></i><span> Forms </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="form-basic-inputs.php">Basic Inputs </a></li>
								<li><a href="form-input-groups.php">Input Groups </a></li>
								<li><a href="form-horizontal.php">Horizontal Form </a></li>
								<li><a href="form-vertical.php"> Vertical Form </a></li>
								<li><a href="form-mask.php"> Form Mask </a></li>
								<li><a href="form-validation.php"> Form Validation </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-layout"></i><span> Tables </span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="tables-basic.php">Basic Tables </a></li>
								<li><a href="data-tables.php">Data Table </a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="javascript:void(0);"><i class="feather-align-left"></i><span>Multi Level</span>
								<span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li class="submenu">
									<a href="javascript:void(0);"> <span>Level 1</span> <span
											class="menu-arrow"></span></a>
									<ul style="display: none;">
										<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"> <span> Level 2</span> <span
													class="menu-arrow"></span></a>
											<ul style="display: none;">
												<li><a href="javascript:void(0);">Level 3</a></li>
												<li><a href="javascript:void(0);">Level 3</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);"> <span>Level 1</span></a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->

		<!-- Page Wrapper -->
		<div class="page-wrapper">
			<div class="content container-fluid">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<h3 class="page-title">Invoice Report</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Invoice Report</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="datatable table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Invoice Number</th>
												<th>Mentee ID</th>
												<th>Mentee Name</th>
												<th>Total Amount</th>
												<th>Created Date</th>
												<th class="text-center">Status</th>
												<th class="text-center">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="invoice.php">#IN0001</a></td>
												<td>#01</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user.jpg" alt="User Image"></a>
														<a href="profile.php">Jonathan Doe </a>
													</h2>
												</td>
												<td>$100.00</td>
												<td>9 Sep 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0002</a></td>
												<td>#02</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user1.jpg" alt="User Image"></a>
														<a href="profile.php">Julie Pennington </a>
													</h2>
												</td>
												<td>$200.00</td>
												<td>29 Oct 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0003</a></td>
												<td>#03</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user2.jpg" alt="User Image"></a>
														<a href="profile.php">Tyrone Roberts</a>
													</h2>
												</td>
												<td>$250.00</td>
												<td>25 Sep 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0004</a></td>
												<td>#04</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user3.jpg" alt="User Image"></a>
														<a href="profile.php">Allen Davis </a>
													</h2>
												</td>
												<td>$150.00</td>
												<td>9 Oct 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0005</a></td>
												<td>#05</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user4.jpg" alt="User Image"></a>
														<a href="profile.php">Patricia Manzi </a>
													</h2>
												</td>
												<td>$350.00</td>
												<td>19 Nov 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0006</a></td>
												<td>#06</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user5.jpg" alt="User Image"></a>
														<a href="profile.php">Elsie Gilley</a>
													</h2>
												</td>
												<td>$300.00</td>
												<td>12 Oct 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0007</a></td>
												<td>#07</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user11.jpg" alt="User Image"></a>
														<a href="profile.php"> Joan Gardner</a>
													</h2>
												</td>
												<td>$250.00</td>
												<td>25 Oct 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0008</a></td>
												<td>#08</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user12.jpg" alt="User Image"></a>
														<a href="profile.php"> Daniel Griffing</a>
													</h2>
												</td>
												<td>$150.00</td>
												<td>30 Oct 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0009</a></td>
												<td>#09</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user8.jpg" alt="User Image"></a>
														<a href="profile.php">Walter Roberson</a>
													</h2>
												</td>
												<td>$100.00</td>
												<td>5 Nov 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td><a href="invoice.php">#IN0010</a></td>
												<td>#10</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user9.jpg" alt="User Image"></a>
														<a href="profile.php">Robert Rhodes </a>
													</h2>
												</td>
												<td>$120.00</td>
												<td>7 Nov 2019</td>
												<td class="text-center">
													<span class="badge badge-pill bg-success inv-badge">Paid</span>
												</td>
												<td class="text-right">
													<div class="actions">

														<a data-toggle="modal" href="#edit_invoice_report"
															class="btn btn-sm bg-success-light mr-2">
															<i class="fas fa-pencil-alt"></i> Edit
														</a>
														<a class="btn btn-sm bg-danger-light" data-toggle="modal"
															href="#delete_modal">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- Edit Details Modal -->
	<div class="modal fade" id="edit_invoice_report" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Invoice Report</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="row form-row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Invoice Number</label>
									<input type="text" class="form-control" value="#INV-0001">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Mentee ID</label>
									<input type="text" class="form-control" value="	#01">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Mentee Name</label>
									<input type="text" class="form-control" value="Jonathan Doe">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Mentee Image</label>
									<input type="file" class="form-control">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Total Amount</label>
									<input type="text" class="form-control" value="$200.00">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Created Date</label>
									<input type="text" class="form-control" value="29th Oct 2019">
								</div>
							</div>

						</div>
						<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Details Modal -->

	<!-- Delete Modal -->
	<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<!--	<div class="modal-header">
						<h5 class="modal-title">Delete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>-->
				<div class="modal-body">
					<div class="form-content p-2">
						<h4 class="modal-title">Delete</h4>
						<p class="mb-4">Are you sure want to delete?</p>
						<button type="button" class="btn btn-primary">Delete </button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Delete Modal -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>