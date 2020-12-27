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
     <title>Travel & Tourism - Book Bus Ticket page</title>
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
            <div class="col-md-12">

            <div class="row">
              <div class="col-md-5">
                <h4>Bus Ticket Applying Procedure</h4>

              <?php
              $id = $_SESSION['logedin'];
              $query = mysqli_query($con, "SELECT fullname,email,mobilenumber FROM user where id='$id'");
              $row = mysqli_fetch_array($query);

              ?>

              <p style="padding-bottom:10px;padding-top:15px;">Name: <?php echo $row["fullname"] ?></p>
              <p style="padding-bottom:10px;">Email: <?php echo $row["email"] ?></p>
              <p style="padding-bottom:10px;">Phone: <?php echo $row["mobilenumber"] ?></p>

              </div>

              <div class="col-md-7">
                <form action="" method="post" id="" name="submit">

                  <p style="font-size:16px;color:green;text-align:center;margin-top:-10px;">

                  <?php
                  if(isset($_POST['submit']))
                    {
                      $id = $_SESSION['logedin'];
                      $userquery = mysqli_query($con, "SELECT * FROM user where id='$id'");
                      $row = mysqli_fetch_array($userquery);



                      $user_id=$row['id'];
                      $seat=$_POST['seat'];
                      $type=$_POST['type'];
                      $fromplace=$_POST['fromplace'];
                      $toplace=$_POST['toplace'];
                      $startdate=$_POST['startdate'];
                      $returndate=$_POST['returndate'];
                      $address=$_POST['address'];

                      $query=mysqli_query($con, "insert into bus_ticket(user_id,seat,type,fromplace,toplace,startdate,returndate,address)
                       value('$user_id', '$seat', '$type', '$fromplace', '$toplace', '$startdate', '$returndate', '$address')");

                       if ($query) {
                         $id = $_SESSION['logedin'];
                         $bus_id = mysqli_insert_id($con);
                         $_SESSION['bus_key']=$bus_id;
                          ?>
                         <script type="text/javascript">
                           window.location = "http://localhost/travel/controller/tickettemplate.php";
                         </script>

                        <?php } else {
                         $msg="Something Went Wrong. Please try again!";
                       }

                     echo $msg;

                   }
                ?>
              </p>


                  <div class="row">
                    <div class="col-md-6">


                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Class</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="seat">
                          <option selected>Choose...</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                          <option value="5">Five</option>
                        </select>
                      </div>

                    </div>

                    <div class="col-md-6">

                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="type" value="AC" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">AC</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="type" value="Non-AC" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Non AC</label>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">From</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="fromplace">
                          <option selected>Choose...</option>
                          <option value="Dhaka">Dhaka</option>
                          <option value="Jessore">Jessore</option>
                          <option value="Khulna">Khulna</option>
                          <option value="Chittagong">Chittagong</option>
                          <option value="Rajshahi">Rajshahi</option>
                        </select>
                      </div>
                    </div>


                    <div class="col-md-6">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">To</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="toplace">
                          <option selected>Choose...</option>
                          <option value="Dhaka">Dhaka</option>
                          <option value="Jessore">Jessore</option>
                          <option value="Khulna">Khulna</option>
                          <option value="Chittagong">Chittagong</option>
                          <option value="Rajshahi">Rajshahi</option>
                        </select>
                      </div>
                    </div>



                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputAddress">Date of Journey</label>
                        <input type="date" class="form-control" name="startdate" id="inputAddress" placeholder="10/01/2021">
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="inputAddress">Return Date </label><small> (Optional)</small>
                        <input type="date" class="form-control" name="returndate" id="inputAddress" placeholder="20/01/2021">
                      </div>
                    </div>



                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                      </div>
                    </div>






                  </div>

                  <div class="text-center">
                    <a href="http://localhost/travel/view/bookticket.php" class="btn btn-danger btn-style">Cancel</a>
                    <button type="submit" value="submit" name="submit" class="btn btn-success btn-stylesheet ml-2">Submit</button>
                  </div>
                </form>
              </div>

            </div>





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
