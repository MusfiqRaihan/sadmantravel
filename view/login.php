<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Travel & Tourism - Login page</title>
	<link rel="stylesheet" src="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<style>
	*{
		margin: 0;
		padding: 0;
	}
	.padding_global{
		padding: 130px 0;
	}
	body{
			background-image: url("../assets/images/b.jpg");
			width:100%;
			height: 100vh;
			background-size: cover;
			position: relative;
			background-position: center center;
			background-repeat: no-repeat;
		}
		body::before {
	    position: absolute;
	    left: 0;
	    top: 0;
	    width: 100%;
	    height: 100vh;
	    content: "";
	    background: #000000;
	    opacity: 0.4;
	}
		input.form-control {
		    border-radius: 17px;
				padding: 0 24px;
		}
		.btn-style {
		    padding: 10px 30px;
		    border-radius: 50px;
		}
	</style>


<body>

<div class="container">

  <div class="row padding_global">
      <div class="col-md-6 offset-3">
        <h2 class="text-center"><a style="text-decoration:none;color:white;" href="http://localhost/travel/index.php">Travel & Tourism</a></h2>
        <h6 class="text-center mt-2 text-white">Login Form</h6>
        <form action="" method="post" id="" name="login">
          <p style="font-size:16px; color:red" align="center">
            <?php
            session_start();
            include('../models/dbconnection.php');

            if(isset($_POST['login']))
              {
                $email=$_POST['email'];
                $password=md5($_POST['password']);
                $query=mysqli_query($con,"select id,userType from user where  email='$email' && password='$password' ");
                $ret=mysqli_fetch_array($query);
                if($ret>0){
									if($ret['userType']=="Admin"){
										$_SESSION['adminid']=$ret['id'];
										$_SESSION['logedin']=$ret['id']; ?>
										<script type="text/javascript">
											window.location = "http://localhost/travel/admin/admin.php";
											</script>
						<?php	 }else{
								 $_SESSION['logedin']=$ret['id'];
								header('location:dashboard.php');
							 }

						 }else{
                $msg="Invalid Credentials";
                }
                echo $msg;
              }
              ?>
          </p>

          <div class="form-group">
            <input class="form-control" placeholder="E-mail" name="email" type="email" required="true">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Password" name="password" type="password" value="" required="true">
          </div>
          <div class="text-center">
            <button type="submit" value="login" name="login" class="btn btn-danger btn-style">Login</button>
            <a href="register.php" class="btn btn-success ml-2 btn-style">Register</a>
          </div>
        </form>

      </div>
  </div>

</div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../assets/js/scripts.js"></script>
<script type="text/javascript">

</script>


</html>
