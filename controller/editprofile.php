<?php
  session_start();
  $_SESSION['plane_key']= 0;
  $_SESSION['train_key']= 0;
  $_SESSION['bus_key']= 0;
include('../models/dbconnection.php');
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
    <title>Travel & Tourism - Edit <?php echo $row["fullname"] ?>'s Profile</title>
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

      <form action="" method="post" id="" name="signup">
        <p style="font-size:16px; color:red" align="center">

  <?php
  if(isset($_POST['submit']))
    {
      $fullname=$_POST['fullname'];
      $mobilenumber=$_POST['mobilenumber'];

      $query=mysqli_query($con, "UPDATE user SET fullname='$fullname', mobilenumber='$mobilenumber' WHERE id='$id'");
      if ($query) {
          $msg="You have successfully Updated"; ?>

          <script type="text/javascript">
            window.location = "http://localhost/travel/view/dashboard.php";
            </script>

  <?php  }
    else
      {
        $msg="Something Went Wrong. Please try again!";
      }
    echo $msg;

  }
?>
        </p>

        <div class="form-group">
            <input class="form-control" placeholder="Full Name" name="fullname" type="text" value="<?php echo $row['fullname'] ?>">
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo $row['email'] ?>" disabled>
        </div>
        <div class="form-group">
          <input type="integer" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number e.g. 1729458458" maxlength="10" pattern="[0-9]{10}" value="<?php echo $row['mobilenumber'] ?>">
        </div>
        <div class="text-center">
          <button type="submit" value="submit" name="submit" class="btn btn-success btn-style">Update</button>
          <a href="http://localhost/travel/view/dashboard.php" class="btn btn-danger ml-2 btn-style">Cancel</a>
        </div>
      </form>


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

<?php } ?>



<?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == 0) { ?>
  <script type="text/javascript">
    window.location = "http://localhost/travel/view/404.php";
    </script>
<?php } ?>
