<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GR</title>
    <link rel="shortcut icon" href="Assets/Img/About WO.png" type="image/png">
    <link rel="stylesheet" href="stylet.css">
    <link rel="stylesheet" href="./Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <!--Nav-->
        <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html" onclick="return confirm('Do You Want To Logout..?')">G R</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="tuserhome.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tranadd.php">Transport Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="transtatus.php">Booking Status</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.html" onclick="return confirm('Do You Want To Logout..?')">Log out</a>
                        </li>
                    </ul>
                    <div style="background-color:#000000; color:#FFF; "><a class="nav-link disabled" href="transuserp.php"><i
                                class="bi bi-person-fill">
                                <?php echo $uname = $_SESSION["uname"]; ?>
                            </i></a></div>
                </div>
        </nav>
    </header>

    <section id="home">
    <div class="container">
        <table class="table table-dark table-hover">
        <caption><a href="tusereform.php" onclick="return confirm('Are you sure ? Do You Want Edit Your Profile')" class="btn btn-warning"><b>EDIT PROFILE</b></a></caption>
            <thead class="text-center">
              <tr>
                <th colspan="2">User Profile</th>
              </tr>
            </thead>
            <?php
mysql_connect("localhost", "root" ,"") or die("Connection Error");  //Connection Mysql
mysql_select_db("BulidingDB") or die("Database Error"); //database

$result=mysql_query("Select * from tb_reg where uname='$uname'");
	while ($row = mysql_fetch_array($result))
              { 
		  ?>
            <tbody>
              <tr>
                <th scope="row">Name</th>
                <td><?php echo $row['ename']; ?></td>
              </tr>
              <tr>
                <th scope="row">User Name</th>
                <td><?php echo $row['uname']; ?></td>
              </tr>
              <tr>
                <th scope="row">Email</th>
                <td><?php echo $row['adds']; ?></td>
              </tr>
              <tr>
                <th scope="row">Phone Number</th>
                <td><?php echo $row['phone']; ?></td>
              </tr>
              <tr>
                <th scope="row">Selected Sector</th>
                <td><?php echo $row['utype']; ?></td>
              </tr>
            </tbody>
          </table>
          <?php
	}
	?>
    </div>
</section>


        <footer>
            <div class="container-fluid bg-black bg-opacity-75 text-warning p-5">
                <!-- Grid row -->
                <div class="row mx-auto">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                        <img src="./Assets/Img/About WO.png" class="image-fluid" style="align-items: center;"
                            width="250" height="250">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                    <!-- Links -->
                    <h4 class="text-uppercase mb-4">
                        Sectors
                    </h4>
                    <p>
                        <a href="Mainb.html" class="text-reset text-decoration-none" onclick="return confirm('Do You Want To Logout..?')">Builders</a>
                    </p>
                    <p>
                        <a href="Maint.html" class="text-reset text-decoration-none" onclick="return confirm('Do You Want To Logout..?')">Transport</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-center">
                    <!-- Links -->
                    <h4 class="text-uppercase mb-4">
                        Useful links
                    </h4>
                    <p>
                        <a href="login.html" class="text-reset text-decoration-none" onclick="return confirm('Do You Want To Logout..?')">Login</a>
                    </p>
                    <p>
                        <a href="reg.html" class="text-reset text-decoration-none" onclick="return confirm('Do You Want To Logout..?')">Register</a>
                    </p>
                </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-center">
                        <!-- Links -->
                        <h4 class="text-uppercase mb-4">
                            Contact
                        </h4>
                        <p><i class="bi bi-geo-alt-fill"></i> Tiruchirappalli, Tamilnadu, India</p>
                        <p><i class="bi bi-envelope-fill"></i> xyz@gmail.com</p>
                        <p><i class="bi bi-telephone-fill"></i> +91 1234567890</p>
                        <p><i class="bi bi-telephone-fill"></i> 0431 2345678</p>
                    </div>
                    <!-- Grid column -->
                </div>
            </div>
            <!-- Grid row -->
        </footer>
    <!-- Footer -->

    <!--Script-->
    <script src="./Assets/js/jquery.min.js"></script>
    <script src="./Assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <!-- <script>
        function myfunction(){
            alert("Successfully Booked");
        }
    </script>-->
    <!--Script-->
</body>
</html>