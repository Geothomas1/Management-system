<?php
 include ('conn.php');
 $ide=$_GET['id'];
$r=mysql_query("select * from registration where regid='$ide'");
while($edit=mysql_fetch_array($r))
{
$editid=$edit[0];
$fname=$edit[1];
$lname=$edit[2];
$swd=$edit[3];
$sex=$edit[4];
$age=$edit[5];
$pa=$edit[6];
$ta=$edit[7];
$bg=$edit[8];
$dis=$edit[9];
$edu=$edit[10];
$idm=$edit[11];
$idu=$edit[12];
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

input[type=text], select {
    width: 100%;
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
    background-color:teal;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:brown;
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


   <h1 style="color:Teal"> EDIT YOUR PROFILE</h1>
<form method="post">
<table>
        <tr>
          <label>
        <td>Change First Name</td> 
        <td> <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>"></td>
          </label>
          </tr>
          <tr>
          <label>
          <td>Change Last Name</td> 
          <td><input type="text" name="lname" id="lname" value="<?php echo $lname; ?>"></td>
          </label>
         </tr>
         <tr>
          <label>
<td> Change Name of s/f/d </td>
<td><input type="text" name="swd" id="swd" value="<?php echo $swd; ?>"></td>
          </label>
         </tr> 
         <tr>
            <label>
            <td>Gender</td><td>
          Male<input type="radio" name="sex" id="sex" value="male"<?php if($sex=='male'){echo "checked";}?>>
              Female<input type="radio" name="sex" id="sex" value="female"<?php if($sex=='female'){echo "checked";}?>></td>          </label>   
       </tr>  
      <tr>
          <label>
         <td>Change your DOB</td> 
         <td> <input type="date" name="age" id="age" value="<?php echo $age; ?>"></td>
          </label>
       </tr>
       <tr>
          <label>
          <td>Change Permenent Adderss</td>
          <td><input type="text" name="pa" id="pa"  value="<?php echo $pa; ?>"></td>
          </label>
         </tr> 
         <tr>
          <label>
         <td>Change Temporary Address</td>
         <td><input type="text" name="ta" id="ta"  value="<?php echo $ta; ?>"></td>
          </label>
          </tr>
          <tr>
          <label>
          <td>Change Blood Group</td>
          <td><input type="text" name="bloodgroup" value="<?php echo $bg; ?>"></td>
          </label>
      </tr> 
      <tr>
       <label>
       <td>Change District</td>
	   </label>
	   
       <td><select type="select" name="district" style="width:100%" >
	   <?php
	   echo "<option>".$dis."</option>";
	   ?>
	   
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
    </select></td>
       </label>
     </tr> 
     <tr>
          <label>
          <td>Change Email-Id</td>
          <td><input type="text" name="eq" id="eq" value="<?php echo $edu; ?>"></td>
          </label>
        </tr>
        <tr>
          <label>
            <td>Change Phone_number</td>
            <td><input type="text" name="idm" id="idm" value="<?php echo $idm; ?>"></td>
          </label>
        </tr>
        </p>
      
         </table>
        <p>
         <input type="submit" value="UPLOAD" name="update" >
        </p>
       
</form>
</center>
<?php

if(isset($_POST['update']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$swd=$_POST['swd'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$pa=$_POST['pa'];
$ta=$_POST['ta'];
$bg=$_POST['bloodgroup'];
$dis=$_POST['district'];
if($dis=='Alappuzha')
{
	$disstatus="Alp";
	$num=1;
}elseif($dis=='Ernakulam')
{
$disstatus="Erkm";
$num=2;	
}elseif($dis=='Idukki')
{
	$disstatus="Idk";
	$num=3;
}elseif($dis=='Kannur')
{
	$disstatus="Knr";
	$num=4;
}elseif($dis=='Kasargod')
{
$disstatus="Ksd";
$num=5;	
}elseif($dis=='Kollam')
{
	$disstatus="Klm";
	$num=6;
}elseif($dis=='Kottayam')
{
$disstatus="Ktm";
$num=7;	
}elseif($dis=='Kozhikode')
{
	$disstatus="Kozd";
	$num=8;
}elseif($dis=='Malppuram')
{
$disstatus="Malpm";
$num=9;	
}elseif($dis=='Palakkad')
{
	$disstatus="Pld";
	$num=10;
}elseif($dis=='Pathanamthitta')
{
$disstatus="Ptm";
$num=11;	
}elseif($dis=='Thiruvananthapuram')
{
	$disstatus="Trv";
	$num=12;
}elseif($dis=='Thrissur')
{
$disstatus="Thr";
$num=13;	
}elseif($dis=='Wayanad')
{
$disstatus="Wyd";
$num=14;	
}
$edu=$_POST['eq'];
$idm=$_POST['idm'];
mysql_query("update registration set firstname='$fname',lastname='$lname',namer='$swd',sex='$sex',dob='$age',paddress='$pa',taddress='$ta',bgroup='$bg',district='$dis',email='$edu',phone=$idm ,id=$idu ,disstatus='$disstatus', check_reg=$num where regid='$editid'");
header('location:displayuser.php');
}

?>

</body>

</html>
