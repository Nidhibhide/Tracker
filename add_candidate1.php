<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
   select
   {
    width: 80%;
    padding: 12px;
    margin: 5px ;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   }
  </style>
  <script type="text/javascript">
    function changeStatus()
    {
      //alert("Hello"); 
      var a=document.f1.status.value;
      //alert(a);
     // document.write(a);
      if(a=="Unmarried")
      {
document.getElementById('wifename').style.visibility="hidden";
      }
      else
      {
        document.getElementById('wifename').style.visibility="visible";
      }
    }
    function checkfunction()
    {
      alert("Hello"); 
      var addline1=document.f1.txtperaddline1.value;
       var addline2=document.f1.txtperaddline2.value;
        var taluka=document.f1.txtpertaluka.value;
         var state=document.f1.txtperstate.value;
          var district=document.f1.txtperdistrictname.value;
           var pin=document.f1.txtperpincode.value;
    document.f1.txtcurraddline1.value=addline1;
    document.f1.txtcurraddline2.value=addline2;
    document.f1.txtcurrtaluka.value=taluka;
    document.f1.txtcurrstate.value=state;
    document.f1.txtcurrdistrictname.value=district;
    document.f1.txtcurrpincode.value=pin;
    }

   function validate()
   {
    //alert("Hello");
      var x=document.f1.txtcon.value;
    //alert(x);
    //alert(x);
    var y=document.f1.txt10per.value;
    alert(y);
   var z=document.f1.txt12per.value;
   var a=document.f1.txtgraPercentage.value;
   /*var b1=document.f1.txtdipclgname.value;
   alert
   if(b1!="undefined")
   {
    alert(mrng);*/
   var b=document.f1.txtdipper.value;
 //}
 alert(b);
   var c=document.f1.txtperpincode.value;
   var p=document.f1.txtfullname.value;
  // alert("p"); 
   var d=document.f1.txtcurrpincode.value;

/*if(p=="" || p==null)
{
document.getElementById("p").innerHTML="<font color=red>Please Enter Name";
return false;

}*/

    if(isNaN(x))
      {

document.getElementById("cc").innerHTML="<font color=red>Please Enter Only Digits";
return false;
      }
      if(isNaN(x)==false)
      {

document.getElementById("cc").innerHTML="<font color=red>";

      }
      if(x.length!=10)
      {
        document.getElementById("cc").innerHTML="<font color=red>Please Enter 10 Digits";
return false;
      }
      if(x.length==10)
      {
        document.getElementById("cc").innerHTML="<font color=red>";
      }
 if(isNaN(c))
{
document.getElementById("aa").innerHTML="<font color=red>Please Enter Only Digits";
return false;
}
if(isNaN(c)==false)
{
document.getElementById("aa").innerHTML="<font color=red>";
}
if(isNaN(d)==false)
{
document.getElementById("bb").innerHTML="<font color=red>";
}
if(c.length!=6)
      {
        document.getElementById("aa").innerHTML="<font color=red>Please Enter 6 Digits";
return false;
      }
      if(c.length==6)
      {
        document.getElementById("aa").innerHTML="<font color=red>";
      }
      if(d.length!=6)
      {
        document.getElementById("bb").innerHTML="<font color=red>Please Enter 6 Digits";
return false;
      }
      if(d.length==6)
      {
        document.getElementById("bb").innerHTML="<font color=red>";
      }
      if(isNaN(y) || y<0 || y>100)
      {
alert("hello");
        document.getElementById("per").innerHTML="<font color=red>value is Out of Range";
        return false;
      }
       if( y<60)
      {
alert("hello");
        document.getElementById("per").innerHTML="<font color=red>Percentage must be greater than 60";
        return false;
      }
       if(isNaN(z) || z<0 || z>100)
      {
alert("hello");
        document.getElementById("12th").innerHTML="<font color=red>value is Out of Range";
        return false;
      }
       if( z<60)
      {
alert("hello");
        document.getElementById("12th").innerHTML="<font color=red>Percentage must be greater than 60";
        return false;
      }
      if(isNaN(a) || a<0 || a>100)
      {
alert("hello");
        document.getElementById("Graduation").innerHTML="<font color=red>value is Out of Range";
        return false;
      }
       if( a<60)
      {
alert("hello");
        document.getElementById("Graduation").innerHTML="<font color=red>Percentage must be greater than 60";
        return false;
      }
      if(b!="")
      {
      if(isNaN(b) || b<0 || b>100)
      {
alert("hello");
        document.getElementById("Diploma").innerHTML="<font color=red>value is Out of RangeDiploma";
        return false;
      }
    }
    if(b!="")
    {
       if( b<60)
      {
alert("hello");
        document.getElementById("Diploma").innerHTML="<font color=red>Percentage must be greater than 60";
        return false;
      }
    }



  return true;
}
  </script>
