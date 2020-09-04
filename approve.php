<?php
include('conn.php');
$idd=$_GET['ida'];
mysql_query("update login set approve='approve' where id='$idd'");
header("location:view.php");
?>
