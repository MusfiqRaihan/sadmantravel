<?php
  session_start();
include('../models/dbconnection.php');
$_SESSION['plane_key']= 0;
$_SESSION['train_key']= 0;
$_SESSION['bus_key']= 0;

$_SESSION['hotel_key']= 0;
$_SESSION['cottage_key']= 0;
$_SESSION['fihotel_key']= 0;
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
     <title>Travel & Tourism - Package Information</title>
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
              <h4 class="text-center mb-4">Package Informaton</h4>

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


                <?php if (isset($_SESSION['spackage_key']) && $_SESSION['spackage_key'] != 0){
                  $spackageid = $_SESSION['spackage_key'];

                  $spackagequery = mysqli_query($con, "SELECT * FROM spackage where spackage_id='$spackageid'");
                  $spackage = mysqli_fetch_array($spackagequery);
                  ?>


                  <p style="padding-bottom:10px;">SMALL Package_ID: <?php echo $spackage["spackage_id"] ?>1010</p>
                  <p style="padding-bottom:10px;">Person(s): <?php echo $spackage["person"] ?></p>
                  <p style="padding-bottom:10px;">From: <?php echo $spackage["fromplace"] ?></p>
                  <p style="padding-bottom:10px;">Trip: <?php echo $spackage["trip"] ?></p>
                  <p style="padding-bottom:10px;">Trip Month: <?php echo $spackage["month"] ?></p>

            </div>

            <div class="col-md-4 mt-3">
                  <p style="padding-bottom:10px;">Staying: <?php echo $spackage["stay"] ?></p>
                  <p style="padding-bottom:10px;">Address: <?php echo $spackage["address"] ?></p>
                  <p style="padding-bottom:10px;">Price: <?php echo $spackage["price"] ?></p>
            </div>



        </div>

          <?php    } ?>





                  <?php if (isset($_SESSION['mpackage_key']) && $_SESSION['mpackage_key'] != 0){
                    $mpackageid = $_SESSION['mpackage_key'];

                    $mpackagequery = mysqli_query($con, "SELECT * FROM mpackage where mpackage_id='$mpackageid'");
                    $mpackage = mysqli_fetch_array($mpackagequery);
                    ?>


                    <p style="padding-bottom:10px;">MEDIUM Package_ID: <?php echo $mpackage["mpackage_id"] ?>1010</p>
                    <p style="padding-bottom:10px;">Person(s): <?php echo $mpackage["person"] ?></p>
                    <p style="padding-bottom:10px;">From: <?php echo $mpackage["fromplace"] ?></p>
                    <p style="padding-bottom:10px;">Trip: <?php echo $mpackage["trip"] ?></p>
                    <p style="padding-bottom:10px;">Trip Month: <?php echo $mpackage["month"] ?></p>

              </div>

              <div class="col-md-4 mt-3">
                    <p style="padding-bottom:10px;">Staying: <?php echo $mpackage["stay"] ?></p>
                    <p style="padding-bottom:10px;">Address: <?php echo $mpackage["address"] ?></p>
                    <p style="padding-bottom:10px;">Price: <?php echo $mpackage["price"] ?></p>
              </div>



            </div>

              <?php    } ?>




              <?php if (isset($_SESSION['lpackage_key']) && $_SESSION['lpackage_key'] != 0){
                $lpackageid = $_SESSION['lpackage_key'];

                $lpackagequery = mysqli_query($con, "SELECT * FROM lpackage where lpackage_id='$lpackageid'");
                $lpackage = mysqli_fetch_array($lpackagequery);
                ?>


                <p style="padding-bottom:10px;">LARGE Package_ID: <?php echo $lpackage["lpackage_id"] ?>1010</p>
                <p style="padding-bottom:10px;">Person(s): <?php echo $lpackage["person"] ?></p>
                <p style="padding-bottom:10px;">From: <?php echo $lpackage["fromplace"] ?></p>
                <p style="padding-bottom:10px;">Trip: <?php echo $lpackage["trip"] ?></p>
                <p style="padding-bottom:10px;">Trip Month: <?php echo $lpackage["month"] ?></p>

          </div>

          <div class="col-md-4 mt-3">
                <p style="padding-bottom:10px;">Staying: <?php echo $lpackage["stay"] ?></p>
                <p style="padding-bottom:10px;">Address: <?php echo $lpackage["address"] ?></p>
                <p style="padding-bottom:10px;">Price: <?php echo $lpackage["price"] ?></p>
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
