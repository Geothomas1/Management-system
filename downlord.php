<?php
include('conn.php');
session_start();
$d=$_SESSION['id'];
$result=mysql_query("select * from registration where id='$d'");
while($row=mysql_fetch_array($result))
{
$regid=$row[0];
$fname=$row[1];
$lname=$row[2];
$image=$row[15];
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
<p>
<div style="width:700px; height:450px; padding:20px; text-align:center; border: 10px solid #787878;">
<div style="width:650px; height:400px; padding:20px; text-align:center; border: 5px solid #787878">
<img src="myfolder/<?php echo $image;?>" style="border-radius:70px;
  width:110px;
  height:110px;
  float:left;">
  <img src="images/logo.png" style="float:right;width:120px;height:120px;"/>

       <span style="font-size:25px; font-weight:bold">Certificate of Completion</span>
       <br><br>
       <span style="font-size:25px"><i>This is to certify that</i></span>
       <br><br>
       <span style="font-size:30px; text-align:center"><b><?php echo"<b style='color:Teal;float:left'>".$fname." ".$lname."</b>";?></b></span><br/><br/>
       <span style="font-size:25px"><i>has Passed the Learners Test</i></span> <br/><br/>
       <span style="font-size:30px">ON <?php  $resultt=mysql_query("select * from result where userid='$d'");
while($rowt=mysql_fetch_array($resultt))
{
	$getdate=$rowt[1];
	$score=$rowt[4];
}
echo $getdate;
?></span> <br/><br/>
       <span style="font-size:20px">with score of <b><?php echo $score;?>0%</b></span> <br/><br/><br/><br/>
      <span style="font-size:10px; float:left"><i>Importent that a copy of this certificate Submit To Officer </i></span>
     <img src="images/seal.png" style="float:right;width:120px;height:120px;"/>     
      <span style="font-size:15px;float:right;">Office Seal and Signature</span>
    
</div>
</div>
</p>




</body>
</html>