</head>
<body style="background-color: white;">
   <div class="container">
  <h1 style="text-align: center;font-family:Constantia ;color: red;font-size: 30px;"><b>Add Candidate Details</b></h1><br></p>
  <form name="f1" method="post" action="" onsubmit="return validate()">
  <div class="row"> 
      <div class="col-lg-4">
        <div class="form-group">
          <label for="fullname" style="font-size: 16px">Full Name:</label>
          <input type="text" class="form-control" placeholder="Enter Full Name" name="txtfullname" required="">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="fathername" style="font-size: 16px">Father's Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Father's Name" name="txtfathername" required="">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="mothername" style="font-size: 16px">Mother's Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Mother's Name" name="txtmothername" required="" >
        </div>
      </div>  
    </div>
    <div class="row"> 
      <div class="col-lg-4">
        <div class="form-group">
          <label for="email" style="font-size: 16px">Email ID:</label>
          <input type="email" class="form-control"  placeholder="Enter Email ID" name="txtemail" required="">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="Contact" style="font-size: 16px">Contact Number:</label>
          <input type="text" class="form-control"  placeholder="Enter Contact Number" name="txtcon" required="" ><p id="cc"></p>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
   <label for="dob" style="font-size: 16px">Date Of Birth:</label>
          <input type="Date" class="form-control"  placeholder="Enter Date Of Birth" name="txtdob" required="">
        </div>
      </div> <div class=row>
      <div class="col-lg-4">
          <label for="maritalstatus" style="font-size: 16px">Marital Status:</label>
          <select id="maritalstatus" class="form-control" onchange="changeStatus()" name="status">
            <option value="married">Married</option><option value="Unmarried">UnMarried</option>
          </select>
        
      </div>
      <div class="col-lg-4" id="wifename">
        <label for="spouse" style="font-size: 16px">Spouse:</label>
        <div class="form-group" >
