<?php
 include ('conn.php');

 session_start();
 $check=$_SESSION['id'];
if($check=='')
{
	
header("location:login.php");
}
?>
<html>
<head>
 <style>
 body{
	font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	background:url(images/bgnoise_lg.png);

}

input[type=text], select {
    width: 40%;
    padding: 10px 15px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 40%;
    padding: 10px 15px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 20%;
    background-color:teal;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: brown;
}
option:hover{background-color:Thistle ;}

.error {color: #FF0000;text-align: right;}
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





</style>
<title>RTO Registration</title> 
</head>
<?php 
$nameErr=$addErr=$disErr=
$namev=$addv=$disv="";
$phoneErr = $passErr =  $confErr =$userErr = $emailErr="";
$phone = $email = $passv =  $conf =$filev= $userv =$conf1="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 
 if (empty($_POST["rtoname"]))
   {
    $nameErr = "RTO Name is required";
  } 
  else
   {
    $namev = test_input($_POST["rtoname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$namev)) 
	{
      $nameErr = "Only letters and white space allowed"; 
    }
  }
 
  
  if(isset($_POST['district']) && $_POST['district'] == '0')
  {
	  $disErr="Select  District";
  }else
   {
    $disv =$_POST["district"];
  }
  
   if (empty($_POST["rtoaddress"]))
   {
    $addErr = "RTO Addrss is required";
  } 
  else
   {
    $addv = test_input($_POST["rtoaddress"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$addv)) 
	{
      $addErr = "Only letters and white space allowed"; 
    }
  }
 
   
  if (empty($_POST["rtoemail"])) {
    $emailErr = "RTO Email is required";
  } else {
    $email = test_input($_POST["rtoemail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Email Format"; 
    }
  }
  
   if (empty($_POST["rtophone"])) {
    $phoneErr = "Phone no is required";
  } else {
    $phone =$_POST["rtophone"];
    // check if name only contains letters and whitespace
    if (strlen($phone)<10) {
      $phoneErr = "Maximum  10 digits!"; 
    }
  }
  if (empty($_POST["username"])) {
    $userErr = "RTO Username is required";
  } else {
    $userv = test_input($_POST["username"]);
  if (!preg_match('/^[a-z0-9]{5,10}$/', $userv)){
 $userErr ="Must have atleast 5 character and no Special characters";
}
}
  if (empty($_POST["password"])) {
    $passErr = "RTO Password is required";
  } else {
    $passv = test_input($_POST["password"]);
if(!preg_match('/^\w{4,32}$/', $passv)){
 $passErr ="Must have atleast 4 characters!  ";
}
}
 
  if (empty($_POST["conf"])) {
    $confErr = "Password Confirmation is required";
  } else {
    $conf1 = test_input($_POST["conf"]);
	if(($_POST["password"])==$conf1)
	$conf=$conf1;
	else 
	$confErr="Mismatch";
  }
  
 }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<body>
<center>
<div class="adminu">
Administrative Panel
</div>
<a href="adminlogin.php" style="float:left"><img src="home.png" width="40px" height="40px"></a>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<br><br>
<br>
 <h1 style="color:Teal"> RTO REGISTRATION</h1>
<form name="form1" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label>
  <div class="error"><?php echo "*".$nameErr;?></div>
  <input type="text" name="rtoname" placeholder="Enter RTO Name" value="<?php echo $namev; ?>">
  </label>


 <label>
 <div class="error"><?php echo "*".$disErr;?></div>
    <select type="select" name="district">
   <?php 
	 if(empty($disv))
	 {
		 $disv="---------------------------------------------Select District-------------------------------------------------";
	 }

	 ?>
     <option value="0"><?php echo $disv;?></option>
      
      <option value="Alappuzha">Alappuzha</option>
	  <option value="Ernakulam">Ernakulam</option>
	<option value="Idukki">Idukki</option>
	<option value="Kannur">Kannur</option>
     <option value="Kasargod">Kasargod</option>
	 <option value="Kollam">Kollam</option>
	 <option value="Kottayam">Kottayam</option>
	 <option value="Kozhikode">Kozhikode</option>	  
	 <option value="Malppuram">Malppuram</option>
	<option value="Palakkad">Palakkad</option>
	<option value="Pathanamthitta"> Pathanamthitta</option>
	<option value="Thiruvananthapuram">Thiruvananthapuram</option>
	<option value="Thrissur"> Thrissur</option>
	<option value="Wayanad">Wayanad</option>
    </select>
</label>
  
    <label>
    <div class="error"><?php echo "*".$addErr;?></div>
    <input type="text" name="rtoaddress" placeholder="Enter RTO Address" value="<?php echo $addv; ?>">
    </label>
 
     <label>
      <div class="error"><?php echo "*".$emailErr; ?></div>
    <input type="text" name="rtoemail" placeholder="Enter RTO Email-ID" value="<?php echo $email;?>">
    </label>
    
    <label>
     <div class="error"><?php echo "*".$phoneErr;?></div>
    <input type="text" name="rtophone" placeholder="Enter RTO Phone Number" value="<?php echo $phone;?>">
    </label>
  
  
      <label>
      <div class="error"><?php echo "*".$userErr;?></div>
    <input type="text" name="username" placeholder="Create Username" value="<?php echo $userv?>">
    </label>
 
    <label> 
    <div class="error"><?php echo "*".$passErr;?></div>
    <input type="text" name="password" placeholder="Create Password" value="<?php echo $passv;?>">
    </label><br><br>
  
    <label>
          <div class="error"><?php echo $confErr;?></div>
         <input type="password" name="conf" placeholder=" Conform Password " value="">
         </label>
         <br><br>
    <label>
    <input type="submit" name="addrto" value="Submit">
    </label>
                  
</form>
</center>
</body>
<?php
if(isset($_POST['addrto']))
{
if(empty($nameErr) and empty($addErr) and empty($disErr) and empty($phoneErr) and empty($passErr) and empty($confErr) and empty($userErr) and empty($emailErr))
{
 $user=$_POST['username'];
 $pass=$_POST['password'];
$rn=$_POST['rtoname'];
$rd=$_POST['district'];
 $ra=$_POST['rtoaddress'];
 $phoner=$_POST['rtophone'];
 $emailr=$_POST['rtoemail'];

if($rd=='Alappuzha')
{
	$disstatus="Alp";
	$numd=1;
}elseif($rd=='Ernakulam')
{
$disstatus="Erkm";
$numd=2;	
}elseif($rd=='Idukki')
{
	$disstatus="Idk";
	$numd=3;
}elseif($rd=='Kannur')
{
	$disstatus="Knr";
	$numd=4;
}elseif($rd=='Kasargod')
{
$disstatus="Ksd";
$numd=5;	
}elseif($rd=='Kollam')
{
	$disstatus="Klm";
$numd=6;	
}elseif($rd=='Kottayam')
{
$disstatus="Ktm";
$numd=7;	
}elseif($rd=='Kozhikode')
{
	$disstatus="Kozd";
	$numd=8;
	}elseif($rd=='Malppuram')
{
$disstatus="Malpm";
$numd=9;	
}elseif($rd=='Palakkad')
{
	$disstatus="Pld";
	$numd=10;
}elseif($rd=='Pathanamthitta')
{
$disstatus="Ptm";
$numd=11;	
}elseif($rd=='Thiruvananthapuram')
{
	$disstatus="Trv";
	$numd=12;
	}elseif($rd=='Thrissur')
{
$disstatus="Thr";
$numd=13;	
}elseif($rd=='Wayanad')
{
$disstatus="Wyd";
$numd=14;	
}
$result="select * from login where check_log='$numd'";
$res=mysql_query($result);
  $num=mysql_num_rows($res);
  $num1=mysql_fetch_array($res);
 
if($num==0)
 {
$qry="insert into login(username,password,status,check_log) values('$user','$pass','rto',$numd)";
mysql_query($qry,$con);

$qry2="select max(id) from login";
$t=mysql_query($qry2,$con);
$f=mysql_fetch_array($t);
 $maxid=$f[0];
mysql_query("insert into rtod(rtoname,rtodistrict,rtoaddress,rtoemail,rtophone,rtostatus,rtoi) values('$rn','$rd','$ra','$emailr',$phoner,'$disstatus',$maxid)");
header("location:viewrto.php");
}
else
{
echo '<script language="javascript">';
echo 'alert("RTO Is Already Exist In This District")';
echo '</script>';
}
}
}
?> 
</html>


