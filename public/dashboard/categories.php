<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Mentoring - Categories Page</title>

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
						<li class="active">
							<a href="categories.php"><i class="feather-disc"></i><span>Categories</span></a>
						</li>
						<li>
							<a href="transactions-list.php"><i
									class="feather-dollar-sign"></i><span>Transactions</span></a>
						</li>
						<li>
							<a href="settings.php"><i class="feather-settings"></i><span>Settings</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="feather-book"></i><span> Reports</span> <span
									class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoice-report.php">Invoice Reports</a></li>
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
							<h3 class="page-title">Categories</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
								<li class="breadcrumb-item active">Categories</li>
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
												<th>#</th>
												<th>Category</th>
												<th>Date</th>
												<th class="text-center">Reviews</th>
												<th class="text-right">Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													1
												</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user.jpg" alt="User Image"></a>
														<a href="profile.php">Painting</a>
													</h2>
												</td>

												<td>3 Apr 2020</td>

												<td class="text-center">
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="far fa-star text-secondary"></i>
												</td>

												<td class="text-right">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" data-toggle="modal"
															href="#edit_modal">
															<i class="fas fa-pencil-alt"></i>
															Edit
														</a>
														<a data-toggle="modal" href="#delete_modal"
															class="btn btn-sm bg-danger-light">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													2
												</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user1.jpg" alt="User Image"></a>
														<a href="profile.php">Interior</a>
													</h2>
												</td>

												<td>3 Apr 2020 </td>

												<td class="text-center">
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="far fa-star text-secondary"></i>
												</td>

												<td class="text-right">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" data-toggle="modal"
															href="#edit_modal">
															<i class="fas fa-pencil-alt"></i>
															Edit
														</a>
														<a data-toggle="modal" href="#delete_modal"
															class="btn btn-sm bg-danger-light">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													3
												</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user2.jpg" alt="User Image"></a>
														<a href="profile.php">Electrical</a>
													</h2>
												</td>

												<td>3 Apr 2020 </td>

												<td class="text-center">
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="far fa-star text-secondary"></i>
												</td>

												<td class="text-right">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" data-toggle="modal"
															href="#edit_modal">
															<i class="fas fa-pencil-alt"></i>
															Edit
														</a>
														<a data-toggle="modal" href="#delete_modal"
															class="btn btn-sm bg-danger-light">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													4
												</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user3.jpg" alt="User Image"></a>
														<a href="profile.php">Construction</a>
													</h2>
												</td>

												<td>3 Apr 2020 </td>

												<td class="text-center">
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="far fa-star text-secondary"></i>
												</td>

												<td class="text-right">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" data-toggle="modal"
															href="#edit_modal">
															<i class="fas fa-pencil-alt"></i>
															Edit
														</a>
														<a data-toggle="modal" href="#delete_modal"
															class="btn btn-sm bg-danger-light">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													5
												</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user4.jpg" alt="User Image"></a>
														<a href="profile.php">Computer</a>
													</h2>
												</td>

												<td>3 Apr 2020 </td>

												<td class="text-center">
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="far fa-star text-secondary"></i>
												</td>

												<td class="text-right">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" data-toggle="modal"
															href="#edit_modal">
															<i class="fas fa-pencil-alt"></i>
															Edit
														</a>
														<a data-toggle="modal" href="#delete_modal"
															class="btn btn-sm bg-danger-light">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													6
												</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user5.jpg" alt="User Image"></a>
														<a href="profile.php">Cleaning</a>
													</h2>
												</td>

												<td>3 Apr 2020 </td>

												<td class="text-center">
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="far fa-star text-secondary"></i>
												</td>

												<td class="text-right">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" data-toggle="modal"
															href="#edit_modal">
															<i class="fas fa-pencil-alt"></i>
															Edit
														</a>
														<a data-toggle="modal" href="#delete_modal"
															class="btn btn-sm bg-danger-light">
															<i class="far fa-trash-alt"></i> Delete
														</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													7
												</td>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img
																class="avatar-img rounded-circle"
																src="assets/img/user/user6.jpg" alt="User Image"></a>
														<a href="profile.php">Carpentry</a>
													</h2>
												</td>

												<td>3 Apr 2020 </td>

												<td class="text-center">
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="fas fa-star text-warning"></i>
													<i class="far fa-star text-secondary"></i>
												</td>

												<td class="text-right">
													<div class="actions">
														<a class="btn btn-sm bg-success-light" data-toggle="modal"
															href="#edit_modal">
															<i class="fas fa-pencil-alt"></i>
															Edit
														</a>
														<a data-toggle="modal" href="#delete_modal"
															class="btn btn-sm bg-danger-light">
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

	<!-- Edit Modal -->
	<div class="modal fade" id="edit_modal" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="form-content p-2">
						<div class="modal-header border-0">
							<h4 class="modal-title">Edit</h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">??</span>
							</button>
						</div>
						<div class="card">
							<div class="card-body">
								<form id="update_category" method="post" autocomplete="off"
									enctype="multipart/form-data" novalidate="novalidate" class="bv-form"><button
										type="submit" class="bv-hidden-submit"
										style="display: none; width: 0px; height: 0px;"></button>
									<input type="hidden" name="csrf_token_name"
										value="104dbdaf79d7d8e21e4ae9991d166669">
									<div class="form-group">
										<label>Category Name</label>
										<input class="form-control" type="text" value="Painting" name="category_name"
											id="category_name" data-bv-field="category_name">
										<input class="form-control" type="hidden" value="8" name="category_id"
											id="category_id">
										<small class="help-block" data-bv-validator="remote" data-bv-for="category_name"
											data-bv-result="NOT_VALIDATED" style="display: none;">This category name is
											already exist</small><small class="help-block" data-bv-validator="notEmpty"
											data-bv-for="category_name" data-bv-result="NOT_VALIDATED"
											style="display: none;">Please enter category name</small></div>
									<div class="form-group">
										<label>Category Image</label>
										<input class="form-control" type="file" name="category_image"
											id="category_image">
									</div>
									<div class="form-group">
										<div class="avatar">
											<img class="avatar-img rounded" src="assets/img/user/user.jpg" alt="">
										</div>
									</div>
									<div class="mt-4">
										<button class="btn btn-primary" name="form_submit" value="submit"
											type="submit">Save Changes</button>
										<button type="button" class="btn btn-danger"
											data-dismiss="modal">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Edit Modal -->

	<!-- Delete Model -->
	<div class="modal fade" id="delete_modal" role="dialog" style="display: none;" aria-hidden="true">
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
	<!-- Delete Model -->

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