<?php
include('conn.php');
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
    background-color: white;
    color: black;
    border: 2px solid #555555;
	border-radius:10px; 
}

.button5:hover {
    background-color: #555555;
    color: white;
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
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 40%;
    padding: 10px 15px;
    margin: 5px 0;
    display: inline-block;
    border: 3px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    width: 15%;
    background-color: #FF9;
    color: #000000;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-size:18px;
	 -webkit-transition-duration: 0.4s; /* Safari */
}

input[type=submit]:hover {
    background-color: #C30;
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

<p style="color:teal; font-size:36px">VEHICLE REGISTRATION</p>
<table>
  <form method="post" enctype="multipart/form-data">
 
  <label>
        <input type="text" name="aut" id="aut" placeholder="The Registering Authority">
          </label><br><br>
          <label>
         <input type="text" name="nreg" id="nreg" placeholder="Full name of person to be registered as
Registered owner">
          </label><br><br>
          <label>
          <input type="text" name="areg" id="areg" placeholder="Age of person to be registered as
Registered owner">
          </label><br><br>
          <label>
          <input type="text" name="pa" id="pa" placeholder="Permanent address">
          </label><br><br>
          <input type="text" name="ta" id="ta" placeholder="Temporary address/Official address, if any">
          </label><br><br>
		     <label>
    <select type="select" name="type">
     <option >------------------------------------------Select Vehicle Type-------------------------------------------------</option>
      <option value="Two Wheeler">Two Wheeler</option>
	  <option value="Three Wheeler">Three Wheeler</option>
	<option value="Four Wheeler">Four Wheeler</option>
    </select>
  </label><br><br>
          
          <label>
          <input type="text" name="dpa" id="dpa" placeholder="Duration of stay at the present address">
          </label><br><br>
          <label>
           <select type="select" name="ctype">
     <option>---------------------------------------------Class of vehicle-------------------------------------------------</option>
      <option value="With  Gear">With  Gear</option>
	  <option value="Without Gear">Without Gear</option>
	<option value="Others">Others</option>
    </select>
  </label><br><br>
   <label>
          <input type="text" name="tofb" id="tofb" placeholder="Type of body">
          </label><br><br>
          
           <label>
          <input type="text" name="tofv" id="tofv" placeholder="Type of vehicle">
          </label><br><br>
          
           <label>
          <input type="text" name="mn" id="mn" placeholder="Makers name">
          </label><br><br>
          
           <label>
          Month and year of manufacture &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="my" id="my" placeholder="Month and year of manufacture">
          </label><br><br>
          
           <label>
          <input type="text" name="hp" id="hp" placeholder="Horse power">
          </label><br><br>
          <label>
          <input type="text" name="sc" id="sc" placeholder="Seating capacity">
          </label><br><br>
          <label>
          <input type="text" name="maxc" id="maxc" placeholder="Maximum Weight Of Vehicle">
          </label>
  <tr>
  <p>
   <td>Sale Certificate&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; <br><br> </td>  
   <td><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp; <input type="file" name="form22" id="form22" class="button4"><br><br></td>
  </p>
  </tr>
  <p>&nbsp;</p>
  <tr>
  <p>
  <td>Temporary Registration Certificate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></td>
    
  <td><p>
    <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="trc" id="trc" class="button4">
  </p></td>
  </tr>
  </p>
   <p>
  <td><br><br>Address Proof (photo copy)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br><br> </td>  
  <td><p>
    <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="ap" id="ap" class="button4">
  </p></td>
  </tr>
  </p>  
  
  <p>
  <td>Insurance Certificate (photo copy)&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  </td>
    
  <td><p>
    <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="ic" id="ic" class="button4">
  </p></td>
  </tr>
  </p>  
  
  <p>
  <td><br><br>Pan card or Form-60 in duplicate &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </td>
    
  <td><p>
    <br><br><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="pf" id="pf" class="button4">
  </p></td>
  </tr>
  </p>  
   <p>
  <td> <br><br>Invoice&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;  </td>
    
  <td><p>
    <br><br><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="invoice" id="invoice" class="button4">
  </p></td>
  </tr>
  </p>  
   </table><br><br>
  <p>
    <input type="submit" class="button5" name="vapply" value="Submit">
  </p>
  <p>&nbsp; </p>
</form>
</center>
</body>
<?php

if(isset($_POST['vapply']))
{
	
 $aut=$_POST['aut'];
  $nreg=$_POST['nreg'];
 $areg=$_POST['areg'];
 $pa=$_POST['pa'];
 $ta=$_POST['ta'];
 $type=$_POST['type'];
 $dpa=$_POST['dpa'];
 $ctype=$_POST['ctype'];
 $tofb=$_POST['tofb'];
 $tofv=$_POST['tofv'];
 $mn=$_POST['mn'];
 $my=$_POST['my'];
 $hp=$_POST['hp'];
 $sc=$_POST['sc'];
 $maxc=$_POST['maxc'];	
 $form22=$_FILES['form22']['name'];
            move_uploaded_file($_FILES["form22"]["tmp_name"],"myuploadv/".$_FILES["form22"]["name"]);
			
  $trc=$_FILES['trc']['name'];
            move_uploaded_file($_FILES["trc"]["tmp_name"],"myuploadv/".$_FILES["trc"]["name"]);

  $ap=$_FILES['ap']['name'];
            move_uploaded_file($_FILES["ap"]["tmp_name"],"myuploadv/".$_FILES["ap"]["name"]);
			
  $ic=$_FILES['ic']['name'];
            move_uploaded_file($_FILES["ic"]["tmp_name"],"myuploadv/".$_FILES["ic"]["name"]);		
			
			
	 $pf=$_FILES['pf']['name'];
            move_uploaded_file($_FILES["pf"]["tmp_name"],"myuploadv/".$_FILES["pf"]["name"]);			

 $invoice=$_FILES['invoice']['name'];
            move_uploaded_file($_FILES["invoice"]["tmp_name"],"myuploadv/".$_FILES["invoice"]["name"]);			
$result="select userid from vform where userid='$check'";
$res=mysql_query($result);
 $num=mysql_num_rows($res);
 $num1=mysql_fetch_array($res);
if($num==0)
 {		
$qry3="insert into vform(aut,fullname,ageofp,paddress,taddress,type,dpa,ctype,typeofb,typeofv,mn,mym,hp,sc,maxc,form22,trc,ap,ic,pf,invoice,userid,status) values('$aut','$nreg','$areg','$pa','$ta','$type','dpa','$ctype','$tofb','$tofv','$mn','$my',$hp,$sc,$maxc,'$form22','$trc','$ap','$ic','$pf','$invoice',$check,1)";
mysql_query($qry3,$con);
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