<!DOCTYPE html>
<html lang="en">

<head>
	<title>Assignments</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

	<style type="text/css">
		.text-danger strong {
			color: #9f181c;
		}

		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}

		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}

		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}

		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}

		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}

		.receipt-main thead th {
			color: #fff;
		}

		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}

		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}

		.receipt-right p i {
			text-align: center;
			width: 18px;
		}

		.receipt-main td {
			padding: 9px 20px !important;
		}

		.receipt-main th {
			padding: 13px 20px !important;
		}

		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}

		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}

		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}

		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}

		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
	</style>

</head>

<body class="app">
	<?php include('navbar.php'); ?>

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">
				<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
					<div class="inner">
						<div class="app-card-body   p-lg-2">
							<h3 class="mb-3">Hi <span class="text-success">Mursaleen Umar!</span></h3>
							<div class="row gx-5 gy-3">
								<div class="col-12 col-lg-9">
									<b>Download the Fee Voucher and Visit the ADMIN office to submit your fee.</b>
									<div> <span class="badge bg-info">NOTE:</span> safe the returned slip from the office until the system will upadated your status. </div>
								</div>
								<!--//col-->
								<div class="col-12 col-lg-3">
									<button id="btn-print" class="btn btn-info text-white">Print Invoice</button>
								</div>
								<!--//col-->
							</div>
							<!--//row-->
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<!--//app-card-body-->

					</div>
					<!--//inner-->
				</div>


				<div class="col-12 col-lg-10 mx-auto " id="print-invoice">
					<div class="app-card app-card-chart h-100 shadow-sm">
						<!--//app-card-header-->
						<div class="app-card-body p-3 p-lg-4">
							<div class=" row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="receipt-left">
										<img class="img-responsive" alt="iamgurdeeposahan" src="assets\images\invoice-logo.jpg" style="width: 71px; border-radius: 43px;">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 text-end">
									<div class="receipt-right">
										<h5>Royal College of Managment & Sciences</h5>
										<p>055-3250765 <i class="fa fa-phone"></i></p>
										<p>Royal@gmail.com <i class="fa fa-envelope-o"></i></p>
										<p>Royal College Paracha Center <i class="fa fa-location-arrow"></i></p>
									</div>
								</div>
							</div>

							<div class=" row">
								<div class=" col-md-8 text-left">
									<div class="text-start receipt-right">
										<h5>Mursaleen Umer </h5>
										<p><b>Mobile :</b> 0335-4961946</p>
										<p><b>Email :</b> bthunder418@gmail.com</p>
										<p><b>Address :</b> Khaqan Street Arif Colony Gill Road Gujranwala</p>
									</div>
								</div>
								<div class="col-md-4 ">
									<div class="text-end pt-3">
										<h3>INVOICE # 102</h3>
									</div>
								</div>
							</div>

							<div>
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>Description</th>
											<th>Amount</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="col-md-9">Payment for 6th installment</td>
											<td class="col-md-3">15,000/-</td>
										</tr>
										<tr>
											<td class="text-right">
												<p>
													<strong>Total Amount: </strong>
												</p>
												<p>
													<strong>Late Fees: </strong>
												</p>
												<p>
													<strong>Payable Amount: </strong>
												</p>
												<p>
													<strong>Balance Due: </strong>
												</p>
											</td>
											<td>
												<p>
													<strong> 65,500/-</strong>
												</p>
												<p>
													<strong> 500/-</strong>
												</p>
												<p>
													<strong> 1300/-</strong>
												</p>
												<p>
													<strong> 9500/-</strong>
												</p>
											</td>
										</tr>
										<tr>

											<td class="text-right">
												<h2><strong>Total: </strong></h2>
											</td>
											<td class="text-left text-danger">
												<h2><strong> 31.566/-</strong></h2>
											</td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="row p-3">
								<div class="col-xs-8 col-sm-8 col-md-8 text-left">
									<div class="receipt-right">
										<p><b>Date :</b> 15 Aug 2016</p>
										<h5 style="color: rgb(140, 140, 140);">Thanks!</h5>
									</div>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4">
									<div class="text-end ">
										<h5>Stamp</h5>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!--//app-card-body-->
				</div>
				<!--//app-card-->
			</div>
			<!--//tab-content-->



		</div>
		<!--//container-fluid-->
	</div>
	<!--//app-content-->


	</div>
	<!--//app-wrapper-->
	<!--//app-wrapper-->





	<!-- The Modal -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Add Quiz</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form class="row g-3">
						<div class="col-md-6">
							<label for="assignmentname" class="form-label">Assignment Name</label>
							<input type="text" class="form-control" id="assignmentname" disabled>
						</div>
						<div class="col-md-6">
							<label for="degreename" class="form-label">Degree Name</label>
							<input type="text" class="form-control" id="degreename" disabled>
						</div>
						<div class="col-md-3">
							<label for="semesterno" class="form-label">Semester No</label>
							<input type="text" class="form-control" id="semesterno" disabled>
							</select>
						</div>
						<div class="col-md-3">
							<label for="Subjectcode" class="form-label">Subject Code</label>
							<input type="text" class="form-control" id="Subjectcode" disabled>
						</div>
						<div class="col-md-6">
							<label for="subjectname" class="form-label">Subeject Name</label>
							<input type="text" class="form-control" id="subjectname" disabled>
						</div>
						<div class="col-md-4">
							<label for="status" class="form-label">Status</label>
							<input type="text" class="form-control" id="status" disabled>
						</div>
						<div class="col-md-4">
							<label for="startingdate" class="form-label">Starting Date</label>
							<input type="text" class="form-control" id="startingdate" disabled>
						</div>
						<div class="col-md-4">
							<label for="endingdate" class="form-label">Ending Date</label>
							<input type="text" class="form-control" id="endingdate" disabled>
						</div>
						<div class="col-md-12">
							<label for="gdrivelink" class="form-label">Google Drive Link!</label>
							<input type="text" class="form-control" id="gdrivelink">
						</div>
						<div class="col-md-10"></div>
						<div class="col-md-2">
							<input type="submit" class="form-control btn app-btn-secondary" id="submit" value="Add">
						</div>
					</form>
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
	<script src="assets/js/print.js"></script>

</body>

</html>