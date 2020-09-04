<html>
<head>

<style>
 body{
	font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	background:url(images/bgnoise_lg.png);
}

.adminu{
	
	border: 2px  double black;
    color: white;
    padding: 30px 44%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	background-color:#008CBA; 
    color:white; 
    
}
.adminu:hover{
	border: 2px  double teal;
	background-color:#e7e7e7;;
    color:black;
	
}



.buffer{
	width:400;
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.buffer:hover {
    background-color: #555555;
    color: white;
}
.logout:hover {
    background-color:#A9A9A9;
    color:white ;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

.login {
  width: 200px;
  margin: 16px auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  background: #ebebeb;
  padding: 12px;
}
</style>
</head>
<?php
include('conn.php');
session_start();
$d=$_SESSION['id'];
$result=mysql_query("select * from registration where id='$d'");
while($row=mysql_fetch_array($result))
{
$regid=$row[0];
$fname=$row[1];
$lname=$row[2];
$image=$row[15];
}
if($d=='')
{
	
header("location:login.php");
}
?>
<body>
<center>
<div class="adminu">
USER PANEL
</div>
<?php
echo "<br><b style='color:Teal;float:left'>".$fname." ".$lname."</b>";
?>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<br><br>
<img src="myfolder/<?php echo $image;?>" style="border-radius:70px;
  width:110px;
  height:110px;
  float:left;">
<center>
<div style="float:right">
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Notification</h2>

  <p class="login-container">
 <?php
 
$lnoti=mysql_query("select * from notification where userid='$d'");
while($get=mysql_fetch_array($lnoti))
{
	 $value=$get[1];
}
if(empty($value))
{
	$mess="You Have No Notitfication";
	echo "<b style='color:red'>".$mess."</b><br><br>";
}else
{
	echo "<b style=color:green; font-size:14px'>".$value."</b><br><br>";
}

$vnoti=mysql_query("select * from notification where vuserid='$d'");
while($getv=mysql_fetch_array($vnoti))
{
	 $vvalue=$getv[5];
}
if(empty($vvalue))
{
	echo "";
}else
{
	echo "<b style=color:Teal;font-size:14px'>".$vvalue."</b>";
}
$godate=mysql_query("select * from result where userid='$d'");
while($gettestdate=mysql_fetch_array($godate))
{
$getuserdate=$gettestdate[1];
$mark=$gettestdate[4];

$count=$gettestdate[5];
echo "<b style='color:Blue;'> Your Test Date : $getuserdate </b>";
}

if(empty($count))
{
if(!empty($getuserdate))
{
if($getuserdate===date('Y-m-d'))
{	
$ot="ONLINE TEST";
echo "<br><br><b style='color:Greem;text-decoration:none;'><a href='test.php' style='text-decoration:none;'>".$ot."</a></b>";
}
}
}
if(!empty($mark))
{ 
if($mark>=5)
{
echo "<b style='color:green'><br><br>Congratzz....You Passed</b>";
}
else
{
echo "<b style='color:red'><br><br>You Failed Try Next Time</b>";
}
}
?> 
</p>
</div>
</div>
</div><br><br><br><br><br><br>
<div align="center" >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="displayuser.php" class="buffer">VIEW YOUR PROFILE</a><br<br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="applyls.php" class="buffer">LICENCS REGISTRATION</a><br><br><br>
<a href="vehicle.php" class="buffer">VEHICLE REGISTRATION</a><br><br><br>
<?php
if(!empty($mark))
{ 
if($mark>=5)
{
echo "<a href='downlord.php' class='buffer'>DOWNLOAD CERTIFICATE</a>";
}
else
{
echo "";
}
}
?>
</div>
</body>
</html>