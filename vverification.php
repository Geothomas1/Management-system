<?php
include ('conn.php');
session_start();
$check=$_SESSION['id'];
$d=$_SESSION['check_log'];
if($check=='')
{
header("location:login.php");
}

 $getlid=$_GET['vid'];
$result=mysql_query("select * from vform where userid='$getlid'");
$l=mysql_num_rows($result);
$checkid=0;
while($row=mysql_fetch_array($result))
{
$id=$row[0];
$aut=$row[1];
$fullname=$row[2];
$ageofp=$row[3];
$paddress=$row[4];
$taddress=$row[5];
$type=$row[6];
$dpa=$row[7];
$ctype=$row[8];
$typeofb=$row[9];
$typeofv=$row[10];
$mn=$row[11];
$mym=$row[12];
$hp=$row[13];
$sc=$row[14];
$maxc=$row[15];
$file1=$row[16];
$file2=$row[17];
$file3=$row[18];
$file4=$row[19];
$file5=$row[20];
$file6=$row[20];
$checkid=$row[23];
}
if($checkid=='1')
{
?>
<html>
<head>
<title>
Verification By RTO
</title>
<style>
@import "compass/css3";

@import "compass/css3";
@import url(https://fonts.googleapis.com/css?family=Patua+One|Open+Sans);

* { 
  -moz-box-sizing: border-box; 
  -webkit-box-sizing: border-box; 
	box-sizing: border-box; 
}

body {
  background:#353a40;
}

table {
  border-collapse: separate;
  background:#fff;
  @include border-radius(5px);
  margin:50px auto;
  @include box-shadow(0px 0px 5px rgba(0,0,0,0.3));
}

thead {
  @include border-radius(5px);
}

thead th {
  font-family: 'Patua One', cursive;
  font-size:16px;
  font-weight:400;
  color:#fff;
  @include text-shadow(1px 1px 0px rgba(0,0,0,0.5));
  text-align:left;
  padding:20px;
  @include background-image(linear-gradient(#646f7f, #4a5564));
  border-top:1px solid #858d99;
  
  &:first-child {
   @include border-top-left-radius(5px); 
  }

  &:last-child {
    @include border-top-right-radius(5px); 
  }
}

tbody tr td {
  font-family: 'Open Sans', sans-serif;
  font-weight:400;
  color:green;
  font-size:13px;
  padding:40px 40px 10px 10px;
  border-bottom:1px solid #e0e0e0;
  
}

tbody tr:nth-child(2n) {
  background:#f0f3f5;
}

tbody tr:last-child td {
  border-bottom:none;
  &:first-child {
    @include border-bottom-left-radius(5px);
  }
  &:last-child {
    @include border-bottom-right-radius(5px);
  }
}

tbody:hover > tr td {
  @include opacity(0.5);
  
  /* uncomment for blur effect */
  /* color:transparent;
  @include text-shadow(0px 0px 2px rgba(0,0,0,0.8));*/
}

tbody:hover > tr:hover td {
  @include text-shadow(none);
  color:#2d2d2d;
  @include opacity(1.0);
}
.delete{
	-moz-box-shadow: 1px -1px 0px 0px #91b8b3;
	-webkit-box-shadow: 1px -1px 0px 0px #91b8b3;
	box-shadow: 1px -1px 0px 0px #91b8b3;
	background-color:#768d87;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Times New Roman;
	font-size:16px;
	font-weight:bold;
	padding:5px 14px;
	text-decoration:none;
	text-shadow:0px 0px 0px #2b665e;
}
.delete:hover {
	background-color:#6c7c7c;
}
.delete:active {
	position:relative;
	top:1px;
}

</style>
</head>
<body>
<a  href="view.php" style="float:left"><img src="back.png" width="40px" height="40px"></a>
<table>
<tr>
<td style="color: #000; font-size:18px">Registering Authority</td>
<td><?php echo $aut;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Full name of person</td>
<td><?php echo $fullname;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Age of Registered owner</td>
<td><?php echo $ageofp;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Permanent address</td>
<td><?php echo $paddress;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Temporary address/Official address</td>
<td><?php echo $taddress;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Vehcile Type</td>
<td><?php echo $type;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Duration of stay at the present address</td>
<td><?php echo $dpa;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Class Of Vehicle</td>
<td><?php echo $ctype;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Type of body</td>
<td><?php echo $typeofb;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Type of vehicle</td>
<td><?php echo $typeofv;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Makers name</td>
<td><?php echo $mn;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Month and year of manufacture</td>
<td><?php echo $mym;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Horse power</td>
<td><?php echo $hp;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Seating capacity</td>
<td><?php echo $sc;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Maximum Weight Of Vehicle</td>
<td><?php echo $maxc;?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px">Sale Certificate   </td>
<td><?php echo "<b style='color:red'>".$file1."</b> Has Been SucessFully Upoloaded";?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px"> Temporary Registration Certificate </td>
<td><?php echo "<b style='color:red'>".$file2."</b> Has Been SucessFully Upoloaded";?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px"> Address Proof (photo copy) </td>
<td><?php echo "<b style='color:red'>".$file3."</b> Has Been SucessFully Upoloaded";?></td>
</tr>
<tr>
<td style="color: #000; font-size:18px"> Insurance Certificate (photo copy)</td>
<td><?php echo "<b style='color:red'>".$file4."</b> Has Been SucessFully Upoloaded";?></td>
</tr>

<tr>
<td style="color: #000; font-size:18px"> Pan card or Form-60 in duplicate </td>
<td><?php echo "<b style='color:red'>".$file5."</b> Has Been SucessFully Upoloaded";?></td>
</tr>

<tr>
<td style="color: #000; font-size:18px"> Invoice </td>
<td><?php echo "<b style='color:red'>".$file6."</b> Has Been SucessFully Upoloaded";?></td>
</tr>

</table>
<center>
<form method="post">
<input type="submit" name="verified" value="Verified" class="delete">&nbsp;&nbsp;&nbsp;<input type="submit" name="notverified" value="Not Verified" class="delete">
</form>
<?php
}else
{
echo '<script language="javascript">';
echo 'alert(" Not Apply For Vechle Registration ")';
echo '</script>';
echo "<center><b style='color:RED'>NO DATE AVAILABLE</b></center>";
echo "<center><a href='view.php' style='color:Red;text-decoration:none;'>"."<img src='back.png' width='40px' height='40px'>"."</a></center>";
}
?>
<?php
$result="select vuserid from notification where vuserid='$getlid'";
$res=mysql_query($result);
 $num=mysql_num_rows($res);
 $num1=mysql_fetch_array($res);
if($num==0)
{
if(isset($_POST['verified']))
{
	$usermessage= "Your Vehicle  Registration SuccessFully Verified";
	mysql_query("insert into notification(vusermessage,vuserid) values('$usermessage',$getlid)");
	header('location:view.php'); 
}
if(isset($_POST['notverified']))
{
	$usermessage= "Your Vechile Registration Is Not Verified";
	mysql_query("insert into notification(vusermessage,vuserid) values('$usermessage',$getlid)"); 
	header('location:view.php'); 
}
}else
{
echo '<script language="javascript">';
echo 'alert("Data Alredy Checked")';
echo '</script>';
}
?>
</center>
</body>
</html>
