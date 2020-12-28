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

<div class="container py-5">
  <div class="row">

    <div class="col-md-6 offset-3">
        <h4 class="text-center mb-4">Subscribers List</h4>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sql = "SELECT * from subscribe";
              $result = $con -> query($sql);

          if ($result -> num_rows > 0){
              while ($row = $result -> fetch_assoc()){ ?>
              <tr>
                <th scope="row"><?php echo $row["id"]; ?></th>
                <td><?php echo $row["email"]; ?></td>
                <td>
                  <a href="http://localhost/travel/admin/deletesubscribe.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
              </tr>
            <?php } ?>
        <?php } ?>
            </tbody>
          </table>
    </div>

  </div>
</div>

<br /><br /><br /><br /><br /><br /><br /><br />

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
