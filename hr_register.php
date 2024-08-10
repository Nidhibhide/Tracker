<?php
if(isset($_REQUEST['btn']))
{
$con=mysqli_connect("localhost","root","","website") or die("Couldnt connect with sql");
$fname="'".$_REQUEST['txtfrstname']."'";
$mname="'".$_REQUEST['txtmidname']."'";
$lname="'".$_REQUEST['txtlstname']."'";
$user="'".$_REQUEST['txtuser']."'";
$pwd="'".$_REQUEST['txtpwd']."'";
$add="'".$_REQUEST['txtaddress']."'";
$mob="'".$_REQUEST['txtmobno']."'";
$adhaar="'".$_REQUEST['txtaadharno']."'";
$email="'".$_REQUEST['txtemail']."'";
$sql="insert into hr_register(fname,mname,lname,username,password,address,mobile_no,adhaar,email) values($fname,$mname,$lname,$user,$pwd,$add,$mob,$adhaar,$email)";
mysqli_query($con,$sql) or die("Couldnt execute query");
echo '<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"><font size=6>×</font></a>
    <strong><font size=4 color=black>Registration done Successfully!!</strong>
  </div>';
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
var a=document.f1.txtfrstname.value;
var b=document.f1.txtmidname.value;
var c=document.f1.txtlstname.value;
var d=document.f1.txtuser.value;
var e=document.f1.txtpwd.value;
var f=document.f1.txtcnfrmpwd.value;
var g=document.f1.txtaddress.value;
var h=document.f1.txtmobno.value;
var i=document.f1.txtaadharno.value;
var j=document.f1.txtemail.value;
if(a=="" || a==null)
{
 document.getElementById("a").innerHTML="<font color=red>Please Enter FirstName";
 return false; 
}
if(a!="")
{
  document.getElementById("a").innerHTML="<font color=red>";
}

if(b=="" || b==null)
{
 document.getElementById("b").innerHTML="<font color=red>Please Enter MiddleName"; 
 return false;
}
if(b!="" )
{
 document.getElementById("b").innerHTML="<font color=red>"; 
}

if(c=="" || c==null)
{
 document.getElementById("c").innerHTML="<font color=red>Please Enter LastName";
 return false; 
}
if(c!="" )
{
 document.getElementById("c").innerHTML="<font color=red>"; 
}
if(d=="" || d==null)
{
 document.getElementById("d").innerHTML="<font color=red>Please Enter UserName";
 return false; 
}
if(d!="")
{
 document.getElementById("d").innerHTML="<font color=red>";
}
if(e=="" || e==null)
{
 document.getElementById("e").innerHTML="<font color=red>Please Enter Password";
 return false; 
}
if(e!="" )
{
 document.getElementById("e").innerHTML="<font color=red>";
}

if(f=="" || f==null)
{
 document.getElementById("f").innerHTML="<font color=red>Please Enter Confirm Password"; 
 return false;
}

if(f!="")
{
 document.getElementById("f").innerHTML="<font color=red>"; 
}

if(g=="" || g==null)
{
 document.getElementById("g").innerHTML="<font color=red>Please Enter Address"; 
}

if(g!="")
{
 document.getElementById("g").innerHTML="<font color=red>"; 
}
if(h=="" || h==null)
{
 document.getElementById("h").innerHTML="<font color=red>Please Enter MobileNumber"; 
 return false;
}
if(h!="")
{
 document.getElementById("h").innerHTML="<font color=red>"; 
}
if(i=="" || i==null)
{
 document.getElementById("i").innerHTML="<font color=red>Please Enter Adhaar Number"; 
 return false;
}
if(i!="")
{
 document.getElementById("i").innerHTML="<font color=red>"; 
}
if(j=="" || j==null)
{
 document.getElementById("j").innerHTML="<font color=red>Please Enter Email"; 
 return false;
}
if(j!="")
{
 document.getElementById("j").innerHTML="<font color=red>"; 
}

 if(isNaN(h))
      {
document.getElementById("h").innerHTML="<font color=red>Please Enter Only Digits";
return false;
      }

      if(isNaN(h)==false)
      {
document.getElementById("h").innerHTML="<font color=red>";
      }


       if(h.length!=10)
      {
document.getElementById("h").innerHTML="<font color=red>Please Enter 10 Digits";
return false;
      }

      if(h.length==10)
      {
document.getElementById("h").innerHTML="<font color=red>";

      }

      if(isNaN(i))
      {
document.getElementById("i").innerHTML="<font color=red>Please Enter Only Digits";
return false;
      }

      if(isNaN(i)==false)
      {
document.getElementById("i").innerHTML="<font color=red>";
      }

      if(i.length!=12)
      {
document.getElementById("i").innerHTML="<font color=red>Please Enter 12 Digits";
return false;
      }

      if(i.length==12)
      {
document.getElementById("i").innerHTML="<font color=red>";
      }

if(e.length<=6)
      {
document.getElementById("e").innerHTML="<font color=red>Size of password must be greater than 6";
return false;
      }

      if(e.length>6)
      {
document.getElementById("e").innerHTML="<font color=red>";
      }

      if(f.length<=6)
      {
document.getElementById("f").innerHTML="<font color=red>Size of password must be greater than 6";
return false;
      }

      if(f.length>6)
      {
document.getElementById("f").innerHTML="<font color=red>";
      }
      
      if(e!=f)
      {
        document.getElementById("f").innerHTML="<font color=red>U entered Wrong Password";
        return false;

      }

      if(e==f)
      {
        document.getElementById("f").innerHTML="<font color=red>";

      }

return true;
      
    }
  </script>
