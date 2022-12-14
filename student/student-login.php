<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin-Login</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

	<style>
		.img {
			display: flex;
			justify-content: flex-end;
			align-items: center;
		}

		.img img {
			width: 600px;
		}

		.wave {
			position: fixed;
			bottom: 0;
			left: 0;
			height: 100%;
			width: 60%;
		}

		@media screen and (max-width: 900px) {
			.img {
				display: none;
			}

			.wave {
				display: none;
			}
		}
	</style>
</head>

<body class="app app-login p-0">

	<img class="wave" src="assets/images/login/wave.png">
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col back-svg">
			<div class="img mt-3">
				<img src="assets/images/login/bg.svg">
			</div>
		</div>
		<!--//auth-background-col-->
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">
					<div class="app-auth-branding mb-4"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Login to Student Portal</h2>
					<div class="auth-form-container text-start">
						<form class="auth-form login-form" action="index.php">
							<div class="email mb-3">
								<label class="sr-only" for="signin-email">Email</label>
								<input id="signin-email" name="signin-email" type="email" class="form-control signin-email" placeholder="Email address" required="required">
							</div>
							<!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="signin-password">Password</label>
								<input id="signin-password" name="signin-password" type="password" class="form-control signin-password" placeholder="Password" required="required">
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
												Remember me
											</label>
										</div>
									</div>
									<!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="admin-forget-password.html">Forgot password?</a>
										</div>
									</div>
									<!--//col-6-->
								</div>
								<!--//extra-->
							</div>
							<!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>

					</div>
					<!--//auth-form-container-->

				</div>
				<!--//auth-body-->

			</div>
			<!--//flex-column-->
		</div>
		<!--//auth-main-col-->

	</div>
	<!--//row-->


</body>

</html>