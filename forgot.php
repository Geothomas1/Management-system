<?php
include('conn.php');

?>
<html>
<head><title>Forgot Password</title>
 <link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-georgia.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>

<style>
 body{
	/* [disabled]font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif; */
	background: url(images/bgnoise_lg.png);
}
.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
}
.loginf{
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
      <br><br><br><br><br><br><br>
<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Forgot Password</h2>

  <form class="login-container" method="post">
    <p><input type="text" name="phone"  class="username" placeholder="Enter Your  Registerd Mobile Number"/></p>
    <p><input type="submit" name="forgot" value="Submit"></p>
  <br>
  </form>
</div>
</div>
<?php
if(isset($_POST['forgot']))
{
$mobile=$_POST['phone'];
if(!empty($mobile))
{
$result=mysql_query("select * from registration where phone='$mobile'");
while($row=mysql_fetch_array($result))
{
$forgot=$row[12];	
$res=mysql_query("select * from login where id='$forgot'");
while($rowf=mysql_fetch_array($res))
{
$username=$rowf[1];
$password=$rowf[2];		

echo "<div class='loginf'>";
echo "<p class='login-container'>";
echo "<br>";
echo "<b style='color:teal'>USERNAME</b><b style='color:black'>::</b><b style='color:Green'>".$username."</b><br>";
echo "<br>";
echo "<b style='color:teal'>PASSWORD</b><b style='color:black'>::</b><b style='color:Green'>".$password."</b><br>";
echo "</p>";
  echo "</div>";
}
}
}else
{
echo '<script language="javascript">';
echo 'alert("Enter Registerd Number Or Feild is Null")';
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
</html>>
