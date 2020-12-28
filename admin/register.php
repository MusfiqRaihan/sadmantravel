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
      <h5 class="text-center mb-3">User Registration by Admin</h5>

      <form action="" method="post" id="" name="signup" onsubmit="return checkpass();">
        <p style="font-size:16px; color:red" align="center">

    <?php
    if(isset($_POST['submit']))
    {
      $fullname=$_POST['fullname'];
      $mobilenumber=$_POST['mobilenumber'];
      $email=$_POST['email'];
      $password=md5($_POST['password']);

      $ret=mysqli_query($con, "select email from user where email='$email' ");
      $result=mysqli_fetch_array($ret);
      if($result>0){
        $msg="This email  associated with another account";
      }
      else{
      $query=mysqli_query($con, "insert into user(fullname, mobilenumber, email,  password)
       value('$fullname', '$mobilenumber', '$email', '$password')");
      if ($query) {
          $msg="You have successfully registered";
    }
    else
      {
        $msg="Something Went Wrong. Please try again!";
      }
    }
    echo $msg;

    }
    ?>
        </p>

        <div class="form-group">
            <input class="form-control" placeholder="Full Name" name="fullname" type="text" required="true">
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="E-mail" name="email" type="email" required="true">
        </div>
        <div class="form-group">
          <input type="integer" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number e.g. 1729458458" maxlength="10" pattern="[0-9]{10}" required="true">
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="Password" name="password" type="password" value="" required="true" min="8">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password" required="true">
        </div>
        <div class="text-center">
          <button type="submit" value="submit" name="submit" class="btn btn-success btn-style">Register</button>
          <a href="http://localhost/travel/admin/admin.php" class="btn btn-danger btn-style ml-2">Cancel</a>
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
    <script src="../assets/js/scripts.js"></script>

</body>

</html>

<?php } ?>

<?php if (isset($_SESSION['adminid']) && $_SESSION['adminid'] == 0) { ?>
  <script type="text/javascript">
    window.location = "http://localhost/travel/view/404.php";
    </script>
<?php } ?>
