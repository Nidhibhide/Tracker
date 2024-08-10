
<?php
if(isset($_REQUEST['btn']))
{
//$con=mysqli_connect("localhost","root","","website") or die("Coudlnt connect with sql");
$user="'".$_REQUEST['txtuser']."'";
$mobno="'".$_REQUEST['txtmobno']."'";
$pwd="'".$_REQUEST['txtcnfrmpwd']."'";

$con=mysqli_connect("localhost","root","","website") or die("Coudlnt connect with sql");
$rs=mysqli_query($con,"select mobile_no from tech_register where username=$user") or die("couldnt execute query");
$array=mysqli_fetch_array($rs);


/*$a="'".$array[0]."'";
echo " array = $a ";
echo " <br>$mobno";
/*echo "array = $a";
  echo "text = $mobno";*/
if("'".$array[0]."'"==$mobno)
{

	/*echo "array = $a";
  echo "text = $mobno";
	echo "start";*/
  /*echo "<h1>helllo</h1>";*/
	$sql="update tech_register set password=$pwd where username=$user";
	mysqli_query($con,$sql);
	//mysqli_close($con);
	//echo "Success";
	echo '<div class="alert alert-danger alert-dismissable">
    <strong><font size=4 color=black>Password Changed !!!<br>Wait a while you will be redirected soon to Login Page.</strong>
  </div>';
echo	'<script>
  setTimeout(function() {
      document.location = "techlogin.php";
  }, 4000); 
</script>';


}


if("'".$array[0]."'"!=$mobno)
{

//echo "<h1>Byee</h1>";
echo '<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><font size=6>×</font></a>
    <strong><font size=4 color=black>Failed Operation!!! Try Again</strong>
  </div>';
  //header("location:admindashboard.html");

/*echo	'<script>
  setTimeout(function() {
      document.location = "#";
  }, 4000); 
</script>';*/
//echo "Failed!!";
}
mysqli_close($con);

}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    function validate()
    {
      var x=document.f2.txtmobno.value;
      var y=document.f2.txtpwd.value;
      var z=document.f2.txtcnfrmpwd.value;
       if(x.length!=10)
      {
document.getElementById("aa").innerHTML="<font color=red>Please Enter 10 Digits";
return false;
      }

       if(x.length==10)
      {
document.getElementById("aa").innerHTML="<font color=red>";
      }
      if(isNaN(x))
      {
        document.getElementById("aa").innerHTML="<font color=red>Please Enter Only Digits";
return false;
      }

      if(isNaN(x)==false)
      {
        document.getElementById("aa").innerHTML="<font color=red>";
      }
       if( z.length<=6)
      {
        document.getElementById("bb").innerHTML="<font color=red>Size of Password must be greater than 6 characters"
        return false;
      }

      if( z.length>6)
      {
        document.getElementById("bb").innerHTML="<font color=red>";
      }

       if(y.length<=6)
      {
        document.getElementById("cc").innerHTML="<font color=red>Size of Password must be greater than 6 characters"
        return false;
      }
      if(y.length>6)
      {
        document.getElementById("cc").innerHTML="<font color=red>";
      }

       if(y!=z)
      {
        document.getElementById("bb").innerHTML="<font color=red>U entered Wrong Password";
return false;
      }
      if(y==z)
      {
        document.getElementById("bb").innerHTML="<font color=red>";
      }
      
      
      return true;
    
    }
  </script>
  
</head>
<body>
  <div class="container">
  <h1 style="text-align: center;font-family:Constantia ;font-size: 30;color: red"><b>Tech Forgot Password</b></h1>
  <form action="#" name="f2"  method="post" onsubmit="return validate()">
    <div class="form-group">
      <label for="Username" style="font-size: 20px">Username:</label>
      <div class="row"><div class="col-lg-4">
      <input type="email" class="form-control"  placeholder="Enter Username" name="txtuser" required=""></div></div>
    </div>
    <div class="form-group">
      <label for="mobno" style="font-size: 20px">Mobile Number</label>
      <div class="row"><div class="col-lg-4">
      <input type="text" class="form-control"  placeholder="Enter Mobile Number" name="txtmobno" required=""><p id="aa"></p></div></div>
    </div>
    <div class="form-group">
      <label for="Password" style="font-size: 20px">Password:</label>
      <div class="row"><div class="col-lg-4">
      <input type="password" class="form-control"  placeholder="Enter password" name="txtpwd" required=""><p id="cc"></p></div></div>
    </div>
    <div class="form-group">
      <label for="cnfrmPassword" style="font-size: 20px">Confirm Password:</label>
      <div class="row"><div class="col-lg-4">
      <input type="password" class="form-control"  placeholder="Enter Confirm password" name="txtcnfrmpwd" required=""><p id="bb"></p></div></div>
    </div>
    <input type="submit" class="btn btn-primary" value="Submit" name="btn">
    
  </form>
</div>
</body>
</html>