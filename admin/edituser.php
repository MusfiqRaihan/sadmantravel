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

<?php if (isset($_SESSION['adminid']) && $_SESSION['adminid'] != 0){
  $id = $_REQUEST['id'];
  $query = mysqli_query($con, "SELECT fullname,email,mobilenumber FROM user where id='$id'");
  $edit = mysqli_fetch_array($query);
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <title>Travel & Tourism - Admin Page</title>
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

<?php include '../includes/adminheader.php' ?>

<div class="container pt-5 pb-4">
  <div class="row">
    <div class="col-md-6 offset-3" style="opacity:0.9">
      <h5 class="text-center mb-3">Edit User by Admin</h5>

      <form action="" method="post" id="">
        <p style="font-size:16px; color:red" align="center">

  <?php
  if(isset($_POST['submit']))
    {
      $fullname=$_POST['fullname'];
      $email=$_POST['email'];
      $mobilenumber=$_POST['mobilenumber'];
      $id = $_REQUEST['id'];
      $query=mysqli_query($con, "UPDATE user SET fullname='$fullname', mobilenumber='$mobilenumber', email='$email' WHERE id='$id'");
      if ($query) {
          $msg="You have successfully Updated"; ?>

          <script type="text/javascript">
            window.location = "http://localhost/travel/admin/admin.php";
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
            <input class="form-control" placeholder="Full Name" name="fullname" type="text" value="<?php echo $edit['fullname'] ?>">
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="E-mail" name="email" type="email" value="<?php echo $edit['email'] ?>">
        </div>
        <div class="form-group">
          <input type="integer" class="form-control" name="mobilenumber" placeholder="Mobile Number e.g. 1729458458" maxlength="10" pattern="[0-9]{10}" value="<?php echo $edit['mobilenumber'] ?>">
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

<?php if (isset($_SESSION['adminid']) && $_SESSION['adminid'] == 0) { ?>
  <script type="text/javascript">
    window.location = "http://localhost/travel/view/404.php";
    </script>
<?php } ?>
