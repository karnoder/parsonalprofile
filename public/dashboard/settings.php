<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Mentoring - Settings Page</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feather.css">

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
						<li class="active">
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

				<!-- Tab Menu -->
				<nav class="user-tabs mb-4 custom-tab-scroll">
					<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
						<li>
							<a class="nav-link active" href="#generalsettings" data-toggle="tab">General Settings</a>
						</li>
						<li>
							<a class="nav-link" href="#paymentgateway" data-toggle="tab">Payment gateway</a>
						</li>
						<li>
							<a class="nav-link" href="#sociallogin" data-toggle="tab">Social Login</a>
						</li>
					</ul>
				</nav>
				<!-- /Tab Menu -->

				<!-- Tab Content -->
				<div class="tab-content">

					<!-- General -->
					<div role="tabpanel" id="generalsettings" class="tab-pane fade show active">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-title">General Settings</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
										<li class="breadcrumb-item active">General Settings</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">General</h4>
									</div>
									<div class="card-body">
										<form action="#">

											<div class="form-group">
												<label>Website Name</label>
												<input type="text" class="form-control">
											</div>
											<div class="form-group">
												<label>Website Logo</label>
												<input type="file" class="form-control">
												<small class="text-secondary">Recommended image size is <b>150px x
														150px</b></small>
											</div>
											<div class="form-group mb-0">
												<label>Favicon</label>
												<input type="file" class="form-control">
												<small class="text-secondary">Recommended image size is <b>16px x
														16px</b> or <b>32px x 32px</b></small><br>
												<small class="text-secondary">Accepted formats : only png and
													ico</small>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /General -->

					<!-- Payment gateway -->
					<div role="tabpanel" id="paymentgateway" class="tab-pane fade">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-title">Payment gateway</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
										<li class="breadcrumb-item active">Payment gateway</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">General</h4>
									</div>
									<div class="card-body">
										<form
											action="https://mentoring-html.dreamguystech.com/template-1/admin/settings.php"
											method="post">
											<h4 class="text-primary">Stripe</h4>
											<input type="hidden" name="csrf_token_name"
												value="104dbdaf79d7d8e21e4ae9991d166669">

											<div class="form-group">
												<label>Stripe Option</label>

												<div>
													<div class="custom-control custom-radio custom-control-inline">
														<input class="custom-control-input" id="sandbox"
															name="gateway_type" value="sandbox" type="radio" checked=""
															onchange="payment(this.value)">
														<label class="custom-control-label"
															for="sandbox">Sandbox</label>
													</div>
													<div class="custom-control custom-radio custom-control-inline">
														<input class="custom-control-input" id="livepaypal"
															name="gateway_type" value="live" type="radio"
															onchange="payment(this.value)">
														<label class="custom-control-label"
															for="livepaypal">Live</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label>Gateway Name</label>
												<input type="text" id="gateway_name" name="gateway_name" value="Stripe"
													required="" class="form-control" placeholder="Gateway Name">
											</div>
											<div class="form-group">
												<label>API Key</label>
												<input type="text" id="api_key" name="api_key"
													value="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr" required=""
													class="form-control">
											</div>
											<div class="form-group">
												<label>Rest Key</label>
												<input type="text" id="value" name="value"
													value="sk_test_8HwqAWwBd4C4E77bgAO1jUgk00hDlERgn3" required=""
													class="form-control">
											</div>
											<div class="mt-4">
												<button class="btn btn-primary" name="form_submit" value="submit"
													type="submit">Submit</button>
												<a href="settings.php" class="btn btn-link m-l-5">Cancel</a>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Payment gateway -->

					<!-- Social Login -->
					<div role="tabpanel" id="sociallogin" class="tab-pane fade">

						<!-- Page Header -->
						<div class="page-header">
							<div class="row">
								<div class="col-sm-12">
									<h3 class="page-title">Social Login</h3>
									<ul class="breadcrumb">
										<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="javascript:(0)">Settings</a></li>
										<li class="breadcrumb-item active">Social Login</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /Page Header -->

						<div class="card shadow-none">
							<div class="card-header">
								<h4 class="card-title">Social Login</h4>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label>Facebook App ID</label>
									<input type="text" class="form-control mb-2" id="website_facebook_app_id"
										name="website_facebook_app_id" value="506928406484271">
									<a href="https://www.codexworld.com/create-facebook-app-id-app-secret/"
										target="_blank">How to Create facebook app id?</a>
								</div>
								<div class="form-group">
									<label>Google Client ID</label>
									<input type="text" class="form-control mb-2" id="website_google_client_id"
										name="website_google_client_id"
										value="387823802376-7e1kr704s4o39a8cqtdmd6jeaob636tu.apps.googleusercontent.com">
									<a href="https://www.codexworld.com/create-google-developers-console-project/"
										target="_blank">How to Create google client id?</a>
								</div>
							</div>
							<div class="card-body pt-0">
								<button name="form_submit" type="submit" class="btn btn-primary" value="true">Save
									Changes</button>
							</div>
						</div>
					</div>
					<!-- /Social Login -->

				</div>
				<!-- /Tab Content -->

			</div>
		</div>
		<!-- /Page Wrapper -->

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>