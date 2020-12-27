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
    <title>Travel & Tourism - book tickets page</title>
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
          <img style="height:200px;" src="../assets/images/bus.jpg" class="card-img-top" alt="destination">
        <div class="card-body">
          <h5 class="card-title text-center mb-2">Bus Ticket</h5>
          <p style="font-size:14px!important;" class="text-center mb-2">Fare varies from destination to destination</p>
          <a href="http://localhost/travel/controller/busticket.php" class="btn btn-info btn-sm btn-block">Book Now</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="width: 20rem;">
          <img style="height:200px;" src="../assets/images/train.jpg" class="card-img-top" alt="destination">
        <div class="card-body">
          <h5 class="card-title text-center mb-2">Train Ticket</h5>
          <p style="font-size:14px!important;" class="text-center mb-2">Fare varies from destination to destination</p>
          <a href="http://localhost/travel/controller/trainticket.php" class="btn btn-info btn-sm btn-block">Book Now</a>
        </div>
      </div>
    </div>


    <div class="col-md-4">
      <div class="card" style="width: 20rem;">
          <img style="height:200px;" src="../assets/images/plane.jpg" class="card-img-top" alt="destination">
        <div class="card-body">
          <h5 class="card-title text-center mb-2">Plane Ticket</h5>
          <p style="font-size:14px!important;" class="text-center mb-2">Fare varies from destination to destination</p>
          <a href="http://localhost/travel/controller/planeticket.php" class="btn btn-info btn-sm btn-block">Book Now</a>
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
