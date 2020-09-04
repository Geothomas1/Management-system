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



.buffer{
	width:400;
	background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.buffer:hover {
    background-color: #555555;
    color: white;
}
</style>

</head>
<body >
<?php
session_start();
$check=$_SESSION['id'];
if($check=='')
{
	
header("location:login.php");
}
?>
<center>
<div class="adminu">
Administrative Panel
</div>
<br>
<a  href="logout.php" style="float:right"><img src="logout.png" width="40px" height="40px"></a>
<br>

<br><br>
<br><br>
<br>
<a href="addrto.php" class="buffer">ADD RTO TO DISTRICT</a>
<br><br><br>
<a href="viewrto.php" class="buffer">VIEW LIST OF RTO</a>
<br><br>
<br>
<a href="notificationrto.php" class="buffer">NOTIFICATION TO RTO</a>
</center>
</body>
</html>