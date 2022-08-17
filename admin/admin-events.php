<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quiz List</title>

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
                            <h3 class="mb-3">Add <span class="text-success">Event!</span></h3>
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div> You can upload only one image (cover) </div>
                                    <div>Portal is a free Bootstrap 5 admin dashboard template. The design is simple, clean and modular so it's a great base for building any modern web app.</div>
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
                        <h1 class="app-page-title mb-0">Events</h1>
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
                                <div class="col-auto">
                                    <a class="btn  text-white btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal" href="#"> Add Event </a>
                                </div>
                            </div>
                            <!--//row-->
                        </div>
                        <!--//table-utilities-->
                    </div>
                    <!--//col-auto-->
                </div>
                <!--//row-->



                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr>
                                            <th class="cell">Event Name</th>
                                            <th class="cell">Event Desc</th>
                                            <th class="cell">Event Date</th>
                                            <th class="cell"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cell">CMP-6765</td>
                                            <td class="cell">Web System & Technologies</td>
                                            <td class="cell">25/08/2022</td>
                                            <td class="cell"><span class="badge bg-info" data-bs-toggle="modal" data-bs-target="#myModal">Edit</span>
                                                <span class="badge bg-danger">Delete</span></td>
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
                        <h4 class="modal-title">Add Event</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="eventname" class="form-label">Event Name</label>
                                <input type="text"  id="eventname" class="form-control" placeholder="Event Name">
                            </div>
                            <div class="col-md-6">
                                <label for="eventimage" class="form-label">Event Image</label>
                                <input type="file"  id="eventimage" class="form-control" placeholder="Event Image">
                            </div>
                            <div class="col-md-6">
                                <label for="eventdate" class="form-label">Event Date</label>
                                <input type="date"  id="eventdate" class="form-control" placeholder="Event Date">
                            </div>\
                            <div class="col-md-12">
                                <label for="eventdesc" class="form-label">Event desc</label>
                                <textarea class="form-control" id="eventdesc" row="5"></textarea>                    
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