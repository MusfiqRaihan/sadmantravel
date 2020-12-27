<?php
session_start();
include('../models/dbconnection.php');
include('../includes/files.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Travel & Tourism - tour package page</title>
    <link rel="stylesheet" href="../assets/font/flaticon.css">
    <link rel="stylesheet" href="../assets/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/dd.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <link href="../assets/css/jquery.fancybox.min.html" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style-1.css">
    <link rel="stylesheet" href="../assets/css/responsive-1.css">
</head>

<body>


     <a href="#" id="back-top-btn">
       <i class="fas fa-angle-double-up"></i>
     </a>

    <?php include '../includes/headersecond.php' ?>

    <div class="container py-5">
      <div class="row">

        <div class="col-md-4">
          <div class="card" style="width: 20rem;">
              <img style="height:300px;" src="../assets/images/tour-package-4.jpg" class="card-img-top" alt="destination">
            <div class="card-body">
              <h5 class="text-center">Small Package</h5>
              <p class="text-center mb-2" style="font-size:13px!important;">for 4 Days <span>|</span> ৳ ৮০০০</p>
              <p class="text-center mb-2" style="font-size:13px!important;">include bus ticket and hotel rent</p>
              <a href="http://localhost/travel/controller/smallpackage.php" class="btn btn-info btn-sm btn-block">Book Now</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card" style="width: 20rem;">
              <img style="height:300px;" src="../assets/images/tour-package-5.jpg" class="card-img-top" alt="destination">
            <div class="card-body">
              <h5 class="text-center">Medium package</h5>
              <p class="text-center mb-2" style="font-size:13px!important;">for 4 Days <span>|</span> ৳ ১২,০০০</p>
              <p class="text-center mb-2" style="font-size:13px!important;">include AC bus ticket and cottage rent</p>
              <a href="http://localhost/travel/controller/mediumpackage.php" class="btn btn-info btn-sm btn-block">Book Now</a>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card" style="width: 20rem;">
              <img style="height:300px;" src="../assets/images/tour-package-6.jpg" class="card-img-top" alt="destination">
            <div class="card-body">
              <h5 class="text-center">Large package</h5>
              <p class="text-center mb-2" style="font-size:13px!important;">for 5 Days <span>|</span> ৳ ২৫,০০০</p>
              <p class="text-center mb-2" style="font-size:13px!important;">include AC bus and fivestar hotel rent</p>
              <a href="http://localhost/travel/controller/largepackage.php" class="btn btn-info btn-sm btn-block">Book Now</a>
            </div>
          </div>
        </div>

      </div>
    </div>




    <?php include '../includes/footer.php'; ?>


        <script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/waypoints.min.html"></script>
        <script src="../assets/js/jquery.counterup.min.js"></script>
        <script src="../assets/js/jquery-ui.min.js"></script>
        <script src="../assets/js/jquery.dd.min.js"></script>
        <script src="../assets/js/mixitup.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <script src="../assets/js/SmoothScroll.js"></script>
        <script src="../assets/js/script.js"></script>

    </body>

    </html>
