<?php
include("db.php");
$cid=$_REQUEST["id"];
$quy=mysql_query("update tb_trans set status='Accepted' where id='$cid'");
$message = "Confirmation Sent";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script language='javascript'>location.href='tranreport.php';</script>"; 
?>