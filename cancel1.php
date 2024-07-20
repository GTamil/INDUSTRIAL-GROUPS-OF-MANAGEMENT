<?php
include("db.php");
$quy=mysql_query("update tb_building set request='Cancel The Booking' where id");
$message = "Request Has Been Sent";
        echo "<script type='text/javascript'>alert('$message');</script>";
echo "<script language='javascript'>location.href='buildstatus.php';</script>"; 
?>