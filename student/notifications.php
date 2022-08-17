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
                            <div class="page-utilities">
                                <select class="form-select form-select-sm w-auto" >
                                  <option selected value="option-1">All</option>
                                  <option value="option-2">News</option>
                                  <option value="option-3">Product</option>
                                  <option value="option-4">Project</option>
                                  <option value="option-4">Billing</option>
                                </select>
                            </div><!--//page-utilities-->
                        </div>
                    </div>
                </div>
                
                <div class="app-card app-card-notification shadow-sm mb-4">
                    <div class="app-card-header px-4 py-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-12 col-lg-auto text-center text-lg-start">                        
                                <img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
                            </div><!--//col-->
                            <div class="col-12 col-lg-auto text-center text-lg-start">
                                <div class="notification-type mb-2"><span class="badge bg-info">Project</span></div>
                                <h4 class="notification-title mb-1">Notification Heading Lorem Ipsum</h4>
                                <ul class="notification-meta list-inline mb-0">
                                    <li class="list-inline-item">2 hrs ago</li>
                                    <li class="list-inline-item">|</li>
                                    <li class="list-inline-item">Amy Doe</li>
                                </ul>
                           
                            </div><!--//col-->
                        </div><!--//row-->
                    </div><!--//app-card-header-->
                    <div class="app-card-body p-4">
                        <div class="notification-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ultrices dolor, ac maximus ligula. Donec ex orci, mollis ac purus vel, tempor pulvinar justo. Praesent nibh massa, posuere non mollis vel, molestie non mauris. Aenean consequat facilisis orci, sed sagittis mauris interdum at.</div>
                    </div><!--//app-card-body-->
                    <div class="app-card-footer px-4 py-3">
                        <a class="action-link badge bg-danger" href="#">Delete</a>
                    </div><!--//app-card-footer-->
                </div><!--//app-card-->
                
               

                
                
                
                <div class="text-center mt-4"><a class="btn app-btn-secondary" href="#">Load more notifications</a></div>
                
            </div><!--//container-fluid-->
        </div><!--//app-content-->
       
</body>

</html>