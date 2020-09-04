<?php
include('../insert.php');
?>
<html>
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Publisher Reg</title>


<link href="./css/sty.css" rel="stylesheet" type="text/css">
<link href="./css/animate.css" rel="stylesheet" type="text/css">
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">

 
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<style>    
.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  min-height: 100%;
  background-color:#7ac9b7;
 
}
#envelope{
background-color:white;
}
#bgid
{
	 font-family: "Open Sans", sans-serif;

  background: url("./images/fg.jpg");
  background:repeat-repeat;
  background-size: cover;
}

::-webkit-scrollbar {
display: none;
}
.body{
	overflow:hidden;
}
.error {color: #FF0000;text-align: right;}
</style>
<script src="js/sweetalert.min.js"></script>

<script src="./js/jquery-1.11.3.js"></script>
 <script>
      $(document).ready(function () {
          // Hide the div
          $("#envelope").hide();
          // Show the div after 5s
          $("#envelope").delay(800).fadeIn(200);  
      });   

  </script>
 
  <script>
var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('conf').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password Matching..';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password Not Matching!';
  }
}
 </script>
 <script>

 function myFunction() { 
swal("Registered","Successfully!","success"); }

</script> 

</head>
<body> 	
<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $passErr =  $confErr =$userErr = "";
$name =$phone = $email = $pass =  $conf = $user ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["tx1"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["tx1"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["tx3"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["tx3"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
   if (empty($_POST["tx2"])) {
    $phoneErr = "Phone no is required";
  } else {
    $phone =$_POST["tx2"];
    // check if name only contains letters and whitespace
    if (strlen($phone)<10) {
      $phoneErr = "Less than 10 digits!"; 
    }
  }
  if (empty($_POST["user"])) {
    $userErr = "Username is required";
  } else {
    $user = test_input($_POST["user"]);
  if (!preg_match('/^[a-z0-9]{5,10}$/', $user)){
 $userErr ="Must have atleast 5 character and no Special chars";
}
}
  if (empty($_POST["pass"])) {
    $passErr = "Password is required";
  } else {
    $pass = test_input($_POST["pass"]);
if(!preg_match('/^\w{4,32}$/', $pass)){
 $passErr ="Must have atleast 4 characters!  ";
}
}

  if (empty($_POST["conf"])) {
    $confErr = "Password Confirmation is required";
  } else {
    $conf1 = test_input($_POST["conf"]);
	if(($_POST["pass"])==$conf1)
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
<div id="bgid">

<div class="container"style=" height: 100%;
    width: 100%;
    overflow: hidden;">
<div id="envelope" style="    overflow: auto; 
    height: 88%;
    width:70%;"class="animated zoomIn">
<header>
<h2>Registration Form -PUBLISHER </h2>
<p>Please Fill up details</p>
</header>
<hr>
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
<label> Name:</label>
<div class="error" >* <?php echo $nameErr;?></div>
<input type="text" value="<?php echo $name;?>" name="tx1">

<br>
<label>Phone no:</label>
<div class="error">* <?php echo $phoneErr;?></div>
<input type="text" maxlength="10" value="<?php echo $phone;?>" name="tx2">
<br>
<br>
<label>e-mail</label>
<div class="error">* <?php echo $emailErr;?></div>
<input type="text" value="<?php echo $email;?>" name="tx3">

<label>Address</label>
<textarea name="ta1"></textarea>

<br>
<label>Previous Work</label>
<textarea name='ta2'></textarea>

<i>Upload Publisher Photo:</i>
<br><br>
<input name="f1" type="file" />

<br>
<br>
<label>Username:</label>
<br>
<div class="error">* <?php echo $userErr;?></div>
<input type="text" value="<?php echo $user;?>" name="user">
<label>Password:</label>
<div class="error">* <?php echo $passErr;?></div>
<input type="password" id="pass" value="<?php echo $pass;?>" name="pass" onkeyup='check();'>
<br><br>
<label>Confirm Password:</label>
<div class="error">* <?php echo $confErr;?></div>
<br>
<div align="center"><span id='message'></span></div>
<br>
 
<input type="password" id="conf" value="" name="conf"  onkeyup='check();'>

<br>


<input type="submit" name="submit" value="Submit">
<br>

</div>
</form>
</div>

</div>
<?php
if(isset($_POST['submit']))
{
if(empty($nameErr) and empty($emailErr) and empty($phoneErr) and empty($passErr) and empty($confErr) and empty($userErr))
{
$name=$_POST['tx1'];
 $phone=$_POST['tx2'];
$email=$_POST['tx3'];
$address=$_POST['ta1'];

$works=$_POST['ta2'];
$photo=$_FILES['f1']['name'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$conf=$_POST['conf'];
  $im=$_FILES['f1']['name'];
 move_uploaded_file($_FILES["f1"]["tmp_name"],"upload/".$_FILES["f1"]["name"]);
 
 $sql="INSERT INTO login(Username,Password,Confirm_Password,status) VALUES ('$user','$pass','$conf','publisher')";
mysql_query($sql,$con);
$qry2="select max(ID) from login";
$t=mysql_query($qry2,$con);
 $f=mysql_fetch_array($t);
 $maxid=$f[0];



$sq="INSERT INTO publisherdetails(Name,Phone_no,email,Address,Previous_Work,File_Path,ID) VALUES ('$name','$phone','$email','$address','$works','$photo','$maxid')";
mysql_query($sq,$con);


echo "<script type='text/javascript'> myFunction();</script>";

}
}
?>

</body>
</html>