</head>
<body>
	 <div class="container">
  <h1 style="text-align: center;font-family:Constantia ;font-size: 30;color: red"><b>HR Registration</b></h1>
  <form name="f1" method="post" action="#" onsubmit="return validate()">
  	<div class="row">
  		<div class="col-lg-12">
  			<label for="fullname" style="font-size: 20px">Full Name:</label>
  		</div>
  		
  	</div>
  	<div class="row"> 
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="frstname" style="font-size: 20px">FirstName:<sup><font color=red>*</font></sup></label>
  				<input type="text" class="form-control"  placeholder="Enter First Name" name="txtfrstname" ><p id="a"></p>
  			</div>
  		</div>
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="midname" style="font-size: 20px">Middle Name:<sup><font color=red>*</font></sup></label>
  				<input type="text" class="form-control"  placeholder="Enter Middle Name" name="txtmidname" ><p id="b"></p>
  			</div>
  		</div>
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="lstname" style="font-size: 20px">Last Name:<sup><font color=red>*</font></sup></label>
  				<input type="text" class="form-control"  placeholder="Enter Last Name" name="txtlstname" ><p id="c"></p>
  			</div>
  		</div>	
  	</div>
  	<div class="row"> 
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="username" style="font-size: 20px">Username:<sup><font color=red>*</font></sup></label>
  				<input type="email" class="form-control"  placeholder="Enter Username" name="txtuser" ><p id="d"></p>
  			</div>
  		</div>
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="pwd" style="font-size: 20px">Password:<sup><font color=red>*</font></sup></label>
  				<input type="password" class="form-control"  placeholder="Enter Password" name="txtpwd" ><p id="e"></p>
  			</div>
  		</div>
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="cnfrmpwd" style="font-size: 20px">Confirm Password:</label>
  				<input type="password" class="form-control"  placeholder="Enter Confirm Password" name="txtcnfrmpwd" ><p id="f"></p>
  			</div>
  		</div>	
  	</div>
      <div class="row">
        <div class="col-lg-4">
          <div class="form-group">
          <label for="address" style="font-size: 20px">Address:<sup><font color=red>*</font></sup></label><br>
      <textarea class="form-control"  placeholder="Enter address" name="txtaddress" ></textarea><p id="g"></p></div></div>
  </div>
  <div class="row"> 
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="mobno" style="font-size: 20px">MobileNumber:<sup><font color=red>*</font></sup></label>
  				<input type="text" class="form-control"  placeholder="Enter Mobile Number" name="txtmobno" ><p id="h"></p>
  			</div>
  		</div>
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="aadharno" style="font-size: 20px">Adhaar Number:<sup><font color=red>*</font></sup></label>
  				<input type="text" class="form-control"  placeholder="Enter Adhaar Number" name="txtaadharno" ><p id="i"></p>
  			</div>
  		</div>
  		<div class="col-lg-4">
  			<div class="form-group">
  				<label for="lstname" style="font-size: 20px">Email:<sup><font color=red>*</font></sup></label>
  				<input type="email" class="form-control"  placeholder="Enter Email ID" name="txtemail" ><p id="j"></p>
  			</div>
  		</div>	
  	</div><br>
    <div align="center">	
<input type="submit" class="btn btn-primary" name="btn"></div>
  </form>
  </div>

</body>
</html>
