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
.button4{
    border: none;
    color: black;
    padding: 5px px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    background-color:#778899;
    color:white;
    border: 2px solid #555555;

}

.button4:hover {
    background-color: #555555;
    color: black;
}

.button5{
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    background-color:#2F4F4F	;
    color:white;
    border: 2px solid #555555;
	border-radius:30px; 
}

.button5:hover {
    background-color:#CD853F;
    color:black;
}
.button6{
    border: none;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    background-color:#FFEBCD;
    color: black;
    border: 2px solid #555555;
	border-radius:10px; 
}
.button6:hover {
    background-color:teal;
    color:white ;
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
    background-color: #99CCFF;
    color: #000000;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #666666;
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



<h1 style="color:Teal"> APPLY FOR LEARNERS LICENSE</h1>
<table>
  <form action="" method="post" enctype="multipart/form-data" name="form1" style="float:right">

 <label>
        <input type="text" name="fname" id="fname" placeholder="Full Name">
          </label>
          <br><br>
          <label>
         <input type="text" name="pb" id="pb" placeholder="Place of birth">
          </label><br><br>
          <label>
          <input type="text" name="mig" id="mig" placeholder="If place of birth outside India, when migrated to
India">
          </label><br><br>
		     <label>
    <select type="select" name="type">
     <option >----------------------------------Select Vehicle Type----------------------------------------</option>
      <option value="Two Wheeler">Two Wheeler</option>
	  <option value="Three Wheeler">Three Wheeler</option>
	<option value="Four Wheeler">Four Wheeler</option>
    </select>
  </label><br><br>
          
          <label>
          <input type="text" name="edu" id="edu" placeholder="Educational Qualification">
          </label><br><br>
          
          <label>
         <input type="text" name="idm" id="idm" placeholder="Identification mark(s)" >
          </label>
  <tr>
  <p>
    <td>Medical Certificate</td>
    <td><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="med" id="med" class="button4"></td>
  </tr>
  <tr>
   <td>Date Of Birth Cretificate</td>    
   <td><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="dobc" id="dobc" class="button4"></td>
  </tr>
  <p>&nbsp;</p>
  <tr>
  <p>
  <td>Address Proof </td>
    
  <td><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="addressp" id="addressp" class="button4"></a>
 </td>
  </tr>
  
   </table>
  <p>
    <input type="checkbox"> Here I By Declare The Above Information Are Valued
<br><br>
<input type="submit"  class="button5" name="upload" id="upload" value="Submit">
   
  </p>
  <p>&nbsp; </p>
</form>
</center>
</body>
<?php
if(isset($_POST['upload']))
{
$name=$_POST['fname'];
$pob=$_POST['pb'];
$outindia=$_POST['mig'];
$type=$_POST['type'];
$edu=$_POST['edu'];
$idm=$_POST['idm'];	
$med=$_FILES['med']['name'];
            move_uploaded_file($_FILES["med"]["tmp_name"],"myupload/".$_FILES["med"]["name"]);
			
$dobc=$_FILES['dobc']['name'];
            move_uploaded_file($_FILES["dobc"]["tmp_name"],"myupload/".$_FILES["dobc"]["name"]);

$addressp=$_FILES['addressp']['name'];
            move_uploaded_file($_FILES["addressp"]["tmp_name"],"myupload/".$_FILES["addressp"]["name"]);	
		
 
$result="select userid from lform where userid='$check'";
$res=mysql_query($result);
 echo $num=mysql_num_rows($res);
 $num1=mysql_fetch_array($res);
if($num==0)
 {	
 $qry3="insert into lform(fullname,pob,outindia,vtype,edu,idm,mc,dobc,ap,userid,status) values('$name','$pob','$outindia','$type','$edu','$idm','$med','$dobc','$addressp',$check,1)";
mysql_query($qry3,$con);
header('location:applyls.php');
}
else
{
echo '<script language="javascript">';
echo 'alert("You data aleady available")';
echo '</script>';
}	
}
?>
</html>