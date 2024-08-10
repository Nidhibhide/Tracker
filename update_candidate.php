
<?php

$con=mysqli_connect("localhost","root","","website") or die("Couldnt connect with sql");
session_start();
$x=$_SESSION['a'];
//$x=$_GET['a'];
$fullname="'".$_REQUEST['txtfullname1']."'";
//echo " $fullname";

$fathername="'".$_REQUEST['txtfathername']."'";

$mothername="'".$_REQUEST['txtmothername']."'";

$email="'".$_REQUEST['txtemail']."'";

$contact="'".$_REQUEST['txtcon']."'";

$dob="'".date('Y-m-d',strtotime($_REQUEST['txtdob']))."'";
//$application_date="'".date('Y-m-d',strtotime($_REQUEST['txtapplicationdate']))."'";

if(isset($_REQUEST['txtspouse']))
{
$spouse="'".$_REQUEST['txtspouse']."'";

}
else
{
  $spouse="'"."<font size=8>-</font>"."'";
 /*echo "$spouse";
  $spouse="'"."None"."'";*/
  
}
//echo "$spouse";
$nation="'".$_REQUEST['txtnation']."'";

$religion="'".$_REQUEST['txtreligion']."'";

$cast="'".$_REQUEST['txtcast']."'";

$mothertongue="'".$_REQUEST['txttongue']."'";

$qualification="'".$_REQUEST['txtqua']."'";

$per10="'".$_REQUEST['txt10per']."'";

$per12="'".$_REQUEST['txt12per']."'";

$pergra="'".$_REQUEST['txtgraPercentage']."'";

if(isset($_REQUEST['txtdipper']))
{
$perdip="'".$_REQUEST['txtdipper']."'";

}
else
{
  $perdip="'"."<font size=8>-</font>"."'";
 
}
//echo "$perdip";
$skills="'".$_REQUEST['txtskills']."'";

$application_date="'".date('Y-m-d',strtotime($_REQUEST['txtapplicationdate']))."'";

$lang="'".$_REQUEST['txtknownlang']."'";

$category="'".$_REQUEST['category']."'";

$peradd="'".$_REQUEST['txtperaddline1']."'";


$curradd="'".$_REQUEST['txtcurraddline1']."'";
$maari="'".$_REQUEST['status']."'";

$sql="update candidate_info set full_name=$fullname,mother_name=$mothername,father_name=$fathername,email=$email,dob=$dob,marital_status=$maari,spouse_name=$spouse,nation=$nation,religion=$religion,cast=$cast,category=$category,mother_tongue=$mothertongue,qualification=$qualification,curr_add=$curradd,per_add=$peradd,dip_per=$perdip,10th_per=$per10,12th_per=$per12,gra_per=$pergra,skills=$skills,application_date=$application_date,contact_no=$contact,known_lang=$lang where candidate_id=$x";
mysqli_query($con,$sql) or die("Couldnt execute query3");
//echo "<h1>Registered Successfully!!</h1>";
header("location:candidate_display.php");
//header("localhost:candidate_display.php");
mysqli_close($con);



?>
