<?php session_start();?>
<?php
include 'db.php';
$qry = "SELECT id FROM tb_trans ORDER BY id DESC";
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
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
        <h2 class="text-center">Register Your Booking</h2>
        <div class="register">
            <div class="left">
                <form action="transdata.php" method="post">
                    <div class="row">
                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Name</label>
                                <input type="text" name="ename" id="ename" placeholder="Full Name" required>
                                <input name="id" type="hidden"  class="txt" id="id" value="<?php echo $id; ?>"/>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Mobile Number</label>
                                <input type="text" name="phone" id="phone" placeholder="Mobile Number" required>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Alter Mobile Number</label>
                                <input type="text" name="phone1" id="phone1" placeholder="Mobile Number" required>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>E-mail</label>
                                <input type="email" name="email" id="email" placeholder="Mail Address" required>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>From </label>
                                <input type="text" list="cities" name="cat" id="cat" placeholder="From ( City )" required>
                                <datalist id="cities">
                                <option value="">Select City</option>
                                    <option>Chennai</option>
                                    <option>Tiruchirappalli</option>
                                    <option>Coimbatore</option>
                                    <option>Madurai</option>
                                    <option>Salem</option>
                                    <option>Kanchipuram</option>
                                    <option>Thanjavur</option>
                                    <option>Pudukkottai</option>
                                    <option>Cuddalore</option>
                                    <option>Virudhunagar</option>
                                    <option>Nagapattinam</option>
                                    <option>Namakkal</option>
                                    <option>Sivaganga</option>
                                    <option>Vellore</option>
                                    <option>Vellore</option>
                                    <option>Tiruvannamalai</option>
                                    <option>Kumbakonam</option>
                                    <option>Dindigul</option>
                                    <option>Tiruppur</option>
                                    <option>Pollachi</option>
                                    <option>Erode</option>
                                    <option>Karur</option>
                                    <option>Hosur</option>
                                    <option>Tirunelveli</option>
                                    <option>Thoothukudi</option>
                                    <option>Nagercoil</option>
                                </datalist>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>To</label>
                                <input type="text" list="cities" name="cat1" id="cat1" placeholder="To ( City )" required>
                                <datalist id="cities">

                                    <option value="">Select City</option>
                                    <option>Chennai</option>
                                    <option>Tiruchirappalli</option>
                                    <option>Coimbatore</option>
                                    <option>Madurai</option>
                                    <option>Salem</option>
                                    <option>Kanchipuram</option>
                                    <option>Thanjavur</option>
                                    <option>Pudukkottai</option>
                                    <option>Cuddalore</option>
                                    <option>Virudhunagar</option>
                                    <option>Nagapattinam</option>
                                    <option>Namakkal</option>
                                    <option>Sivaganga</option>
                                    <option>Vellore</option>
                                    <option>Vellore</option>
                                    <option>Tiruvannamalai</option>
                                    <option>Kumbakonam</option>
                                    <option>Dindigul</option>
                                    <option>Tiruppur</option>
                                    <option>Pollachi</option>
                                    <option>Erode</option>
                                    <option>Karur</option>
                                    <option>Hosur</option>
                                    <option>Tirunelveli</option>
                                    <option>Thoothukudi</option>
                                    <option>Nagercoil</option>
                                </datalist>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Pick Up</label>
                                <input type="date" name="pic" id="pic" required>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Deliver Before</label>
                                <input type="date" name="del" id="del" required>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Select Category</label>
                                <input type="text" list="category" name="cat2" id="cat2" placeholder="Select Category" required>
                                <datalist id="category">
                                <option value="">Select Category</option>
                        <option value="Motorcycles">Bikes</option>
                        <option value="Cars">Sedan's, SUV, Etc...</option>
                        <option value="Home Appliances">Refrigrator, Air Conditioners, TV, Etc..</option>
                        <option value="Furniture">Tables, Chairs, Beds, Etc..</option>
                        <option value="Industrial Machinery">Machinery's</option>
                        <option value="Textile">Cotton, Synthetic, Etc...</option>
                        <option value="Automobile Parts">Engines, Chassis, Transmission System, Etc...</option>
                        <option value="Construction Materials">Cement, Structural Steel, Reinforcement Steel, Sand,Etc..</option>
                        <option value="Containers">Shipping Containers</option>
                        <option value="Other Packages">Other Packages</option>
                    </datalist>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Material Quantity</label>
                                <input type="number" name="mq" id="mq" placeholder="Quantity ( Optional )" required>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Trucks & Trailers</label>
                                <select name="cat3" id="cat3" required>
                        <option value="">Select Truck & Trailers</option>
                        <option>Mini Truck</option>
                        <option>Pickup</option>
                        <option>Tipper (4X2) </option>
                        <option>Tipper (6X2) </option>
                        <option>Tipper (8X4) </option>
                        <option>Semi Trailer</option>
                        <option>Log Carrier</option>
                        <option>18 Wheeler</option>
                        <option>Box Truck</option>
                        <option>Flatbed-Van</option>
                        <option>Flatbed</option>
                        <option>Flatbed (Expandable Drop Deck) </option>
                        <option>Flatbed (Detachable Double Drop 3-Axle) </option>
                        <option>Flatbed (Expandable LowBoy) </option>
                        <option>Flatbed (9-Axle) </option>
                        <option>Carrier</option>
                        <option>Mobile Crane (3-Axle) </option>
                        <option>Mobile Crane (7-Axle) </option>
                        <option>Mobile Crane (9-Axle) </option>
                    </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Number Of Truck</label>
                                <input type="number" name="no" id="no" placeholder="No.of Trucks" required>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Load Weights</label>
                                <select name="cat4" id="cat4" placeholder="weight" required>
                            <option value="">Select Weight</option>
                            <option>In Kgs</option>
                            <option>In Tons</option>
                            </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>Load Weight</label>
                                <input type="number" name="lw1" id="lw1" placeholder="Weight" required>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="form-outline mb-6">
                                <label>Delivery Address</label>
                                <textarea class="form-control" rows="4" name="adds" id="adds" required></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12">
                            <div class="input-group">
                                <label>City</label>
                                <input type="text" name="city" id="City" placeholder="City And Pin Code" required>
                            </div>
                        </div>

                       <!--  <button  onclick="myfunction()" class="submit" type="submit" name="submit"><b>BOOK</b></button> -->
                        <button class="submit" type="submit" name="submit"><b>BOOK</b></button>
                    </div>
                </form>
                </div>
                </div>
                </div>
    </section>

    <!-- Footer -->
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
    </script> -->
    <!--Script-->
</body>
</html>