<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Karnoder-Admin - Login</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset("dashboard") }}/assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset("dashboard") }}/assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset("dashboard") }}/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{ asset("dashboard") }}/assets/plugins/fontawesome/css/all.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="{{ asset("dashboard") }}/assets/css/feather.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset("dashboard") }}/assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="{{ asset("dashboard") }}/assets/js/html5shiv.min.js"></script>
			<script src="{{ asset("dashboard") }}/assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left" style="background: url({{ asset("dashboard") }}/assets/img/hack/login-page.jpg);">
						<img class="img-fluid" src="{{ asset("dashboard") }}/assets/img/logo-white.png" alt="Logo">
					</div>


                    @yield("auth_content")


				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{ asset("dashboard") }}/assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{ asset("dashboard") }}/assets/js/popper.min.js"></script>
	<script src="{{ asset("dashboard") }}/assets/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="{{ asset("dashboard") }}/assets/js/script.js"></script>

</body>

</html>
