<?php
include('conn.php');
$idd=$_GET['id'];
mysql_query("delete from login where id='$idd'");
mysql_query("delete from rtod where rtoi='$idd'");
header("location:viewrto.php");
?>
