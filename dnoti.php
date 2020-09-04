<?php
include('conn.php');
$idn=$_GET['rtoid'];
mysql_query("delete from notification where rtoid='$idn'");
header('location:viewnotification.php')
?>
