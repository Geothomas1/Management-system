<?php
include('conn.php');

?>
<html>
<head><title>HOME</title>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>

<style>
 body{
	font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	background:url(images/bgnoise_lg.png);

}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
  float:right; 
  }

.username{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #ccc 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
  background:#2ecc71;
  width:125px;
  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #27ae60 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  float:left;
  margin-left:16px;
  font-weight:800;
  font-size:0.8em;
}

.btn:hover{
  background:#2CC06B; 
}

#btn2{
  float:left;
  background:#3498db;
  width:125px;  padding-top:5px;
  padding-bottom:5px;
  color:white;
  border-radius:4px;
  border: #2980b9 1px solid;
  
  margin-top:20px;
  margin-bottom:20px;
  margin-left:10px;
  font-weight:800;
  font-size:0.8em;
}

#btn2:hover{ 
background:#3594D2; 
}
#slideshow {
  margin: 80px auto;
  position: relative;
  width: 240px;
  height: 240px;
  padding: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}

#slideshow > div {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
}
.login {
  width: 400px;
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

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="email"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="email"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #17c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
</style>
</head>
<body>
<div class="logo">
        <img src="images/logo.png" width="150px" height="150px"/>
      </div>
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="userreg.php"><span>Registration</span></a></li>
          <li><a href="login.php"><span>Login</span></a></li>
          <li><a href="services.php"><span>Act & Rules</span></a></li>
        </ul>
      </div>
      </div>
      </div>
      <br><br><br><br><br><br>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" method="post">
    <p><input type="text" name="username"  class="username" placeholder="Enter  Username"/></p>
    <p><input type="password" name="password"  class="username" placeholder="Enter  Password"/>
  </p>
    <p><input type="submit" name="login" value="Submit"></p>
  <br>
  <a href="forgot.php" style="text-decoration:none;color:#00F; font-size:16px; float:right;">Forgot password</a>
  </form>
 
</div>

</div>
<?php
session_start();
//error_reporting(0);
if(isset($_POST['login']))
{
$user=$_POST['username'];
$pass=$_POST['password'];
$result="select * from login where username='$user' and password='$pass'";
$res=mysql_query($result);
 $num=mysql_num_rows($res);
 $num1=mysql_fetch_array($res);
 $id=$num1[0];
 $_SESSION['userd']=$num1[0];
 $status=$num1[3];
$_SESSION['check_log']=$num1[4];
if($num==1 && $status=='admin')
{
echo $_SESSION['id']=$id;
header('location:adminlogin.php');
}
elseif($num==1 && $status=='user')
{
echo $_SESSION['id']=$id;
header('location:userlogin.php');
}
elseif($num==1 && $status=='rto')
{
echo $_SESSION['id']=$id;
header('location:rtolsogin.php');
}
else
{
echo '<script language="javascript">';
echo 'alert("Invalid Username or Password")';
echo '</script>';
}
}
?>
<div class="fbg">
    <div class="fbg_resize">
    
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Motor Vehicles Department: The Motor Vehicles Department is regulated by the Government of Kerala in terms of policy formulation and its implementation.  The Department is administered by the Transport Commissioner who is the Head of Department.</p>
        <ul class="fbg_ul">
          <li><a href="#">Enforcement of the Motor Vehicles Act and Rules</a></li>
          <li><a href="#">Registration of vehicles</a></li>
          <li><a href="#">Collection of taxes and fees</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p></p>
        <p class="contact_info"> <span>Address:</span> Thiruvandapuram Head Office<br />
          <span>Telephone:</span> 0485-2444551<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> 91152000000<br />
          <span>E-mail:</span> <a href="#">mvd07@gmail.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">&copy; Copyright <a href="#">GA</a>.</p>
      
      <div style="clear:both;"></div>
    </div>
  </div>
</div>

</body>
</html>
