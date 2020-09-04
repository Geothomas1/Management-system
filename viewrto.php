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


#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
	color:black;
}



#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: teal;
    color: white;
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
<center>
<div class="adminu">
Administrative Panel
</div>
<a href="adminlogin.php" style="float:left"><img src="home.png" width="40px" height="40px"></a>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>

<br><br><br>
<h1 style="color:teal;">LIST OF RTO'S</h1>
<table id="customers">
<tr>
<th>NAME</th><th>DISTRICT</th><th>ADDRESS</th><th>EMAIL_ID</th><th>PHONE NUMBER</th><th>DELETE</th>
</tr>
<?php
$result=mysql_query("select * from rtod");
$l=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{
$id=$row[0];
$rtoname=$row[1];
$rtodis=$row[2];
$rtoadd=$row[3];
$email=$row[4];
$phone=$row[5];
$idd=$row[7];
?>
<tr style="color:#9CF">
    <td><?php echo $rtoname; ?></td>
    <td><?php echo $rtodis; ?></td>
    <td> <?php echo $rtoadd; ?> </td>
    <td><?php  echo $email;?></td>
    <td><?php  echo $phone;?></td>
	<td><a  class="delete" href="deleterto.php?id=<?php echo $idd;?>">Delete</a></td>
	  </tr>
	  <?php
	  }
	  ?>
</table>
</center>
</body>
</html>