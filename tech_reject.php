<?php
$cid="'".$_GET['id']."'";
//echo "$cid";
session_start();
$head="'".$_SESSION['tech_head']."'";
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
$r="'"."Tech Round"."'";
$res="'"."Rejected"."'";
$c="'"."$canid"."'";
//echo "$f";
$head1="'"."$head"."'";
mysqli_query($con,"insert into result values($c,$f,$res,$r,$q,$head1)");
mysqli_query($con,"update tech_schedule set status='Tech Round Completed' where candidate_id=$c");
mysqli_close($con);
//echo "Record Inserted";
header("location:tech_schedule_display.php");
?>
