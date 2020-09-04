<?php
error_reporting();
 include ('conn.php');
 session_start();
 $testd=$_SESSION['id'];
 if($testd=="")
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

</style>
<title>Online Examination</title>
</head>
<body><center><b style="color:teal; font-size:24px;"> LEARNERS LICENSE ONLINE TEST</b></center>
<form method="post">
<?php	
$res1=mysql_query("select * from test where testid='1'");
while($row1=mysql_fetch_array($res1))
{
echo "Qust:1---<b style='color:Green;'>".$qust1=$row1[1]."</b>";
?>
<ol type='1'>
<li><input type='radio'  name="a" value='1'> <?php echo $row1[2];?> </li><br>
<li><input type='radio' name="a" value='2'><?php echo $row1[3];?> </li><br>
<li><input type='radio' name="a"  value='3'> <?php echo $row1[4];?> </li><br>
 <li><input type='radio'  name="a" value='4'> <?php echo $row1[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
 <?php	
$res2=mysql_query("select * from test where testid='2'");
while($row2=mysql_fetch_array($res2))
{
echo "Qust:2---".$qust2=$row2[1];
?>
<ol type='1'>
<li><input type='radio'  name="b" value='1'> <?php echo $row2[2];?> </li><br>
<li><input type='radio' name="b" value='2'><?php echo $row2[3];?> </li><br>
<li><input type='radio' name="b"  value='3'> <?php echo $row2[4];?> </li><br>
 <li><input type='radio'  name="b" value='4'> <?php echo $row2[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
 <?php	
$res3=mysql_query("select * from test where testid='3'");
while($row3=mysql_fetch_array($res3))
{
echo "Qust:3---".$qust3=$row3[1];
?>
<ol type='1'>
<li><input type='radio'  name="c" value='1'> <?php echo $row3[2];?> </li><br>
<li><input type='radio' name="c" value='2'><?php echo $row3[3];?> </li><br>
<li><input type='radio' name="c"  value='3'> <?php echo $row3[4];?> </li><br>
 <li><input type='radio'  name="c" value='4'> <?php echo $row3[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
  <?php	
$res4=mysql_query("select * from test where testid='4'");
while($row4=mysql_fetch_array($res4))
{
echo "Qust:4---".$qust4=$row4[1];
?>
<ol type='1'>
<li><input type='radio'  name="d" value='1'> <?php echo $row4[2];?> </li><br>
<li><input type='radio' name="d" value='2'><?php echo $row4[3];?> </li><br>
<li><input type='radio' name="d"  value='3'> <?php echo $row4[4];?> </li><br>
 <li><input type='radio'  name="d" value='4'> <?php echo $row4[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
 <?php	
$res5=mysql_query("select * from test where testid='5'");
while($row5=mysql_fetch_array($res5))
{
echo "Qust:5---".$qust5=$row5[1];
?>
<ol type='1'>
<li><input type='radio'  name="e" value='1'> <?php echo $row5[2];?> </li><br>
<li><input type='radio' name="e" value='2'><?php echo $row5[3];?> </li><br>
<li><input type='radio' name="e"  value='3'> <?php echo $row5[4];?> </li><br>
 <li><input type='radio'  name="e" value='4'> <?php echo $row5[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
 
  <?php	
$res6=mysql_query("select * from test where testid='6'");
while($row6=mysql_fetch_array($res6))
{
echo "Qust:6---".$qust6=$row6[1];
?>
<ol type='1'>
<li><input type='radio'  name="f" value='1'> <?php echo $row6[2];?> </li><br>
<li><input type='radio' name="f" value='2'><?php echo $row6[3];?> </li><br>
<li><input type='radio' name="f"  value='3'> <?php echo $row6[4];?> </li><br>
 <li><input type='radio'  name="f" value='4'> <?php echo $row6[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
  <?php	
$res7=mysql_query("select * from test where testid='7'");
while($row7=mysql_fetch_array($res7))
{
echo "Qust:7---".$qust7=$row7[1];
?>
<ol type='1'>
<li><input type='radio'  name="g" value='1'> <?php echo $row7[2];?> </li><br>
<li><input type='radio' name="g" value='2'><?php echo $row7[3];?> </li><br>
<li><input type='radio' name="g"  value='3'> <?php echo $row7[4];?> </li><br>
 <li><input type='radio'  name="g" value='4'> <?php echo $row7[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
  <?php	
$res8=mysql_query("select * from test where testid='8'");
while($row8=mysql_fetch_array($res8))
{
echo "Qust:8---".$qust8=$row8[1];
?>
<ol type='1'>
<li><input type='radio'  name="h" value='1'> <?php echo $row8[2];?> </li><br>
<li><input type='radio' name="h" value='2'><?php echo $row8[3];?> </li><br>
<li><input type='radio' name="h"  value='3'> <?php echo $row8[4];?> </li><br>
 <li><input type='radio'  name="h" value='4'> <?php echo $row8[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
  <?php	
$res9=mysql_query("select * from test where testid='9'");
while($row9=mysql_fetch_array($res9))
{
echo "Qust:9---".$qust9=$row9[1];
?>
<ol type='1'>
<li><input type='radio'  name="i" value='1'> <?php echo $row9[2];?> </li><br>
<li><input type='radio' name="i" value='2'><?php echo $row9[3];?> </li><br>
<li><input type='radio' name="i"  value='3'> <?php echo $row9[4];?> </li><br>
 <li><input type='radio'  name="i" value='4'> <?php echo $row9[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
 
 
  <?php	
$res10=mysql_query("select * from test where testid='10'");
while($row10=mysql_fetch_array($res10))
{
echo "Qust:10---".$qust10=$row10[1];
?>
<ol type='1'>
<li><input type='radio'  name="j" value='1'> <?php echo $row10[2];?> </li><br>
<li><input type='radio' name="j" value='2'><?php echo $row10[3];?> </li><br>
<li><input type='radio' name="j"  value='3'> <?php echo $row10[4];?> </li><br>
 <li><input type='radio'  name="j" value='4'> <?php echo $row10[5];?> </li><br>
 </ol>
 <?php
 }
 ?>
 <input type='submit' name='submit' value='Submit'>
 </form>
<?php
if(isset($_POST['submit']))
{
$get[1]=$_POST['a'];
if(isset($get[1]))
{
$_SESSION[1]=$get[1];
}
$get[2]=$_POST['b'];
if(isset($get[2]))
{
$_SESSION[2]=$get[2];
}

$get[3]=$_POST['c'];
if(isset($get[3]))
{
$_SESSION[3]=$get[3];
}
 $get[4]=$_POST['d'];
if(isset($get[4]))
{
$_SESSION[4]=$get[4];
}
$get[5]=$_POST['e'];
if(isset($get[5]))
{
$_SESSION[5]=$get[5];
}
$get[6]=$_POST['f'];
if(isset($get[6]))
{
$_SESSION[6]=$get[6];
}
$get[7]=$_POST['g'];
if(isset($get[7]))
{
$_SESSION[7]=$get[7];
}
$get[8]=$_POST['h'];
if(isset($get[8]))
{
$_SESSION[8]=$get[8];
}
$get[9]=$_POST['i'];
if(isset($get[9]))
{
$_SESSION[9]=$get[9];
}
$get[10]=$_POST['j'];
if(isset($get[10]))
{
$_SESSION[10]=$get[10];
}
for($k=1;$k<=10;$k++)
{	
$m=$_SESSION[$k];
mysql_query("update test set your_ans=$m where testid='$k'");	
}
$_SESSION['score']=0;
$p=0;
for($p=1;$p<=10;$p++)
{
$testresult=mysql_query("select * from test where testid='$p'");
while($rowresult=mysql_fetch_array($testresult))
{
$_SESSION['true_ans']=$rowresult[6];
$_SESSION['your_ans']=$rowresult[7];
if($_SESSION['true_ans']==$_SESSION['your_ans'])
{
	$_SESSION[score]=$_SESSION[score]+1;
}	
}
}
$count=1;
mysql_query("update result set score=$_SESSION[score],count='$count' where userid='$testd'");
unset($_SESSION[1]);
unset($_SESSION[2]);
unset($_SESSION[3]);
unset($_SESSION[4]);
unset($_SESSION[5]);
unset($_SESSION[6]);
unset($_SESSION[7]);
unset($_SESSION[8]);
unset($_SESSION[9]);
unset($_SESSION[10]);
unset($_SESSION['true_ans']);
unset($_SESSION['your_ans']);
unset($_SESSION[score]);
header("location:userlogin.php");
}
?>
</body>
</body>
</html>