<!DOCTYPE html>
<html lang="en">

<head>
	<title>Quiz List</title>

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

				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">Quiz Results</h1>
					</div>
					<!--//col-auto-->
				</div>
				<!--//row-->

				<div class="app-card app-card-orders-table shadow-sm mb-5">
					<div class="app-card-body">
						<div class="table-responsive">
							<table class="table app-table-hover mb-0 text-left">
								<thead>
									<tr>
										<th class="cell">Quiz ID <br> Degree <br> Semester</th>
										<th class="cell">Subject Code</th>
										<th class="cell">Subject Name</th>
										<th class="cell">No. of <br>Questions</th>
										<th class="cell">Time & <br> Due Date</th>
										<th class="cell"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
										<td class="cell">CMP-6765</td>
										<td class="cell">Web System & Technologies</td>
										<td class="cell">50</td>
										<td class="cell"><span>60 minutes</span><span class="note">25/08/2022 to <br>28/08/2022</span></td>
										<td class="cell"><a class="btn-sm app-btn-secondary  " href="student-quiz-sheet.php">View</a></td>
									</tr>
									<tr>
										<td class=" cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
										<td class="cell">CMP-6765</td>
										<td class="cell">Web System & Technologies</td>
										<td class="cell">50</td>
										<td class="cell"><span>60 minutes</span><span class="note">25/08/2022 to <br>28/08/2022</span></td>
										<td class="cell"><a class="btn-sm app-btn-secondary  " href="student-quiz-sheet.php">View</a></td>
									</tr>
									<tr>
										<td class=" cell"><span>169</span><span class="note">BS-IT</span><span class="note">8th</span></td>
										<td class="cell">CMP-6765</td>
										<td class="cell">Web System & Technologies</td>
										<td class="cell">50</td>
										<td class="cell"><span>60 minutes</span><span class="note">25/08/2022 to <br>28/08/2022</span></td>
										<td class="cell"><a class="btn-sm app-btn-secondary  " href="student-quiz-sheet.php">View</a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<!--//table-responsive-->

					</div>
					<!--//app-card-body-->
				</div>
				<!--//app-card-->
				<nav class=" app-pagination">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
						</li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
				<!--//app-pagination-->

			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-content-->


	</div>
	<!--//app-wrapper-->
	<!--//app-wrapper-->






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