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
<div class="adminu">RTO ACTIVITY PANEL</div>
<br>
<a href="rtolsogin.php" style="float:left"><img src="home.png" width="40px" height="40px"></a>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<h1>Application Status</h1>
<table id="customers">
<tr>
<th>Name</th><th>Sex</th><th>Date of birth</th><th>Permenent Address</th><th>District</th><th>Email-Id</th><th>Phone Number</th><th> Delete</th><th>Leaners Details</th><th>
Vechile Details</th><th>Test Date</th><th>Status</th>
</tr>
<?php
$d=$_SESSION['check_log'];
$v=$_SESSION['id'];
$result=mysql_query("select * from registration where check_reg='$d'");
$l=mysql_num_rows($result);
while($row=mysql_fetch_array($result))
{
$id=$row[0];
$fname=$row[1];
$lname=$row[2];
$sex=$row[4];
$age=$row[5];
$pa=$row[6];
$dis=$row[9];
$edu=$row[10];
$idm=$row[11];
$ida=$row[12];
?>
<tr>
    <td><?php echo $fname."".$lname;?></td>
    <td> <?php echo $sex; ?> </td>
    <td> <?php echo $age; ?>  </td>
    <td>  <?php echo $pa; ?> </td>
    <td> <?php echo $dis; ?>  </td>
    <td> <?php echo $edu; ?> </td>
    <td> <?php echo $idm; ?> </td>
	<td><a class="delete" href="delete.php?id=<?php echo $ida;?>">Delete</a></td>
 
    <td><a class="delete" href="lverification.php?vid=<?php echo $ida;?>">More</a>
    <td><a class="delete" href="vverification.php?vid=<?php echo $ida;?>">More</a>
   <td>
   <?php 
   $status=0;
   $lnoti=mysql_query("select * from notification where userid='$ida'");
while($get=mysql_fetch_array($lnoti))
{
$status=$get[3];	
}
if($status=="1")
{
echo "<a href='testdate.php?testid=$ida' style='text-decoration:none;color:red'>"."TEST DATE"."</a>";
}
else
{
echo "Not Verified Or Rejected";	
}
 ?>
   
   </td>
   <td><?php 
$statusresult=mysql_query("select * from result where userid='$ida'");
while($getresult=mysql_fetch_array($statusresult))
    {
	$mark=$getresult[4];
	$resultstatus=$getresult[5];	
if(!empty($mark) and !empty($resultstatus))
{
if($mark>=5)
{
echo "<b style='color:Green;'>Pass</b>";
}
else
{
echo "<b style='color:red;'>Failed</b>";
}
}
}
?>
   </td>
   
   
      <?php
	  }
	  ?>
      </tr>
</table>
</center>
</body>
</html>