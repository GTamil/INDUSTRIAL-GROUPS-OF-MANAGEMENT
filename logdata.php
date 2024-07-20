<?php session_start();?>
<?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$utype=$_POST['utype'];

mysql_connect("localhost", "root" ,"") or die("Connection Error");  //Connection Mysql
mysql_select_db("BulidingDB") or die("Database Error"); //database
$q=mysql_query("select * from tb_reg where uname='$uname' and pass='$pass' and utype='$utype'");   // fetch Record
$r=mysql_fetch_array($q);

if($r['uname']==$uname && $r['pass']==$pass && $r['utype']=='Buliders')
{
 $_SESSION['uname'] = $r["uname"]; 
 header("location:buserhome.php");
}
 else if($r['uname']==$uname && $r['pass']==$pass && $r['utype']=='Transport')
{
 $_SESSION['uname'] = $r["uname"];  
 header("location:tuserhome.php");
}
else if($uname=="admin" && $pass=="123")
{
header("location:adminmain.php");
}
else
{
$message = "Username and/or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo("<script>window.location = 'login.html';</script>");
}
?> 