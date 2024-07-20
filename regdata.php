<?php
mysql_connect("localhost", "root", "") or die("Connection Error"); //server
mysql_select_db("BulidingDB") or die("Database Error"); //database
$sname = $_POST["ename"];
$address = $_POST["adds"];
$city = $_POST["city"];
$mobile = $_POST["ephone"];
$uname = $_POST["uname"];
$pass = $_POST["pass"];
$utype = $_POST["utype"];
$q = "insert into tb_reg values ('$sname','$address','$city','$mobile','$uname','$pass','$utype')";
mysql_query($q) or die(mysql_error());
if($q)
{
    $message = "Registered Successfull";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo ("<script>window.location = 'login.html';</script>");
}
else{
    $message = "Registered UnSuccessfull";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo ("<script>window.location = 'reg.html';</script>");
}
?>