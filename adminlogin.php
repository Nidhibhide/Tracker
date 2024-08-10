<?php
if(isset($_REQUEST['btn']))
{
$con=mysqli_connect("localhost","root","","website") or die("Coudlnt connect with sql");
$a=$_REQUEST['txtuser'];
$b=$_REQUEST['txtpwd'];
$flag=0;
$rs=mysqli_query($con,"select username,password from admin") or die("couldnt execute query");
while($array=mysqli_fetch_array($rs))
{
	if($a==$array[0] && $b==$array[1])
	{
		$flag=1;
	}

}
mysqli_close($con);
if($flag==1)
{
  header("location:admindashboard.html");
}
else
{
echo '<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><font size=6>×</font></a>
    <strong><font size=4 color=black>Login Unsuccessful!! Try Again</strong>
  </div>';
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>
	<div class="container">

  <h1 style="text-align: center;font-family: Constantia;font-size: 30;color: red"><b>Admin Login</b></h1>
  <form  name="f1" method="post" onsubmit="return validate()" method="post">
    <div class="form-group">
      <label for="Username" style="font-size: 20px">Username:</label>
      <div class="row"><div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="Enter Username" name="txtuser" required="">
      </div></div>
    </div>

    <div class="form-group">
      <label for="password" style="font-size: 20px">Password:</label>
      <div class="row"><div class="col-lg-4">
      <input type="password" class="form-control"  placeholder="Enter password" name="txtpwd" required=""></div></div>
    </div>
    <input type="submit" class="btn btn-primary" name="btn">

  </form>
</div>

	



</body>
</html>
