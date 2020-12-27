<?php
  session_start();
include('../models/dbconnection.php');
include('../includes/files.php');
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
    <title>Travel & Tourism - <?php echo $row["fullname"] ?>'s Dasboard</title>
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





<div class="container">
  <div class="row py-5">
    <div class="col-md-6 offset-3">
      <div class="card">
        <h5 class="card-header">Profile Details</h5>
        <div class="card-body">
          <h5 class="card-title mb-3"><?php echo $row['fullname'] ?>'s Profile</h5>
          <p style="padding-bottom:10px;"><b>Email:</b> <?php echo $row["email"] ?></p>
          <p style="padding-bottom:10px;"><b>Phone:</b> +880-<?php echo $row["mobilenumber"] ?></p>
          <div class="text-left">
            <a href="http://localhost/travel/controller/editprofile.php" class="btn btn-primary">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<br /><br /><br /><br /><br />



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

<?php } ?>



<?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == 0) { ?>
  <script type="text/javascript">
    window.location = "http://localhost/travel/view/404.php";
    </script>
<?php } ?>
