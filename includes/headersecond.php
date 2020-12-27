<header>
          <nav id="nav-part" class="navbar header-nav custom_nav navbar-expand-md other-page">
            <div class="container p-0">
                <a class="navbar-brand">Travel & Tourism</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="http://localhost/travel/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/travel/view/bookticket.php">Book Tickets</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/travel/view/accomodation.php">Accomodations</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/travel/view/tourpackage.php">Tour Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/travel/view/aboutus.php">About Us</a></li>
                        <?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] != 0){
                          $id = $_SESSION['logedin'];
                          $query = mysqli_query($con, "SELECT fullname,email,mobilenumber FROM user where id='$id'");
                          $row = mysqli_fetch_array($query);
                           ?>

                        <li class="dropdown nav-item"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false"><?php echo $row["fullname"] ?></a>
                              <ul class="dropdown-menu maindrop_menu">
                                  <li><a href="http://localhost/travel/view/dashboard.php">Dashboard</a></li>
                                  <li><a href="http://localhost/travel/controller/logout.php">Logout</a></li>
                              </ul>
                          </li>
                        <?php } ?>
                      </ul>
                      <ul class="login_menu navbar-right nav-sign">
                        <?php if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == 0) { ?>
                        <li class="login"><a href="http://localhost/travel/view/register.php" class="btn-4">Sign up /</a><a href="http://localhost/travel/view/login.php" style="margin-left:0!important;" class="btn-4"> login</a></li>
                        <?php } ?>
                      </ul>


                </div>
            </div>
        </nav>
    </header>
