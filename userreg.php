<?php
 include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
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
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}


.error {color: #FF0000;text-align: right;}


</style>
  <title>Registration form</title>
</head>
<body>
<div>
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
	  
 <?php
// define variables and set to empty values
$firstErr=$lastErr=$sonErr=$genderErr=$dobErr=$paddErr=$tempErr=$bgErr=$disErr="";
$firstv=$lastv=$sonv=$genderv=$dobv=$paddv=$tempv=$bgv=$disv="";
 $phoneErr = $passErr =  $confErr =$userErr = $emailErr=$fileErr="";
$phone = $email = $passv =  $conf =$filev= $userv =$conf1="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 
	 
	 
  if (empty($_POST["fname"]))
   {
    $firstErr = "First Name is required";
  } 
  else
   {
    $firstv = test_input($_POST["fname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstv)) 
	{
      $firstErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["lname"])) {
    $lastErr = "Last Name is required";
  } else {
    $lastv = test_input($_POST["lname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastv)) {
      $lastErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["swd"])) {
    $sonErr = "Father Name is required";
  } else {
    $sonv = test_input($_POST["swd"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$sonv)) {
      $sonErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["sex"])) {
    $genderErr = "Gender is required";
  } else {
    $genderv = test_input($_POST["sex"]);
  }
   
   if (empty($_POST["age"])) {
    $dobErr = "Date of Birth is required";
  } else {
    $dobv = test_input($_POST["age"]);
  }
  
  
  if (empty($_POST["pa"])) {
    $paddErr = "Permenent Address is required";
  } else {
    $paddv = test_input($_POST["pa"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$paddv)) {
     $paddErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["ta"])) {
     $tempErr= "Temprary Address is required";
  } else {
    $tempv = test_input($_POST["ta"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$tempv)) {
     $tempErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["bloodgroup"])) {
     $bgErr= " Blood Group is required";
  } else {
    $bgv = test_input($_POST["bloodgroup"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$bgv)) {
     $bgErr = "Only letters and white space allowed"; 
    }
  }
  
  if(isset($_POST['district']) && $_POST['district'] == '0')
  {
	  $disErr="Select  District";
  }else
   {
    $disv =$_POST["district"];
  }
  
 
  
  if (empty($_POST["em"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["em"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid Email format"; 
    }
  }
  
   if (empty($_POST["ph"])) {
    $phoneErr = "Phone no is required";
  } else {
    $phone =$_POST["ph"];
    // check if name only contains letters and whitespace
    if (strlen($phone)<10) {
      $phoneErr = "Maximum  10 digits!"; 
    }
  }
  if (empty($_POST["username"])) {
    $userErr = "Username is required";
  } else {
    $userv = test_input($_POST["username"]);
  if (!preg_match('/^[a-z0-9]{5,10}$/', $userv)){
 $userErr ="Must have atleast 5 character and no Special chars";
}
}
  if (empty($_POST["password"])) {
    $passErr = "Password is required";
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
<br><br><br><br><br><br>

<div align="center">

<br>
  <h2 style="color:Teal">USER REGISTRATION</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
     
     <br><br>
          <label>
  <div class="error"><?php echo "*".$firstErr;?></div>
        <input type="text" name="fname" id="fname" placeholder=" Enter your First Name " value="<?php echo $firstv; ?>">
          </label>
    
          <label>
           <div class="error" ><?php echo "*".$lastErr;?></div> 
         <input type="text" name="lname" id="lname" placeholder=" Enter your Last Name" value="<?php echo $lastv;?>">
      
          </label>
         
          <label>
          <div class="error"><?php echo "*".$sonErr;?></div>
          <input type="text" name="swd" id="swd" placeholder="Enter Father Name" value="<?php echo $sonv;?>">
          </label>
   
             <label>
             <div class= "error"><?php echo "*".$genderErr; ?></div>
          Gender:Male<input type="radio" name="sex" id="sex"  value="male" <?php if (isset($genderv) && $genderv=="male") echo "checked";?>>
              Female<input type="radio" name="sex" id="sex" value="female" <?php if (isset($genderv) && $genderv=="female") echo "checked";?>>
          </label>
          <label>
          <div class="error"><?php echo "*".$dobErr;?></div>
         Enter your DOB <input type="date" name="age" id="age" value="<?php echo $dobv;?>">
          </label>
       
          <label>
          <div class="error"><?php echo "*".$paddErr;?></div>
          <input type="text" name="pa" id="pa" placeholder="Enter Permenent Adders" value="<?php echo $paddv;?>">
          </label>
          
          <label>
          <div class="error"><?php echo "*".$tempErr; ?></div>
          <input type="text" name="ta" id="ta" placeholder="Enter Temporary Address" value="<?php echo $tempv;?>">
          </label>
          
          <label>
          <div class="error"><?php echo "*".$bgErr;?></div>
         <input type="text" name="bloodgroup" id="bloodgroup" placeholder="Enter Blood Group " value"<?php echo $bgv;?>">
          </label>
       
      <label>
     <div class="error"> <?php echo "*".$disErr;?></div>
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
          <div class="error"><?php echo "*".$emailErr; ?></div>
        <input type="text" name="em" id="em" placeholder="Enter  Email-Id" value="<?php echo $email;?>">
          </label>
        
          <label>
          <div class="error"><?php echo "*".$phoneErr;?></div>
       <input type="text" name="ph" id="ph" placeholder=" Enter Phone_number" value="<?php echo $phone;?>">
          <label>
          <div class="error"><?php echo "*".$userErr;?></div>
          <input type="text" name="username" placeholder="Create Username" value="<?php echo $userv?>">
          </label>
          <label>
          <div class="error"><?php echo "*".$passErr;?></div>
         <input type="password" name="password" placeholder=" Create Password " value="<?php echo $passv;?>" >
          </label>
          <label>
          <div class="error"><?php echo $confErr;?></div>
         <input type="password" name="conf" placeholder=" Conform Password " value="">
                   
         </label>
          <label><div style="color:Teal">Upload Your image</div>
          <input type="file" name="f1">
          </label>
          <br>
          <label>
         <input type="submit" value="SUBMIT" name="reg" >
        </label>
</form>
</div>
  <?php
if(isset($_POST['reg']))
{
if(empty($firstErr) and empty($lastErr) and empty($sonErr) and empty($genderErr) and empty($dobErr) and empty($paddErr) and empty($tempErr) and empty($bgErr) and empty($disErr) and empty($emailErr) and empty($phoneErr) and empty($userErr) and empty($passErr) and empty($confErr))
	{
$user=$_POST['username'];
$pass=$_POST['password'];
$qry="insert into login(username,password,status,approve) values('$user','$pass','user','pending')";
mysql_query($qry,$con);
$qry2="select max(id) from login";
$t=mysql_query($qry2,$con);
$f=mysql_fetch_array($t);
$maxid=$f[0];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$swd=$_POST['swd'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$pa=$_POST['pa'];
$ta=$_POST['ta'];
$bg=$_POST['bloodgroup'];
$dis=$_POST['district'];
$em=$_POST['em'];
$ph=$_POST['ph'];
if($dis=='Alappuzha')
{
	$disstatus="Alp";
	$num=1;
}elseif($dis=='Ernakulam')
{
$disstatus="Erkm";
$num=2;	
}elseif($dis=='Idukki')
{
	$disstatus="Idk";
	$num=3;
}elseif($dis=='Kannur')
{
	$disstatus="Knr";
	$num=4;
}elseif($dis=='Kasargod')
{
$disstatus="Ksd";
$num=5;	
}elseif($dis=='Kollam')
{
	$disstatus="Klm";
	$num=6;
}elseif($dis=='Kottayam')
{
$disstatus="Ktm";
$num=7;	
}elseif($dis=='Kozhikode')
{
	$disstatus="Kozd";
	$num=8;
}elseif($dis=='Malppuram')
{
$disstatus="Malpm";
$num=9;	
}elseif($dis=='Palakkad')
{
	$disstatus="Pld";
	$num=10;
}elseif($dis=='Pathanamthitta')
{
$disstatus="Ptm";
$num=11;	
}elseif($dis=='Thiruvananthapuram')
{
	$disstatus="Trv";
	$num=12;
}elseif($dis=='Thrissur')
{
$disstatus="Thr";
$num=13;	
}elseif($dis=='Wayanad')
{
$disstatus="Wyd";
$num=14;	
}
$photo=$_FILES['f1']['name'];
            move_uploaded_file($_FILES["f1"]["tmp_name"],"myfolder/".$_FILES["f1"]["name"]);
 $qry3="insert into registration(firstname,lastname,namer,sex,dob,paddress,taddress,bgroup,district,email,phone,id,disstatus,check_reg,photo) values('$fname','$lname','$swd','$sex','$age','$pa','$ta','$bg','$dis','$em',$ph,$maxid,'$disstatus',$num,'$photo')";
mysql_query($qry3,$con);
header('location:login.php');

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
