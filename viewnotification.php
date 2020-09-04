<?php
include ('conn.php');
session_start();
$check=$_SESSION['id'];
$d=$_SESSION['check_log'];
if($check=='')
{
	
header("location:login.php");
}

?>


<!DOCTYPE html>
<html>
<head>
<title>View Notification</title>
</head>

<body>
<a href="rtolsogin.php" style="text-decoration:none; float:left;">BACK</a>
<br>
<br>

<br>
<center><p><b style="color:teal;">NOTIFICATION</b></p>
<table style="border:dashed;">
<?php
$d=$_SESSION['check_log'];
$result=mysql_query("select * from notification where rtoid=$d");
$l=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{
$mess=$row[1];
?>
<tr>
<td>
<p>
<?php

echo $mess;
?>
</p>
</td>
</tr>
<?php
}
?>
<tr>
<td>
</td>
</tr>
</table>
<a  style="text-decoration:none;" href="dnoti.php?rtoid=<?php echo $d;?>">Clear All Notification</a>
</center>
</body>

</html>