<input type="text" class="form-control"  placeholder="Enter Spouse Name" name="txtspouse"  >    
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="nationality" style="font-size: 16px">Nationality :</label><br>
         <input type="text" class="form-control"  placeholder="Enter Nationality" name="txtnation" required="">    
        </div>
      </div></div>
      <div class="row"> 
      <div class="col-lg-4">
        <div class="form-group">
          <label for="religion" style="font-size: 16px">Religion:</label>
          <input type="text" class="form-control" placeholder="Enter Religion" name="txtreligion" required="" >
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="fathername" style="font-size: 16px">Cast:</label><br>
          <input type="text" class="form-control"  placeholder="Enter Cast" name="txtcast" required="">
        </div>
      </div>
      <div class="form-group">
      <div class="col-lg-4">
          <label for="Category" style="font-size: 16px">Category:</label><br>
          <select class="form-control" name="category">
            <option>SC</option><option>ST</option><option>OBC</option><option>SBC</option><option>VJ</option><option>General</option><option>NT</option>
          </select>    
        </div>
      </div>  
    </div>
    <div class="row"> 
      <div class="col-lg-4">
        <div class="form-group">
          <label for="religion" style="font-size: 16px">Mother Tongue:</label>
          <input type="text" class="form-control" placeholder="Enter Mother Tongue" name="txttongue" required="">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="qualification" style="font-size: 16px">Qualification:</label>
  <select class="form-control" name="txtqua">
            <option>B.E.</option><option>B.Tech(All Branches)</option><option>Bsc/BCA</option>
          </select>    
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="nationality" style="font-size: 16px">Languages Known :</label><br>
         <textarea name="txtknownlang" class="form-control" required="" ></textarea>  
        </div>
      </div></div>
    </div><br><br>
   <div class="row"><div class="col-lg-12"><p><b><font size=5px>Permanant Address :</font></b></p></div></div>
    <div class="row"> 
      <div class="col-lg-3">
        <div class="form-group">
          <label for="addline1" style="font-size: 16px">Address Line 1:</label>
          <input type="text" class="form-control" placeholder="Enter Address Line 1" name="txtperaddline1" required="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="addline2" style="font-size: 16px">Address Line 2:</label>
          <input type="text" class="form-control"  placeholder="Enter Address Line 2" name="txtperaddline2" required="" >
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="mothername" style="font-size: 16px">Taluka:</label>
          <input type="text" class="form-control"  placeholder="Enter Taluka Name" name="txtpertaluka" required="">
        </div>
      </div>  
       <div class="col-lg-3">
        <div class="form-group">
          <label for="statename" style="font-size: 16px">State:</label>
          <input type="text" class="form-control"  placeholder="Enter State Name" name="txtperstate" required="" >
        </div>
      </div> 
    </div>
    <div class="row"> 
      <div class="col-lg-3">
        <div class="form-group">
          <label for="fullname" style="font-size: 16px">District:</label>
          <input type="text" class="form-control" placeholder="Enter District Name" name="txtperdistrictname" required="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="fathername" style="font-size: 16px">PinCode:</label>
          <input type="text" class="form-control"  placeholder="Enter PinCode" name="txtperpincode" required=""><p id="aa"></p>
        </div>
      </div>
    </div><br><br>
   <p><input type="checkbox" name id="check" onclick="checkfunction()"><font size=4><b> If Your Permanat Address is same as Current Address given select given checkbox</b></p><br>
    <div class="row"><div class="col-lg-12"><p><b><font size=5px>Current Address :</font></b></p></div></div>
    <div class="row"> 
      <div class="col-lg-3">
        <div class="form-group">
          <label for="addline1" style="font-size: 16px">Address Line 1:</label>
          <input type="text" class="form-control" placeholder="Enter Line Address 1" name="txtcurraddline1" required="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="addline2" style="font-size: 16px">Address Line 2:</label>
          <input type="text" class="form-control"  placeholder="Enter Address Line 2" name="txtcurraddline2" required="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="Taluka" style="font-size: 16px">Taluka:</label>
          <input type="text" class="form-control"  placeholder="Enter Taluka" name="txtcurrtaluka" required="" >
        </div>
      </div>  
       <div class="col-lg-3">
        <div class="form-group">
          <label for="State" style="font-size: 16px">State:</label>
          <input type="text" class="form-control"  placeholder="Enter State" name="txtcurrstate" required="">
        </div>
      </div> 
    </div>
    <div class="row"> 
      <div class="col-lg-3">
        <div class="form-group">
          <label for="fullname" style="font-size: 16px">District:</label>
          <input type="text" class="form-control" placeholder="Enter District" name="txtcurrdistrictname" required="">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="PinCode" style="font-size: 16px">PinCode:</label>
          <input type="text" class="form-control"  placeholder="Enter PinCode" name="txtcurrpincode" required=""><p id="bb"></p>
        </div>
      </div>
    </div><br>
     <br>
    <div class="row"><div class="col-lg-12"><p><b><font size=5px>10th Details:</font></b></p></div></div>
     <div class="row"> 
      <div class="col-lg-4">
        <div class="form-group">
          <label for="schoolname" style="font-size: 16px">School Name:</label>
          <input type="text" class="form-control" placeholder="Enter School Name" name="txt10schoolname" required="" >
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="boardname" style="font-size: 16px">Board Name:</label>
          <input type="text" class="form-control"  placeholder="Enter Board Name" name="txt10boardname" required="">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="Percentage" style="font-size: 16px">Percentage:</label>
          <input type="text" class="form-control"  placeholder="Enter Percentage" name="txt10per" required="" ><p id="per"></p>
        </div>
      </div>  
    </div><br>
     <div class="row"><div class="col-lg-12"><p><b><font size=5px>12th Details:</font></b></p></div></div>
     <div class="row"> 
      <div class="col-lg-4">
        <div class="form-group">
          <label for="clgname" style="font-size: 16px">College Name:</label>
          <input type="text" class="form-control" placeholder="Enter College Name" name="txt12clgname" required="" >
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="universityname" style="font-size: 16px">Board Name:</label>
          <input type="text" class="form-control"  placeholder="Enter University Name" name="txt12universityname" required="" >
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="Percentage" style="font-size: 16px">Percentage :</label>
          <input type="text" class="form-control"  placeholder="Enter Percentage" name="txt12per"  required=""><p id="12th"></p>
        </div>
      </div>  
    </div>
    <br>
     <div class="row"><div class="col-lg-12"><p><b><font size=5px>Graduation Details:</font></b></p></div></div>
     <div class="row"> 
      <div class="col-lg-3">
        <div class="form-group">
          <label for="clgname" style="font-size: 16px">College Name:</label>
          <input type="text" class="form-control" placeholder="Enter College Name" name="txtgraclgname" required="" >
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="coursename" style="font-size: 16px">Course Name:</label>
          <input type="text" class="form-control" placeholder="Enter Course Name" name="txtgracoursename" required="" >
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="universityname" style="font-size: 16px">University Name:</label>
          <input type="text" class="form-control"  placeholder="Enter University Name" name="txtgrauniversityname" required="" >
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="Percentage" style="font-size: 16px">Percentage :</label>
          <input type="text" class="form-control"  placeholder="Enter Percentage" name="txtgraPercentage"  required=""><p id="Graduation"></p>
        </div>
      </div>  
    </div><br>
    <div class="row"><div class="col-lg-12"><p><b><font size=5px>Diploma Details<font size=4px> (Optional)</font> :</font></b></p></div></div>
     <div class="row"> 
      <div class="col-lg-3">
        <div class="form-group">
          <label for="clgname" style="font-size: 16px">College Name:</label>
          <input type="text" class="form-control" placeholder="Enter College Name" name="txtdipclgname" >
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="coursename" style="font-size: 16px">Course Name:</label>
          <input type="text" class="form-control" placeholder="Enter Course Name" name="txtdipcoursename" >
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="universityname" style="font-size: 16px">University Name:</label>
          <input type="text" class="form-control"  placeholder="Enter University Name" name="txtdipuniversityname">
        </div>
      </div>
      <div class="col-lg-3">
        <div class="form-group">
          <label for="Percentage" style="font-size: 16px">Percentage :</label>
          <input type="text" class="form-control"  placeholder="Enter Percentage" name="txtdipper"  ><p id="Diploma"></p>
        </div>
      </div>  
    </div>
    <br>
    <div class="row"> 
      <div class="col-lg-4">
        <div class="form-group">
          <label for="Skills" style="font-size: 16px">Skills:</label><br>
          <textarea cols="30" rows="2" placeholder="Enter Your Skills" class="form-control"  name="txtskills" required=""></textarea>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-group">
          <label for="Applicationdate" style="font-size: 16px">Application Date :</label>
          <input type="text" class="form-control"  placeholder="Enter Application Date" name="txtapplicationdate"  value="<?php $date=date("Y-m-d"); echo $date;?>" readonly>
        </div>
      </div>
    </div>
    <div align="center"><input type="submit" class="btn btn-primary" name="btn">&nbsp&nbsp&nbsp
<a href="admindashboard.html" class="btn btn-primary" >Dashboard</a></div>
</form>
  </div></body>
</html>





        
      










      