<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Mentoring - Error 404</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard') }}/assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/plugins/fontawesome/css/all.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/feather.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/style.css">

	<!--[if lt IE 9]>
			<script src="{{ asset('dashboard') }}/assets/js/html5shiv.min.js"></script>
			<script src="{{ asset('dashboard') }}/assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body class="error-page">

	<!-- Main Wrapper -->
	<div class="main-wrapper">

		<div class="error-box">
			<h1>404</h1>
			<h3 class="h2 mb-3"><i class="fas fa-exclamation-triangle"></i> Oops! Page not found!</h3>
			<p class="h4 font-weight-normal">The page you requested was not found.</p>
			<a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
		</div>

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{ asset('dashboard') }}/assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{ asset('dashboard') }}/assets/js/popper.min.js"></script>
	<script src="{{ asset('dashboard') }}/assets/js/bootstrap.min.js"></script>

	<!-- Custom JS -->
	<script src="{{ asset('dashboard') }}/assets/js/script.js"></script>

</body>

</html>
