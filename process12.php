<?php
include("db.php");
$cid=$_REQUEST["id"];
$quy=mysql_query("update tb_building set status='Canceled' where id='$cid'");
$message = "Cancellation Sent";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script language='javascript'>location.href='buildereport.php';</script>"; 
?>
