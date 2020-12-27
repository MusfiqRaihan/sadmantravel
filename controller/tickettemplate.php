<?php
  session_start();
include('../models/dbconnection.php');
$_SESSION['hotel_key']= 0;
$_SESSION['cottage_key']= 0;
$_SESSION['fihotel_key']= 0;

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
     <title>Travel & Tourism - Ticket Information</title>
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
              <h4 class="text-center mb-4">Ticket Informaton</h4>

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


                <?php if (isset($_SESSION['plane_key']) && $_SESSION['plane_key'] != 0){
                  $planeid = $_SESSION['plane_key'];

                  $planequery = mysqli_query($con, "SELECT * FROM plane_ticket where plane_id='$planeid'");
                  $plane = mysqli_fetch_array($planequery);
                  ?>


                  <p style="padding-bottom:10px;">PLANE Ticket_ID: <?php echo $plane["plane_id"] ?>1010</p>
                  <p style="padding-bottom:10px;">Seat(s): <?php echo $plane["seat"] ?></p>
                  <p style="padding-bottom:10px;">Class: <?php echo $plane["type"] ?></p>
                  <p style="padding-bottom:10px;">From: <?php echo $plane["fromplace"] ?></p>
                  <p style="padding-bottom:10px;">To: <?php echo $plane["toplace"] ?></p>


            </div>

            <div class="col-md-4 mt-3">
                  <p style="padding-bottom:10px;">Arrival Date: <?php echo $plane["startdate"] ?></p>
                  <p style="padding-bottom:10px;">Reurn Date: <?php echo $plane["returndate"] ?></p>
                  <p style="padding-bottom:10px;">Address: <?php echo $plane["address"] ?></p>

            </div>



        </div>

          <?php    } ?>





                    <?php if (isset($_SESSION['train_key']) && $_SESSION['train_key'] != 0){
                      $trainid = $_SESSION['train_key'];

                      $trainquery = mysqli_query($con, "SELECT * FROM train_ticket where train_id='$trainid'");
                      $train = mysqli_fetch_array($trainquery);
                      ?>


                      <p style="padding-bottom:10px;">TRAIN Ticket_ID: <?php echo $train["train_id"] ?>1010</p>
                      <p style="padding-bottom:10px;">Seat(s): <?php echo $train["seat"] ?></p>
                      <p style="padding-bottom:10px;">Class: <?php echo $train["type"] ?></p>
                      <p style="padding-bottom:10px;">From: <?php echo $train["fromplace"] ?></p>
                      <p style="padding-bottom:10px;">To: <?php echo $train["toplace"] ?></p>


                </div>

                <div class="col-md-4 mt-3">
                      <p style="padding-bottom:10px;">Arrival Date: <?php echo $train["startdate"] ?></p>
                      <p style="padding-bottom:10px;">Reurn Date: <?php echo $train["returndate"] ?></p>
                      <p style="padding-bottom:10px;">Address: <?php echo $train["address"] ?></p>

                </div>



            </div>

              <?php    } ?>




                <?php if (isset($_SESSION['bus_key']) && $_SESSION['bus_key'] != 0){
                  $busid = $_SESSION['bus_key'];

                  $busquery = mysqli_query($con, "SELECT * FROM bus_ticket where bus_id='$busid'");
                  $bus = mysqli_fetch_array($busquery);
                  ?>


                  <p style="padding-bottom:10px;">BUS Ticket_ID: <?php echo $bus["bus_id"] ?>1010</p>
                  <p style="padding-bottom:10px;">Seat(s): <?php echo $bus["seat"] ?></p>
                  <p style="padding-bottom:10px;">Class: <?php echo $bus["type"] ?></p>
                  <p style="padding-bottom:10px;">From: <?php echo $bus["fromplace"] ?></p>
                  <p style="padding-bottom:10px;">To: <?php echo $bus["toplace"] ?></p>


            </div>

            <div class="col-md-4 mt-3">
                  <p style="padding-bottom:10px;">Arrival Date: <?php echo $bus["startdate"] ?></p>
                  <p style="padding-bottom:10px;">Reurn Date: <?php echo $bus["returndate"] ?></p>
                  <p style="padding-bottom:10px;">Address: <?php echo $bus["address"] ?></p>

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
