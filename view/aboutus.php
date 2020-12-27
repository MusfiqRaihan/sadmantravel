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
    <title>Travel & Tourism - about page</title>
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

    <section id="about-us" class="about-us section">
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

                </div>

            </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="about-f-img">
                        <img src="../assets/images/about-image-1.jpg" class="img-fluid" alt="about">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="about-s-img">
                        <img src="../assets/images/about-image-2.jpg" class="img-fluid" alt="about">
                    </div>
                </div>
           </div>
           <div class="row para-2">
              <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="about-s-img">
                        <img src="../assets/images/about-image-3.jpg" class="img-fluid" alt="about">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="about-f-img">
                        <img src="../assets/images/about-image-4.jpg" class="img-fluid" alt="about">
                    </div>
                </div>
               <div class="col-lg-6 col-md-12">

            <div class="row">

                    <div class="col-md-12">
                    <div class="about-para">
                        <p>In this regards, we have contracts and alliances with most of the hotels, tourist organizations & companies in most of the countries around the world that helps us provide the best quality service to our clients.</p>

                        <p>Moreover, Travel & Tourism is also pleased and appreciative to the staff and personnel who are considered teammates of this company thus helping the staff to upgrade their skills through continuous formal and hands-on training and seminars towards achieving total customer satisfaction and well-being. Their full dedication helps us to become the best travel agency in Bangladesh.  .</p>
                    </div>

                </div>

            </div>
               </div>

           </div>

        </div>
    </section>



		<section id="news" class="newsletter other-news mb-5">
			<div class="container">
				<div class="row justify-content-center text-center">
                    <div class="col-md-12 news-inner">
                        <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="news-text">
                            <h3>Subscribe to Our Newsletter</h3>
                            <p>If you Subscribe to our newsletter, we’ll send you the best deals for you and updates.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="subscribe-search">
                            <form action="" method="post" id="" name="subscribe" >

                              <div class="form-row align-items-center">
                                <div class="col-auto">
                                  <label class="sr-only" for="inlineFormInput">Email</label>
                                  <input class="form-control mb-2" id="inlineFormInput" placeholder="type@email.com" name="email" type="email" required="true">
                                </div>

                                <div class="col-auto">
                                  <button type="submit" value="submit" name="submit" class="btn btn-primary mb-2">Subscribe</button>
                                </div>
                                <p style="color:green;">
                                <?php
                                if(isset($_POST['submit']))
                                  {
                                    $email=$_POST['email'];
                                    $query=mysqli_query($con, "insert into subscribe(email)
                                     value('$email')");
                                    if ($query) {
                                        $msg="Subscribe Done Thanks!";
                                  }
                                  else
                                    {
                                      $msg="Something Went Wrong. Please try again!";
                                    }
                                    echo $msg;
                                  }

                                ?>
                              </p>


                              </div>
                            </form>

                                </div>
                            </form>
                        </div>
                    </div>
                        </div>
                </div>
				</div>
			</div>
		</section>

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
