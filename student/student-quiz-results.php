<!DOCTYPE html>
<html lang="en">

<head>
	<title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

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

</head>

<body class="app">
	<?php include('navbar.php'); ?>

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
				<div class="row g-4 mb-4">
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<div class="app-card-header p-3">
								<div class="row justify-content-between align-items-center">
									<div class="col-auto">
										<h4 class="app-card-title">Student Result</h4>
									</div>
									<!--//col-->
									<div class="col-auto">
										<form class="row gx-1 align-items-center">
											<div class="col-auto">
												<input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search Student">
											</div>
											<div class="col-auto">
												<button type="submit" class="btn app-btn-secondary">Search</button>
											</div>
										</form>
									</div>
									<!--//col-->
								</div>
								<!--//row-->
							</div>
							<!--//app-card-header-->
							<div class="app-card-body p-2 p-lg-4">
								<form class="row g-3">
									<div class="col-md-6">
										<label for="studentname" class="form-label">Student Name</label>
										<input type="text" class="form-control" id="studentname" value="Mursaleen Umar" disabled>
									</div>
									<div class="col-md-6">
										<label for="degreename" class="form-label">Father Name</label>
										<input type="text" class="form-control" id="degreename" value="BS computer Science" disabled>
									</div>
									<div class="col-md-3">
										<label for="rollno" class="form-label">Roll no</label>
										<input type="text" class="form-control" id="rollno" value="1097" disabled>
									</div>
									<div class="col-md-3">
										<label for="semesterno" class="form-label">Semester No</label>
										<input type="text" class="form-control" id="semesterno" value="8" disabled>
									</div>
									<div class="col-md-6">
										<label for="degreename" class="form-label">Degree Name</label>
										<input type="text" class="form-control" id="degreename" value="BS computer Science" disabled>
									</div>
									<div class="col-md-4">
									</div>
									<div class="col-md-4">
										<a type="submit" class="form-control btn app-btn-primary text-white" id="downloadpdf">Download PDF</a>
									</div>
									<div class="col-md-4">
										<a type="submit" class="form-control btn app-btn-primary text-white" id="print">Print</a>
									</div>

								</form>
							</div>
							<!--//app-card-body-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->
					<div class="col-12 col-lg-6">
						<div class="app-card app-card-chart h-100 shadow-sm">
							<!--//app-card-header-->
							<div class="app-card-body p-3 p-lg-4">
								<div class="table-responsive">
									<table class="table app-table-hover table-bordered mb-0 text-left text-center">
										<thead>
											<tr>
												<th class="cell">Sr#</th>
												<th class="cell">Course Code <br> Course Name</th>
												<th class="cell" colspan="2">Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="cell">1</td>
												<td class="cell">CMP-7982 <br> Web Systems</td>
												<td class="cell"> 43 </td>
												<td class="cell"> 50 </td>
											</tr>
											<tr>
												<td class="cell">1</td>
												<td class="cell">CMP-7982 <br> Web Systems</td>
												<td class="cell"> 43 </td>
												<td class="cell"> 50 </td>
											</tr>
											<tr>
												<td class="cell">1</td>
												<td class="cell">CMP-7982 <br> Web Systems</td>
												<td class="cell"> 43 </td>
												<td class="cell"> 50 </td>
											</tr>
											<tr>
												<td class="cell">1</td>
												<td class="cell">CMP-7982 <br> Web Systems</td>
												<td class="cell"> 43 </td>
												<td class="cell"> 50 </td>
											</tr>
											<tr>
												<td class="cell">1</td>
												<td class="cell">CMP-7982 <br> Web Systems</td>
												<td class="cell"> 43 </td>
												<td class="cell"> 50 </td>
											</tr>
											<tr>
												<td class="cell">1</td>
												<td class="cell">CMP-7982 <br> Web Systems</td>
												<td class="cell"> 43 </td>
												<td class="cell"> 50 </td>
											</tr>
											<tr>
												<td class="cell" colspan="2">Total Marks</td>
												<td class="cell">258</td>
												<td class="cell">300</td>
											</tr>
											<tr class="table-success">
												<td class="cell" colspan="3">Remaining :</td>
												<td class="cell">84%</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--//table-responsive-->
							</div>
							<!--//app-card-body-->
						</div>
						<!--//app-card-->
					</div>
					<!--//col-->

				</div>
				<!--//row-->

			</div>
			<!--//container-fluid-->
		</div>
		<!--//app-content-->

	</div>
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