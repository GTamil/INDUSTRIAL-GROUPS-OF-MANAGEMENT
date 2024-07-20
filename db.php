<?php
$con=mysql_connect("localhost","root","");
if (!$con)  {  
die('Could not connect: ' . mysql_error()); 
 }
$db=mysql_select_db("BulidingDB");
?>