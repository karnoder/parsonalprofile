<?php 
	// require_once "inc/session.php";
	require_once 'inc/header.php';
	// require_once 'database.php';
	$user_id = $_SESSION["user_id"];
	$select = "SELECT * FROM users WHERE id = '$user_id'";
	$sq = mysqli_query($db, $select);
	$assoc = mysqli_fetch_assoc($sq);

 ?>

	<!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content container-fluid">

			<!-- Page Header -->
			<div class="page-header">
				<div class="row">
					<div class="col">
						<h3 class="page-title">My Profile</h3>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
							<li class="breadcrumb-item active">My Profile</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Page Header -->

			<div class="row">
				<div class="col-md-12">
					<div class="profile-header">
						<div class="row align-items-center">
							<div class="col-auto profile-image">
								<form action="profile-img-upload.php" method="POST" enctype="multipart/form-data">
									<a href="#">
										<img class="rounded-circle" id="image_id" alt="User Image"
										src="upload/<?php echo $assoc["photo"]?>">
									</a>
									<div class="upload-img">
										<input class="upload_btn" id="photo" type="file" name="photo" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
										<label for="photo">
											<p>upload</p>
										</label>
									</div>
									<button class="images-submit" type="submit">Update Image</button>
								</form>
							</div>
							<div class="col ml-md-n2 profile-user-info">
								<h4 class="user-name mb-0"><?php echo $assoc["name"] ?></h4>
								<h6 class="text-muted"><?php echo $assoc["email"] ?></h6>
								<div class="pb-3">
									<i class="fas fa-map-marker-alt"></i>
									 Florida, United States
								</div>
								<div class="about-text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
									do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
							<div class="col-auto profile-btn">
							</div>
						</div>
					</div>
					<div class="profile-menu">
						<ul class="nav nav-tabs nav-tabs-solid">
							<li class="nav-item">
								<a class="nav-link <?php if (!isset($_SESSION["change_password"])) {
									echo "active";
								} ?>" data-toggle="tab" href="#per_details_tab">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link <?php if (isset($_SESSION["change_password"])) {
									echo "active";
								} ?>" data-toggle="tab" href="#password_tab">Password</a>
							</li>
						</ul>
					</div>
					<div class="tab-content profile-tab-cont">
	
						<!-- Personal Details Tab -->
						<div class="tab-pane fade show <?php if (!isset($_SESSION["change_password"])) {
									echo "active";
								} ?>" id="per_details_tab"> 
								

							<!-- Personal Details -->
							<div class="row">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-body">
											<h5 class="card-title d-flex justify-content-between">
												<span>Personal Details</span>
												<a class="edit-link" data-toggle="modal"
													href="#edit_personal_details"><i
														class="fa fa-edit mr-1"></i>
													Edit
												</a>
											</h5>
											<div class="row">
												<p class="col-sm-2 text-muted mb-0 mb-sm-3">Name</p>
												<p class="col-sm-10"><?php echo $assoc["name"] ?></p>
											</div>
											<div class="row">
												<p class="col-sm-2 text-muted mb-0 mb-sm-3">Date of Birth</p>
												<p class="col-sm-10">24 Jul 1983</p>
											</div>
											<div class="row">
												<p class="col-sm-2 text-muted mb-0 mb-sm-3">Email ID</p>
												<p class="col-sm-10"><?php echo $assoc["email"] ?></p>
											</div>
											<div class="row">
												<p class="col-sm-2 text-muted mb-0 mb-sm-3">Mobile</p>
												<p class="col-sm-10"><?php echo $assoc["phone"] ?></p>
											</div>
										</div>
									</div>


								</div>


							</div>
							<!-- /Personal Details -->

						</div>
						<!-- /Personal Details Tab -->

						<!-- Change Password Tab -->
						<div id="password_tab" class="tab-pane fade show <?php if (isset($_SESSION["change_password"])) {
									echo "active";
								} ?>">

							<div class="card">
								<div class="card-body">
									<h5 class="card-title">Change Password</h5>
									<div class="row">
										<div class="col-md-10 col-lg-6">
											<form action="change-password-action.php" method="POST">
												<div class="form-group">
													<label>Old Password</label>
													<input type="text" name="old_password" value="<?php if(isset($_SESSION["old_passwordvalue"])){echo $_SESSION["old_passwordvalue"];$_SESSION["old_password"] = "";} ?>" class="form-control old_passwordalert">
													<span class="text-danger text-capitalize">
														<?php 
															if (isset($_SESSION["old_password"])) {
														?>
														<style type="text/css">
														.old_passwordalert{
															border: 1px solid red;
														}
														</style>
														<?php
															echo $_SESSION["old_password"];

															$_SESSION["old_password"] = "";
															}
													 	?>
													</span>
												</div>
												<div class="form-group">
													<label>New Password</label>
													<input type="text" name="new_password" class="form-control new_passwordalert">
													<span class="text-danger text-capitalize">
														<?php 
															if (isset($_SESSION["new_password"])) {
														?>
														<style type="text/css">
														.new_passwordalert{
															border: 1px solid red;
														}
														</style>
														<?php
															echo $_SESSION["new_password"];

															$_SESSION["new_password"] = "";
															}
													 	?>
													</span>
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<input type="text" name="cnew_password" class="form-control cnew_passwordalert">
													<span class="text-danger text-capitalize">
														<?php 
															if (isset($_SESSION["cnew_password"])) {
														?>
														<style type="text/css">
														.cnew_passwordalert{
															border: 1px solid red;
														}
														</style>
														<?php
															echo $_SESSION["cnew_password"];
															$_SESSION["cnew_password"] = "";
															}
													 	?>
													</span>
												</div>
												<button class="btn btn-primary" type="submit">Save Changes</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Change Password Tab -->

					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- /Page Wrapper -->


	<!-- Edit Details Modal -->
	<div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Personal Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="row form-row">
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>First Name</label>
									<input type="text" class="form-control" value="Allen">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" class="form-control" value="Davis">
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label>Date of Birth</label>
									<div class="cal-icon">
										<input type="text" class="form-control" value="24-07-1983">
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Email ID</label>
									<input type="email" class="form-control" value="allendavis@example.com">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Mobile</label>
									<input type="text" value="+1 202-555-0125" class="form-control">
								</div>
							</div>
							<div class="col-12">
								<h5 class="form-title"><span>Address</span></h5>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label>Address</label>
									<input type="text" class="form-control" value="4663 Agriculture Lane">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>City</label>
									<input type="text" class="form-control" value="Miami">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>State</label>
									<input type="text" class="form-control" value="Florida">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Zip Code</label>
									<input type="text" class="form-control" value="22434">
								</div>
							</div>
							<div class="col-12 col-sm-6">
								<div class="form-group">
									<label>Country</label>
									<input type="text" class="form-control" value="United States">
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



<?php 
	require_once 'inc/footer.php';
 ?>