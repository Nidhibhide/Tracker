<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css>
  <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js></script>
  <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js></script>
  <style type='text/css'>
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
    function validate()
   {
      var x=document.f1.txtcon.value;
    var y=document.f1.txt10per.value;
   var z=document.f1.txt12per.value;
   var a=document.f1.txtgraPercentage.value;
   var b=document.f1.txtdipper.value;

    if(isNaN(x))
      {
document.getElementById("cc").innerHTML="<font color=red>Please Enter Only Digits";
return false;
      }
      else if(x.length!=10)
      {
        document.getElementById("cc").innerHTML="<font color=red>Please Enter 10 Digits";
        //document.write("hello");
return false;
      }
else if(isNaN(y))
{
document.getElementById("10th").innerHTML="<font color=red>Please Enter Only Digits";
return false;
}
else if(isNaN(z))
{
  document.getElementById("12th").innerHTML="<font color=red>Please Enter Only Digits";
return false;
}
else if(isNaN(a))
{
  document.getElementById("Graduation").innerHTML="<font color=red>Please Enter Only Digits";
return false;

}
else if(isNaN(b))
{
  document.getElementById("Diploma").innerHTML="<font color=red>Please Enter Only Digits";
return false;
}
else 
  return true;
}
function changeStatus()
    {
      var a=document.f1.status.value;
     // document.write(a);
      if(a=='Unmarried')
      {
document.getElementById('wifename').style.visibility='hidden';
      }
      else
      {
        document.getElementById('wifename').style.visibility='visible';
        document.getElementById('spouse').value="";
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <form action="update_candidate.php" method="post" name=f1 ><!--onsubmit="return validate()"-->
      <h1 style="text-align: center;font-family:Constantia;font-size: 30px;color: red"><b>Edit Candidate Details</b></h1>
      <?php
      $con=mysqli_connect("localhost","root","","website");
$y=$_GET['id'];
session_start();
$_SESSION['a']=$y;
$rs=mysqli_query($con,"select candidate_id,full_name,mother_name,father_name,email,status,dob,marital_status,spouse_name,nation,religion,cast,category,mother_tongue,qualification,curr_add,per_add,dip_per,10th_per,12th_per,gra_per,skills,application_date,contact_no,known_lang from candidate_info where candidate_id=$y");
while($array=mysqli_fetch_array($rs))
{
  echo "<div class=row> ";
      echo "<div class=col-lg-4>
        <div class=form-group>
          <label for=fullname style=font-size: 16px>Candidate ID:</label>
          <input type=text class=form-control  value=$array[0] readonly>
        </div>
      </div>";
      echo "<div class=col-lg-4>
        <div class=form-group>
          <label for=fathername style=font-size: 16px>Full Name:</label>
          <textarea class=form-control  rows=1 cols=1 name=txtfullname1> $array[1]</textarea>
        </div>
      </div>";
      echo "<div class=col-lg-4>
        <div class=form-group>
          <label for=mothername style=font-size: 16px>Mother's Name:</label>
          <input type=text class=form-control  value=$array[2] placeholder='Enter Mother Name' name=txtmothername required>
        </div>
      </div>  
    </div>";
    echo "<div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=email style=font-size: 16px>Father Name:</label>
          <input type=text class=form-control value=$array[3] placeholder='Enter Father Name' name=txtfathername required>
        </div>
      </div>";
      echo "<div class=col-lg-4>
        <div class=form-group>
          <label for=Contact style=font-size: 16px>Email ID:</label>
          <input type=email class=form-control value=$array[4] placeholder='Enter Contact Number' name=txtemail required id=cc>
        </div>
      </div>";
     echo  "<div class=col-lg-4>
      <label for=dob style=font-size: 16px>Status:</label>
        <div class=form-group>
          <textarea class=form-control readonly rows=1 cols=1> $array[5]</textarea>
        </div>
      </div>
      </div>";
      echo "<div class=row>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=maritalstatus style=font-size: 16px>Date Of Birth:</label>
          <input type=date class=form-control placeholder='Enter Date Of Birth' name=txtdob value=$array[6] required > 
      </div></div>";

     echo "<div class=col-lg-4>
        <label for=spouse style=font-size: 16px>Marital Status:</label>
        <div class=form-group>
          <select id='maritalstatus' class=form-control onchange='changeStatus()' 
          name=status>
            <option value=$array[7]>$array[7]</option><option value=married>Married</option><option value=Unmarried>UnMarried</option>
          </select>
        </div>
      </div>";
      if($array[8]=='')
      {
      echo"<div class=col-lg-4 id=wifename>
        <div class=form-group>
          <label for=nationality style=font-size: 16px>Spouse Name:</label><input type=text class=form-control  value='None'  name=txtspouse id='spouse'>    
        </div>
      </div>";
    }
    if($array[8]!='')
    {
      echo "
      <div class=col-lg-4 id='wifename'>
        <div class=form-group>
          <label for=nationality style=font-size: 16px>Spouse Name:</label><input type=text class=form-control  value=$array[8]  name=txtspouse >    
        </div>
      </div>
      "
      ;


    }
      echo "</div>
       <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=religion style=font-size: 16px>Nationality:</label>
          <input type=text class=form-control  value=$array[9] placeholder='Enter Nationality' name=txtnation required>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=fathername style=font-size: 16px>Religion:</label><br>
          <input type=text class=form-control  value=$array[10] placeholder='Enter Religion' name=txtreligion required>
        </div>
      </div>
      <div class=col-lg-4><div class=form-group>
          <label for=Category style=font-size: 16px>Cast:</label><br>
           <input type=text class=form-control  value=$array[11] placeholder='Enter Cast' name=txtcast required=''>
        </div>
      </div>  
    </div>
    <div class=row> 
      <div class=col-lg-4>
        <div class=form-group>
          <label for=religion style=font-size: 16px>Category:</label>
          <select class=form-control name=category>
            <option>$array[12]</option><option>SC</option><option>ST</option><option>OBC</option><option>SBC</option><option>VJ</option><option>General</option><option>NT</option>
          </select>    
          
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=qualification style=font-size: 16px>Mother Tongue:</label>         
          <input type=text class=form-control  value=$array[13] placeholder='Enter Mother Tongue' name=txttongue required>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=form-group>
          <label for=qualification style=font-size: 10px>Qualification:</label>      
          <select class=form-control name=txtqua>
            <option>$array[14]</option><option>B.E.</option><option>B.Tech(All Branches)</option><option>Bsc/BCA</option>
          </select>   
        </div>
      </div>
      </div>
    <div class=row> 
      <div class=col-lg-6>
        <div class=form-group>
          <label for=Percentage style=font-size: 16px>Current Address:</label>
          <textarea  class=form-control  required name=txtcurraddline1>$array[15]</textarea>
        </div>
      </div>  
      <div class=col-lg-6>
        <div class=form-group>
                <label for=nationality style=font-size: 16px>Permanant Address:</label><br>
        <textarea  class=form-control  name=txtperaddline1 required>$array[16]</textarea>
        </div>
        </div>
        </div>  
     <div class=row>"; 
    if($array[17]!='')
    {
     echo" <div class=col-lg-3>
        <div class=form-group>
          <label for=Skills style=font-size: 16px>Diploma Percentage:</label><br>
          <input type=text class=form-control  value=$array[17]  name='txtdipper' id='Diploma'>
        </div>
      </div>";
    }
    if($array[17]=='')
    {
     echo" <div class=col-lg-3>
        <div class=form-group>
          <label for=Skills style=font-size: 16px>Diploma Percentage:</label><br>
          <input type=text class=form-control  value='None' placeholder='Enter Percentage' name=txtdipper id=Diploma>
        </div>
      </div>";
    }
      echo "<div class=col-lg-3>
        <div class=form-group>
          <label for=Percentage style=font-size: 16px>10th Percentage :</label>
          <input type=text class=form-control  value=$array[18] placeholder='Enter Percentage' name=txt10per required id=10th>
        </div>
      </div>
      <div class=col-lg-3>
        <div class=form-group>
          <label for=Percentage style=font-size: 16px>12th Percentage :</label>
          <input type=text class=form-control  value=$array[19] placeholder='Enter Percentage' name=txt12per required id=12th>
        </div>
    </div>";
   
    echo "<div class=col-lg-3>
        <div class=form-group>
          <label for=clgname style=font-size: 16px>Graduation Percentage</label>
          <input type=text class=form-control value=$array[20] placeholder='Enter Percentage' name=txtgraPercentage id=Graduation required>
        </div>
      </div>";
      
    echo "</div>
    <div class=row> 
    <div class=col-lg-4>
        <div class=form-group>
          <label for=Applicationdate style=font-size: 16px>Skills :</label>
          <textarea class=form-control name=txtskills>$array[21]</textarea>
        </div>
      </div>
      ";
      
      echo "<div class=col-lg-4>
        <div class=form-group>
          <label for=nationality style=font-size: 16px>Application Date:</label><br>
         <input type=date class=form-control placeholder='Enter Application Date' name=txtapplicationdate required='' value='$array[22]' readonly>
        </div>
      </div>";
      echo "<div class=col-lg-4>
        <div class=form-group>
          <label for=Skills style=font-size: 16px>Contact No:</label><br>
          <input type=text class=form-control  value=$array[23] placeholder='Enter Contact Number' name=txtcon required>
          <p id=cc></p>
        </div>
      </div>
    </div>";
     echo "<div class=row> 
    <div class=col-lg-4>
        <div class=form-group>
          <label for=Applicationdate style=font-size: 16px>Known Languges :</label>
          <textarea class=form-control name=txtknownlang required>$array[24]</textarea>
        </div>
      </div>
      </div>";
}
?>
<div align=center>
   <input type="submit" name="" class='btn btn-primary' value="Update" >&nbsp&nbsp&nbsp  <a href=candidate_display.php class="btn btn-primary">Back</a> </div>
  
    </form>
    
      


  </div>
  <?php
  mysqli_close($con);
  ?>

</body>
</html>