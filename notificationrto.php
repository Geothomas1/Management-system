<?php
 include('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>RTO Notification</title>
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
    background-color:brown;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:Teal;
}

div {
    
    background-color: #f2f2f2;
    padding:10px;
}
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

</style>

</head>
<body>
<center>
<div class="adminu">
Administrative Panel
</div>
<a href="adminlogin.php" style="float:left"><img src="home.png" width="40px" height="40px"></a>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<br><br><br><br>
<b style="color:teal; font-size:35px;">NOTIFICATION </b>

<br><br>
<form method="post">
    <select type="select" name="district">
     <option >------------------------------------------------Select District------------------------------------------------------</option>
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
	<br><br>
  <textarea rows="10" cols="70" name="mess">
  </textarea>
  <br>
  <input type="submit" name="notification">
</form>
</center>
</body>

<?php
  
if(isset($_POST['notification']))
{
 
 $rd=$_POST['district'];
if($rd=='Alappuzha')
{
$numd=1;
}elseif($rd=='Ernakulam')
{

$numd=2;	
}elseif($rd=='Idukki')
{
	
	$numd=3;
}elseif($rd=='Kannur')
{
	
	$numd=4;
}elseif($rd=='Kasargod')
{

$numd=5;	
}elseif($rd=='Kollam')
{
	
$numd=6;	
}elseif($rd=='Kottayam')
{

$numd=7;	
}elseif($rd=='Kozhikode')
{
	
	$numd=8;
	}elseif($rd=='Malppuram')
{

$numd=9;	
}elseif($rd=='Palakkad')
{
	
	$numd=10;
}elseif($rd=='Pathanamthitta')
{

$numd=11;	
}elseif($rd=='Thiruvananthapuram')
{
	
	$numd=12;
	}elseif($rd=='Thrissur')
{

$numd=13;	
}elseif($rd=='Wayanad')
{

$numd=14;	
}
$mess=$_POST['mess'];
 $numd;
$qry3="insert into notificationrto(message,rtoid) values('$mess',$numd)";
mysql_query($qry3,$con);
header('location:adminlogin.php');
}
?>
</html>