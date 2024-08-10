<?php
$cid="'".$_GET['id']."'";
//echo "$cid";
session_start();
$head="'".$_SESSION['hr_head']."'";
$con=mysqli_connect("localhost","root","","website");
$rs=mysqli_query($con,"select full_name,qualification,candidate_id from candidate_info where candidate_id=$cid");
while($array=mysqli_fetch_array($rs))
{
	$fullname=$array[0];
	$qualification=$array[1];
	$canid=$array[2];
}
$f="'"."$fullname"."'";
$q="'"."$qualification"."'";
$r="'"."HR Round"."'";
$res="'"."Accepted"."'";
$c="'"."$canid"."'";
//$h="'".$head."'";
$head1="'"."$head"."'";



mysqli_query($con,"insert into result1 values($c,$f,$res,$r,$q,$head1)");
mysqli_query($con,"update hr_schedule set status='HR Round Completed' where candidate_id=$c");
mysqli_close($con);
//echo "Record Inserted";
header("location:hr_schedule_display.php");
?>
