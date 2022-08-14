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
                                    <b>We can Accpet the Assignments Through Google Drive , Go , Upload and share Link here! </b>
                                    <div>If you Dont know How to Upload.<a class="btn app-btn-primary" href="#">
                                            Click me to Learn
                                        </a></div>
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
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Assignments</h1>
                    </div>
                    <div class="col-auto">
                        <div class="page-utilities">
                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Search</button>
                                        </div>
                                    </form>
                                </div>
                                <!--//col-->
                                <div class="col-auto">
                                    <select class="form-select w-auto">
                                        <option selected value="option-1">Degree Wise</option>
                                        <option value="option-2">BS IT</option>
                                        <option value="option-3">BS CS</option>
                                        <option value="option-4">BS SE</option>
                                    </select>
                                </div>
                                <!--//col-->
                                <div class="col-auto">
                                    <select class="form-select w-auto">
                                        <option selected value="option-1">All</option>
                                        <option value="option-2">This week</option>
                                        <option value="option-3">This month</option>
                                        <option value="option-4">Last 3 months</option>

                                    </select>
                                </div>
                            </div>
                            <!--//row-->
                        </div>
                        <!--//table-utilities-->
                    </div>
                    <!--//col-auto-->
                </div>
                <!--//row-->



                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">Assignment Name<br> Degree <br> Semester</th>
                                                <th class="cell">Subject Code <br>& Name</th>
                                                <th class="cell">Download</th>
                                                <th class="cell">Time & <br> Due Date</th>
                                                <th class="cell">Status</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cell"><span><b>Make HTML Form</b></span><span class="note">BS-IT</span><span class="note">8th</span></td>
                                                <td class="cell">CMP-6765<br>Web System & Technologies</td>
                                                <td class="cell"><a href="assets/download/ASS-WEB.txt" download="">Download</a></td>
                                                <td class="cell"><span>60 minutes</span><span class="note">25/08/2022 to <br>28/08/2022</span></td>
                                                <td class="cell"><span class="badge bg-success">Active</span></td>
                                                <td class="cell"><a href="" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal">submit</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--//table-responsive-->

                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//app-card-->
                        <nav class="app-pagination">
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
                    <!--//tab-pane-->
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