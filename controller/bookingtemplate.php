<?php
  session_start();
include('../models/dbconnection.php');
$_SESSION['plane_key']= 0;
$_SESSION['train_key']= 0;
$_SESSION['bus_key']= 0;

$_SESSION['spackage_key']= 0;
$_SESSION['mpackage_key']= 0;
$_SESSION['lpackage_key']= 0;
?>

<?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] != 0){
  $id = $_SESSION['logedin'];

  $query = mysqli_query($con, "SELECT fullname,email,mobilenumber FROM user where id='$id'");
  $row = mysqli_fetch_array($query);
   ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Travel & Tourism - Booking Information</title>
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


 </head>

 <body>


     <a href="#" id="back-top-btn">
        <i class="fas fa-angle-double-up"></i>
      </a>

   <?php include '../includes/headersecond.php' ?>


        <div class="container">
          <div class="row py-5">
            <div class="col-md-10 offset-1">
              <h4 class="text-center mb-4">Booking Informaton</h4>

            <div class="row">
              <div class="col-md-4">


              <?php
              $id = $_SESSION['logedin'];
              $query = mysqli_query($con, "SELECT fullname,email,mobilenumber FROM user where id='$id'");
              $row = mysqli_fetch_array($query);

              ?>

              <p style="padding-bottom:10px;padding-top:15px;">Name: <?php echo $row["fullname"] ?></p>
              <p style="padding-bottom:10px;">Email: <?php echo $row["email"] ?></p>
              <p style="padding-bottom:10px;">Phone: <?php echo $row["mobilenumber"] ?></p>

              </div>

              <div class="col-md-4 mt-3">


                <?php if (isset($_SESSION['hotel_key']) && $_SESSION['hotel_key'] != 0){
                  $hotelid = $_SESSION['hotel_key'];

                  $hotelquery = mysqli_query($con, "SELECT * FROM hotel where hotel_id='$hotelid'");
                  $hotel = mysqli_fetch_array($hotelquery);
                  ?>


                  <p style="padding-bottom:10px;">Hotel Booking_ID: <?php echo $hotel["hotel_id"] ?>1010</p>
                  <p style="padding-bottom:10px;">Bed(s): <?php echo $hotel["beds"] ?></p>
                  <p style="padding-bottom:10px;">Class: <?php echo $hotel["type"] ?></p>
                  <p style="padding-bottom:10px;">Staying: <?php echo $hotel["stay"] ?></p>
                  <p style="padding-bottom:10px;">Arival Date: <?php echo $hotel["arival"] ?></p>


            </div>

            <div class="col-md-4 mt-3">
                  <p style="padding-bottom:10px;">Address: <?php echo $hotel["address"] ?></p>

            </div>



        </div>

          <?php    } ?>





                    <?php if (isset($_SESSION['cottage_key']) && $_SESSION['cottage_key'] != 0){
                      $cottageid = $_SESSION['cottage_key'];

                      $cottagequery = mysqli_query($con, "SELECT * FROM cottage where cottage_id='$cottageid'");
                      $cottage = mysqli_fetch_array($cottagequery);
                      ?>


                      <p style="padding-bottom:10px;">COTTAGE Booking_ID: <?php echo $cottage["cottage_id"] ?>1010</p>
                      <p style="padding-bottom:10px;">Class: <?php echo $cottage["type"] ?></p>
                      <p style="padding-bottom:10px;">Staying: <?php echo $cottage["stay"] ?></p>
                      <p style="padding-bottom:10px;">Arival Date: <?php echo $cottage["arival"] ?></p>


                </div>

                <div class="col-md-4 mt-3">
                      <p style="padding-bottom:10px;">Address: <?php echo $cottage["address"] ?></p>

                </div>



            </div>

              <?php    } ?>




                <?php if (isset($_SESSION['fihotel_key']) && $_SESSION['fihotel_key'] != 0){
                  $fihotelid = $_SESSION['fihotel_key'];

                  $fihotelquery = mysqli_query($con, "SELECT * FROM fivehotel where fihotel_id='$fihotelid'");
                  $fihotel = mysqli_fetch_array($fihotelquery);
                  ?>


                  <p style="padding-bottom:10px;">Five Star Hotel Ticket_ID: <?php echo $fihotel["fihotel_id"] ?>1010</p>
                  <p style="padding-bottom:10px;">Bed(s): <?php echo $fihotel["beds"] ?></p>
                  <p style="padding-bottom:10px;">Staying: <?php echo $fihotel["stay"] ?></p>
                  <p style="padding-bottom:10px;">Arrival Date: <?php echo $fihotel["arival"] ?></p>


            </div>

            <div class="col-md-4 mt-3">
                  <p style="padding-bottom:10px;">Address: <?php echo $fihotel["address"] ?></p>

            </div>



        </div>

          <?php    } ?>

          <h6 class="text-center my-3">Call: +880-1729-800000 for more information</h6>
      </div>
    </div>
  </div>

<?php include '../includes/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

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

<?php } ?>

<?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == 0) { ?>
  <script type="text/javascript">
    window.location = "http://localhost/travel/view/login.php";
    </script>
<?php } ?>
