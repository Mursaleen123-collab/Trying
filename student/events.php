<!DOCTYPE html>
<html lang="en">

<head>
	<title>Events</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app">
	<?php include('navbar.php'); ?>

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<div class="col-6 col-md-4 col-xl-3 col-xxl-2">
					<div class="app-card app-card-doc shadow-sm  h-100">
						<div class="app-card-thumb-holder p-3">
							<div class="app-card-thumb">
								<img class="thumb-image" src="assets/images/doc-thumb-1.jpg" alt="">
							</div>
							<a class="app-card-link-mask" href="#file-link" data-bs-toggle="modal" data-bs-target="#myModal"></a>
						</div>
						<div class="app-card-body p-3 has-card-actions">
							<h4 class="app-doc-title truncate mb-0"><a href="#file-link">IT Sports Day</a></h4>
							<div class="app-doc-meta">
								<ul class="list-unstyled mb-0">
									<li><span class="text-muted">Date:</span> 18/8/2022</li>
									<li><span class="text-muted">Place:</span>Heaven Castle</li>
									<li><span class="text-muted">Time:</span> 11:00 PM</li>
								</ul>
							</div>
							<!--//app-doc-meta-->


						</div>
						<!--//app-card-body-->

					</div>
					<!--//app-card-->
				</div>
				<!--//col-->
			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-content-->


	</div>
	<!--//app-wrapper-->

	<!-- The Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<!-- Modal body -->
				<div class="modal-body">
					<h4 class="modal-title text-center mb-3">IT Sports Day</h4>
					<div class="row g-3">
						<div class="col-md-12">
							<img src="assets/images/doc-thumb-1.jpg" alt="" class="img img-thumbnail">
						</div>
						<div class="col-md-4 text-center">
							<h2 class="badge bg-success">Heaven Castle</h2>
						</div>
						<div class="col-md-4 text-center">
							<h2 class="badge bg-success">18-08-2022</h2>
						</div>
						<div class="col-md-4 text-center">
							<h2 class="badge bg-success">11 : 00 PM</h2>
						</div>
						<div class="col-md-12" style="text-align:justify;color:black;">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui labore ab dignissimos ipsum commodi nam quasi eum laboriosam facere, corrupti provident itaque deserunt saepe accusamus rerum dicta reiciendis aperiam tempore!</p>
						</div>
					</div>
				</div>
			</div>


			<!-- Javascript -->
			<script src="assets/plugins/popper.min.js"></script>
			<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

			<!-- Charts JS -->
			<script src="assets/plugins/chart.js/chart.min.js"></script>
			<script src="assets/js/index-charts.js"></script>

			<!-- Page Specific JS -->
			<script src="assets/js/app.js"></script>

</body>

</html>