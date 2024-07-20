<?php session_start();?>
<?php
include 'db.php';
$qry = "SELECT id FROM tb_building ORDER BY id DESC";
$set = mysql_query($qry);
$data = mysql_fetch_assoc($set);
$id = $data['id'];
$id = $id + 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GR</title>
    <link rel="shortcut icon" href="Assets/Img/About WO.png" type="image/png">
    <link rel="stylesheet" href="styleb.css">
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
                            <a class="nav-link" href="buserhome.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="builadd.php">Builders Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="buildstatus.php">Booking Status</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="index.html" onclick="return confirm('Do You Want To Logout..?')">Log out</a>
                        </li>
                    </ul>
                    <div style="background-color:#000000; color:#FFF; "><a class="nav-link disabled" href="buserp.php"><i
                                class="bi bi-person-fill">
                                <?php echo $uname = $_SESSION["uname"]; ?>
                            </i></a></div>
                </div>
        </nav>
    </header>

    <section id="home">
        <div class="container">
            <h2 class="text-center">Register Your Booking</h2>
            <div class="register">
                <div class="left">
                    <form action="buildata.php" method="post">

                        <div class="row">
                            <div class="col-sm-12 col-md-6 ">
                                <div class="input-group">
                                    <label>Name</label>
                                    <input name="ename" type="text" id="ename" placeholder="Full Name" required>
                                    <input name="id" type="hidden"  class="txt" id="id" value="<?php echo $id; ?>"/>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="input-group">
                                    <label>Mobile Number</label>
                                    <input name="phone" type="text" id="phone" placeholder="Mobile" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="input-group">
                                    <label>Alter Mobile Number</label>
                                    <input name="phone1" type="text" id="phone1" placeholder="Alternate Mobile"
                                        required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="input-group">
                                    <label>E-mail</label>
                                    <input name="email" type="text" id="email" placeholder="Mail" required>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="input-group">
                                    <label>City</label>
                                    <select name="city" placeholder="City" required>
                                        <option value="">Select City</option>
                                        <option>Chennai</option>
                                        <option>Tiruchirappalli</option>
                                        <option>Coimbatore</option>
                                        <option>Madurai</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="input-group">
                                    <label>Area</label>
                                    <select name="area" id="area" placeholder="Area" required>
                                        <option value="">Select Area</option>
                                        <option>South Chennai</option>
                                        <option>Nungambakam</option>
                                        <option>Anna Nagar</option>
                                        <option>Purasavakkam</option>
                                        <option>Thambaram</option>
                                        <option>Srirangam</option>
                                        <option>Edamalaipatti</option>
                                        <option>Vayalur</option>
                                        <option>Samayapuram</option>
                                        <option>Viralimalai</option>
                                        <option>Lalgudi</option>
                                        <option>Pollachi road</option>
                                        <option>R.S Puram</option>
                                        <option>Saravanampatti</option>
                                        <option>80 Feet Road</option>
                                        <option>Anaiyur</option>
                                        <option>Anuppanadi</option>
                                        <option>Anna Nagar</option>
                                        <option>Andalpuram</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="input-group">
                                    <label>Select Category</label>
                                    <select name="cat" id="cat" placeholder="Select Category" required>
                                        <option value="">Select Category</option>
                                        <option>Villa</option>
                                        <option>Apartment</option>
                                        <option>Commercial</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <div class="input-group">
                                    <label>Plot Size</label>
                                    <select name="size" id="size" placeholder="Plot Size" required>
                                        <option value="">Select Size</option>
                                        <option>1000 sqft</option>
                                        <option>1500 sqft</option>
                                        <option>2000 sqft</option>
                                        <option>2500 sqft</option>
                                        <option>5000 sqft</option>
                                        <option>7000 sqft</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12">
                            <div class="form-outline mb-6">
                                    <label>Queries</label>
                                    <textarea class="form-control" rows="4" name="adds" type="text" id="adds" required></textarea>
                                </div>
                            </div>

                        </div>
                        <button class="submit" type="submit" name="submit"><b>BOOK</b></button>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <footer>
        <div class="container-fluid bg-black bg-opacity-75 text-warning p-5">
            <!-- Grid row -->
            <div class="row mx-auto">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                    <img src="./Assets/Img/About WO.png" class="image-fluid" style="align-items: center;" width="250"
                        height="250">
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
    <!--Script End-->
</body>
</html>