<!DOCTYPE html>
<html lang="en">

<head>
    <title>Assignments</title>

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
                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body   p-lg-2">
                            <h3 class="mb-3">Hi <span class="text-success">Mursaleen Umar!</span></h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <b>Please Submit your Fee on Time.</b>
                                    <div>If already submit your fee then dismiss.</div>
                                </div>
                                <!--//col-->
                                <div class="col-12 col-lg-3">

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


                <div class="col-12 col-lg-10 mx-auto">
                    <div class="app-card app-card-chart h-100 shadow-sm">
                        <div class=" app-card-header p-3">
                            <h1 class="app-page-title mb-3 text-center">Fee Record</h1>

                        </div>
                        <!--//app-card-header-->
                        <div class="app-card-body p-3 p-lg-4">
                            <div class="row g-3 mb-3 align-items-center justify-content-between">
                                <div class="col-md-4">
                                    <h5 class="mb-0 text-center">Mursaleen Umar</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class=" mb-0 text-center">BS-CS</h5>
                                </div>
                                <div class="col-md-4">
                                    <h5 class=" mb-0 text-center">2022</h5>
                                </div>
                            </div>
                            <!--//row-->
                            <div class="table-responsive">
                                <table class="table app-table-hover table-bordered mb-0 text-left text-center">
                                    <thead>
                                        <tr>
                                            <th class="cell">Sr#</th>
                                            <th class="cell">Month </th>
                                            <th class="cell">Slip no</th>
                                            <th class="cell">Status</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cell">1</td>
                                            <td class="cell">June</td>
                                            <td class="cell"> 1298018 </td>
                                            <td class="cell bg-success text-white"> Paid </td>
                                        </tr>
                                        <tr>
                                            <td class="cell">1</td>
                                            <td class="cell">June</td>
                                            <td class="cell"> 1298018 </td>
                                            <td class="cell bg-warning text-white"> Pending </td>
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

</body>

</html>