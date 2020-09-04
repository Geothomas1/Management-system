<?php
include('conn.php');
$idd=$_GET['id'];
mysql_query("delete from registration where id='$idd'");
mysql_query("delete from login where id='$idd'");
header("location:view.php");
?>
