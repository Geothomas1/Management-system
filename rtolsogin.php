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


<html>
<head>
<title>RTO Home Page</title>
<link rel="stylesheet" type="text/css" href="rtostyle.css">
<style>
body{
	font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	background:url(images/bgnoise_lg.png);

}
.adminu{
	
	border: 2px  double black;
    color: white;
    padding: 30px 40%;
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





.login {
  width: 250px;
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

</style>
</head>
<body>
<center>

<div class="adminu">RTO ACTIVITY PANEL</div>
<br>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<br>
<div style="float:right">
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Notification</h2>

  <p class="login-container">
  <?php 
$d=$_SESSION['check_log'];
$result=mysql_query("select * from notificationrto where rtoid='$d'");
$l=mysql_num_rows($result);
while($getmess=mysql_fetch_array($result))
{
$mess=$getmess[1];
?>
<?php
if(empty($mess))
{
$nuser="You Have No Notitfication";
echo "<b style='color:red'>".$nuser."</b><br><br>";
}
else
{
echo "<br><b style='color:green;'>".$mess."</b>";
}
?>
<?php
}
?>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>
<center>
<br>
<a href="view.php" class="buffer">VIEW APPLICATION STATUS</a>
</body>
</html>
