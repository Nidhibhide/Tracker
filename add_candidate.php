<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
if(isset($_REQUEST['btn']))
{
$con=mysqli_connect("localhost","root","","website") or die("Couldnt connect with sql");
$fullname="'".$_REQUEST['txtfullname']."'";

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

$peradd="'".$_REQUEST['txtperaddline1']." ".
$_REQUEST['txtperaddline2']." ".
$_REQUEST['txtpertaluka']." ".
$_REQUEST['txtperstate']." ".
$_REQUEST['txtperdistrictname']." ".
$_REQUEST['txtperpincode']."'";

$curradd="'".$_REQUEST['txtcurraddline1']." ".
$_REQUEST['txtcurraddline2']." ".
$_REQUEST['txtcurrtaluka']." ".
$_REQUEST['txtcurrstate']." ".
$_REQUEST['txtcurrdistrictname']." ".
$_REQUEST['txtcurrpincode']."'";

$status="'"."Not Schedule"."'";

$maari="'".$_REQUEST['status']."'";

$sql="insert into candidate_info(status,full_name,father_name,mother_name,email,contact_no,dob,marital_status,spouse_name,nation,religion,cast,mother_tongue,qualification,known_lang,per_add,curr_add,10th_per,12th_per,gra_per,dip_per,skills,application_date,category) values($status,$fullname,$fathername,$mothername,$email,$contact,$dob,$maari,$spouse,$nation,$religion,$cast,$mothertongue,$qualification,$lang,$peradd,$curradd,$per10,$per12,$pergra,$perdip,$skills,$application_date,$category)";
mysqli_query($con,$sql) or die("Couldnt execute query3");
//echo "<h1>Registered Successfully!!</h1>";
echo '<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><font size=6>×</font></a>
    <strong><font size=4 color=black>Details are added Successfully!! </strong>
  </div>';
  echo  '<script>
  setTimeout(function() {
      document.location = "admindashboard.html";
  }, 3000); 
</script>';

mysqli_close($con);
}
?><body>
  
</body>
</html>

