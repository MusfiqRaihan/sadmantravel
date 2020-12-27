<?php
  session_start();
include('models/dbconnection.php');
include('includes/files.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Welcome To Travel & Tourism</title>
    <link rel="stylesheet" href="assets/font/flaticon.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/dd.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link href="assets/css/jquery.fancybox.min.html" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-1.css">
    <link rel="stylesheet" href="assets/css/responsive-1.css">
</head>

<body>


    <a href="#" id="back-top-btn">
       <i class="fas fa-angle-double-up"></i>
     </a>



<?php include 'includes/header.php' ?>





    <section id="banner_part" class="banner-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 banner-center">
                    <div class="banner-text-t">

                        <h2>Discover</h2>
                        <h5>The world together</h5>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="about-us" class="about-us mb-5">
          <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-12">
                     <div class="row">
              <div class="col-md-4">
                      <div class="heading">
                          <h4>about us</h4>
                      </div>
                  </div>
              </div>
              <div class="row">
              <div class="col-md-10">
                      <div class="sub-header">
                          <h3>Explore more about our
  travel agency</h3>
                      </div>
                  </div>
              </div>
              <div class="row">
                    <div class="col-md-12">
                    <div class="about-para">
                        <p>Travel & Tourism is a full-service Outbound Tour Operator in Bangladesh. The founder of Travel & Tourism is a 100% tourism professional with knowledge in most of the destinations and services in the world for people to enjoy.</p>

                          <p>Our specialized departments with expertise offer a variety of services. Each department works independently to provide best services to our customers& clients and become the best travel agency in Bangladesh, focusing on creating friendship and a long lasting relationship with our beloved clients.</p>
                    </div>
                    <div class="about-btn travel-btn">
						<a href="view/aboutus.php" class="btn-4">Explore More</a>
					</div>
                </div>

            </div>
               </div>
               <div class="col-lg-3 col-md-6">
                    <div class="about-f-img">
                        <img src="assets/images/about-image-1.jpg" class="img-fluid" alt="about">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-s-img">
                        <img src="assets/images/about-image-2.jpg" class="img-fluid" alt="about">
                    </div>
                </div>
           </div>

        </div>
    </section>




<?php include 'includes/footer.php'; ?>


    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/waypoints.min.html"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.dd.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>
