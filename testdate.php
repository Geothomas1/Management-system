<?php
   include ('conn.php');
    session_start();
$check=$_SESSION['id'];
if($check=='')
{
	
header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Exam Date</title>
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
  width: 500px;
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
  border-bottom-color: teal;
}

.login-header {
  background: teal;;
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

<body>
<center>
<div class="adminu">RTO ACTIVITY PANEL</div>
<br>
<a  href="view.php" style="float:left"><img src="backn.png" width="40px" height="40px"></a>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<br>
<div align="center">
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">ONLINE EXAM DATE</h2>

<div class="login-container">

<form name="form1" method="post" action="">
<input type="date" name="tdate">
<br><br>
<input type="submit" name="dsubmit">
</form>
</div>
</div>
</div>

</center>
<?php
//if in case of first time check with the same vode of login.php if alerady test date allocated then update then it usind udate satement
if(isset($_POST['dsubmit']))
{
$checker=1;
$get=$_GET['testid'];
$getdate=$_POST['tdate'];
$result="select * from result where userid='$get'";
$res=mysql_query($result);
  $num=mysql_num_rows($res);
  $num1=mysql_fetch_array($res);
if($num==0)
{
mysql_query("insert into result(testdate,checker,userid) values('$getdate',$checker,$get)");
header('location:view.php');	
}
else
{	
echo $checker=$checker+1;
mysql_query("update result set testdate='$getdate',checker=$checker where userid='$get'");
header('location:view.php');
}
}
?>

</body>
</html>