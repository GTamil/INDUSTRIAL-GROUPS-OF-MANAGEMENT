<?php session_start();?>
<?php 
mysql_connect("localhost","root","") or die("Connection Error");//server
mysql_select_db("BulidingDB") or die("Database Error"); //database
 $id=$_POST["id"];
 $sname=$_POST["ename"];
 $address=$_POST["adds"];
 $city=$_POST["city"];
 $mobile =$_POST["phone"];
 $mobile1 =$_POST["phone1"];
 $email =$_POST["email"];
  $cat=$_POST["cat"];
  $cat1=$_POST["cat1"];
   $pic=$_POST["pic"];
 $del=$_POST["del"];
 $cat2=$_POST["cat2"];
 $cat3=$_POST["cat3"];
   $mq=$_POST["mq"];
  $no=$_POST["no"];
 $cat4=$_POST["cat4"];
  $lw1=$_POST["lw1"];
  $uname=$_SESSION["uname"];
$q = "insert into tb_trans values ('$id','$sname','$address','$city','$mobile','$mobile1','$email','$cat','$cat1','$pic','$del','$cat2','$cat3','$mq','$no','$cat4','$lw1','Waiting','$uname','')";
mysql_query($q) or die (mysql_error());
if($q)
{
    $message = "Registered Successfull";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo ("<script>window.location = 'transtatus.php';</script>");
}
 ?>