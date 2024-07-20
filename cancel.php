<?php
include("db.php");
// $id=$_REQUEST["id"];
$quy=mysql_query("update tb_trans set request='Cancel The Booking' where id");
$message = "Request Has Been Sent";
echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script language='javascript'>location.href='transtatus.php';</script>"; 
?>