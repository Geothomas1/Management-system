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


table {
	width: 700px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: black;
}

th {
	text-align: left;
}
.back{
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal "Times New Roman", Times, serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgb(189, 183, 107);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  float:left;
  text-decoration:none;
}
.edit{
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal "Times New Roman", Times, serif;
  color: rgb(1, 2, 17);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgb(196, 244, 153);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  text-decoration:none;
}

</style>
</head>
<body>
<center>
<div class="adminu">USER PANEL
</div>
<br>
<a href="userlogin.php" style="float:left"><img src="home.png" width="40px" height="40px"></a>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<br><br>
<?php

$d=$_SESSION['id'];
$result=mysql_query("select * from registration where id='$d'");
while($row=mysql_fetch_array($result))
{
$id=$row[0];
$fname=$row[1];
$lname=$row[2];
$swd=$row[3];
$sex=$row[4];
$age=$row[5];
$pa=$row[6];
$ta=$row[7];
$bg=$row[8];
$dis=$row[9];
$edu=$row[10];
$idm=$row[11];

$image=$row[15];
}

?>
<center>
<table>
  <tr>
    <th>First Name</th>
    <td><?php echo $fname; ?></td>
  </tr>
  <tr>
    <th >Last Name</th>
    <td><?php echo $lname; ?></td>
  </tr>
  <tr>
    <th>  S/F </th>
    <td> <?php echo $swd; ?> </td>
  </tr> 
  <tr>
    <th>  Sex </th>
    <td> <?php echo $sex; ?> </td>
  </tr>
   <tr>
    <th> Data of birth</th>
    <td> <?php echo $age; ?>  </td>
  </tr>
  <tr>
    <th >Permenent Adderss  </th>
    <td>  <?php echo $pa; ?> </td>
  </tr>
  <tr>
    <th> Tempory Adress </th>
    <td> <?php echo $ta; ?> </td>
  </tr>
  
   <tr>
    <th> Blood Group  </th>
    <td> <?php echo $bg; ?>  </td>
  </tr>
  <tr>
    <th> District </th>
    <td> <?php echo $dis; ?>  </td>
  </tr>
  <tr>
    <th> Email</th>
    <td> <?php echo $edu; ?> </td>
  </tr>
  
   <tr>
    <th >Phone Number</th>
    <td> <?php echo $idm; ?> </td>
  </tr>
</table>
</center>
<br><br>
<center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="edit" href="edit.php?id=<?php echo $id;?>">EDIT PROFILE</a></center>
</body>
</html>