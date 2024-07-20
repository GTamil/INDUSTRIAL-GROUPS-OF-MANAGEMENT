<?php session_start();?>
<?php
mysql_connect("localhost","root","") or die("Connection Error");//server
mysql_select_db("BulidingDB") or die("Database Error");
    $uname=$_SESSION['uname'];
    $ename=$_POST['ename'];
    $phone=$_POST['phone'];
    $adds=$_POST['adds'];
    $pass = $_POST["pass"];
   
       $q = "update tb_reg set  ename='$ename',phone='$phone',adds='$adds',pass='$pass' where uname='$uname'";
       mysql_query($q) or die (mysql_error());
if($q)
    {
        $message = "Updated Successfull And Login Again";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo ("<script>window.location = 'login.html';</script>");
    }
?>
