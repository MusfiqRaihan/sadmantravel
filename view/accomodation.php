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
    <title>Travel & Tourism - Accomodations page</title>
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

      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="../assets/images/hotel.jpg" class="card-img" alt="hotel">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-2">Hotel</h5>
              <p class="card-text mb-2">Tropical Daisy is a 3-star hotel offering modern guestrooms with a private bathroom. 200 metres from Banani 11 Shopping District, the hotel has a 24-hour reception and 2 dining options.</p>
              <a class="btn btn-outline-primary" href="http://localhost/travel/controller/hotel.php">Book Now</a>
            </div>
          </div>
        </div>
      </div>


      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-2">Cottage</h5>
              <p class="card-text mb-2">It may carry the connotation of being an old or old-fashioned building. In modern usage, a cottage is usually a modest, often cosy dwelling, typically in a rural or semi-rural location</p>
              <a class="btn btn-outline-primary" href="http://localhost/travel/controller/cottage.php">Book Now</a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="../assets/images/cottage.jpg" class="card-img" alt="hotel">
          </div>
        </div>
      </div>


      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="../assets/images/fivehotel.jpg" class="card-img" alt="hotel">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title mb-2">Five Star Hotel</h5>
              <p class="card-text mb-2">Offering an outdoor pool, spa and fitness centre, TThe Olives is situated with in Gulshan diplomatic zone, 700 meters from High Commission of India in Dhaka.</p>
              <a class="btn btn-outline-primary" href="http://localhost/travel/controller/fivehotel.php">Book Now</a>
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
