<?php session_start();?>
<?php
mysql_connect("localhost", "root", "") or die("Connection Error"); //server
mysql_select_db("BulidingDB") or die("Database Error"); //database
$id = $_POST["id"];
$sname = $_POST["ename"];
$address = $_POST["adds"];
$city = $_POST["city"];
$mobile = $_POST["phone"];
$mobile1 = $_POST["phone1"];
$email = $_POST["email"];
$cat = $_POST["cat"];
$area = $_POST["area"];
$size = $_POST["size"];
$uname=$_SESSION["uname"];
$q = "insert into tb_building values ('$id','$sname','$address','$city','$mobile','$mobile1','$email','$cat','$area','$size','Waiting','$uname','')";
mysql_query($q) or die(mysql_error());
if($q)
{
    $message = "Registered Successfull";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo ("<script>window.location = 'buildstatus.php';</script>");
}
?>