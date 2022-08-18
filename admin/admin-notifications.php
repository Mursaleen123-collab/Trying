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
                <div class="position-relative mb-3">
                    <div class="row g-3 justify-content-between">
                        <div class="col-auto">
                            <h1 class="app-page-title mb-0">Notifications</h1>
                        </div>
                        <div class="col-auto">
                            <a class="btn  text-white btn-secondary" data-bs-toggle="modal" data-bs-target="#myModal" href="#"> New Notification </a>
                        </div>
                    </div>
                </div>

                <div class="app-card app-card-notification shadow-sm mb-4">
                    <div class="app-card-header px-4 py-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-12 col-lg-auto text-center text-lg-start">
                                <img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
                            </div>
                            <!--//col-->
                            <div class="col-12 col-lg-auto text-center text-lg-start">
                                <div class="notification-type mb-2"><span class="badge bg-info">Project</span></div>
                                <h4 class="notification-title mb-1">Notification Heading Lorem Ipsum</h4>
                                <ul class="notification-meta list-inline mb-0">
                                    <li class="list-inline-item">2 hrs ago</li>
                                    <li class="list-inline-item">|</li>
                                    <li class="list-inline-item">Amy Doe</li>
                                </ul>

                            </div>
                            <!--//col-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//app-card-header-->
                    <div class="app-card-body p-4">
                        <div class="notification-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ultrices dolor, ac maximus ligula. Donec ex orci, mollis ac purus vel, tempor pulvinar justo. Praesent nibh massa, posuere non mollis vel, molestie non mauris. Aenean consequat facilisis orci, sed sagittis mauris interdum at.</div>
                    </div>
                    <!--//app-card-body-->
                    <div class="app-card-footer px-4 py-3">
                        <a class="action-link badge bg-danger" href="#">Delete</a>
                    </div>
                    <!--//app-card-footer-->
                </div>
                <!--//app-card-->

                <div class="text-center mt-4"><a class="btn app-btn-secondary" href="#">Load more notifications</a></div>

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->



        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">New Notification</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="col-md-6">
                                <label for="createdby" class="form-label">Created By</label>
                                <input type="text" class="form-control" id="createdby" disabled>
                            </div>
                            <div class="col-md-6">
                                <label for="createdat" class="form-label">Created At</label>
                                <input type="date" class="form-control" id="createdat" disabled>
                            </div>
                            <div class="col-md-6 pb-0 mb-0">
                                <label for="title" class="form-label">Select Degree</label>
                                <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                                    <label class="form-check-label" for="flexCheckChecked">All</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                    <label class="form-check-label" for="flexCheckChecked">BS Information Technology</label>
                                </div>
                                <!-- Checked checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                    <label class="form-check-label" for="flexCheckChecked">BS Computer Science</label>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="detail" class="form-label">Detail</label>
                                <textarea class="form-control" id="detail" rows="10" cols="20"></textarea>
                            </div>
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <input type="submit" class="form-control btn app-btn-secondary" id="submit" value="Send">
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