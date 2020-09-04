$q=$_SESSION['qustno'];
$ans=$_POST['ans'];
mysql_query("update test set your_ans='$ans' where testid='$qno'");	 
echo $row[1];
if($ans==$row[6])
{
$_SESSION['trueans']=$_SESSION['trueans']+1;	
}

$_SESSION['qustno']=$_SESSION['qustno']+1;
$qno=$_SESSION['qustno'];
}