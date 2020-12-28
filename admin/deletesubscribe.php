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

  $id=$_REQUEST['id'];
  $query = "DELETE FROM subscribe WHERE id=$id";
  $result = mysqli_query($con,$query) or die ( mysqli_error());
  header("Location: http://localhost/travel/admin/subscribers.php");

   ?>


<?php } ?>

<?php if (isset($_SESSION['adminid']) && $_SESSION['adminid'] == 0) { ?>
  <script type="text/javascript">
    window.location = "http://localhost/travel/view/404.php";
    </script>
<?php } ?>
