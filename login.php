<html>
<head>
<title>ONLINE BLOOD POOL</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
<!--[if lte IE 7]><link rel="stylesheet" href="css/ie.css" type="text/css" charset="utf-8" /><![endif]-->
</head>
<body>
<div id="page">
  <div id="header">
    <div id="connect"> <a href="#" class="facebook"></a> <a href="#" class="twitter"></a> </div>
    <a href="index.php" id="logo"><img src="images/logo_1457185690879.png" width="300" height="100" alt="" /></a>
    <ul id="navigation">
      <li class="selected"><a href="index.php">HOME</a></li>
      <li><a href="Registration.html">DONOR REGISTRATION</a></li>
      <li><a href="blood request.html">BLOOD REQUEST</a></li>
      <li><a href="search donor.html">SEARCH DONOR</a></li>
      <li><a href="blood tips.html">BLOOD TIPS</a></li>
    </ul>
  </div>
  <!-- /#header -->
  <div id="body">
  <form action="update.php" method="post">
<?php
include 'connection.php';
if(isset($_POST['login']))
{
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$sql="select * from registration where Username='$Username' and Password='$Password'";
	$rs=mysqli_query($conn,$sql) or die(mysqli_error());
		if(mysqli_num_rows($rs)>0)
		{
		$_SESSION['Username']=$Username;
		$_SESSION['Password']=$Password;
		
?>
<?php

session_start();
//$conn=mysql_connect("localhost","root","");
//$db_select=mysql_select_db("bloodpools",$conn);
include 'connection.php';
   	$_SESSION['Username']=$_POST['Username'];
	$Username=$_SESSION['Username'];
	$_SESSION['Password']=$_POST['Password'];
	$Password=$_SESSION['Password'];
	
	$extract=mysqli_query($conn,"select * from registration where Username='$Username' and Password='$Password'");
	

	while($row=mysqli_fetch_array($extract))
		{
			echo"<fieldset style='background-position:center'>
      <fieldset style='background-position:center'>
			      <table cellspacing='3' cellpadding='1' width='420' align='center'>
                                  <tr>
                                    <td width='205' align='left' valign='top'>Full Name </td>
                                    <td align='left' valign='top'><input name='Fullname'  type='text' maxlength='30' placeholder='Full Name' required autofocus='true' title='Enter your Full Name' value='$row[Fullname]'/>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td align='left' valign='top'>Username</td>
                                    <td align='left' valign='top'><input name='Username'  type='text'  placeholder='User Name'  maxlength='20' title='Enter the username' value='$row[Username]' readonly/>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td align='left' valign='top'>Password</td>
                                    <td align='left' valign='top'><input name='Password'  type='password' placeholder='Password' required  pattern='([A-Z][0-9].{8,}' title='Enter the password' maxlength='20' value='$row[Password]'/>
                                       </td>
                                  </tr>
                                  <tr>
                                    <td align='left' valign='top'>Confirm Password </td>
                                    <td align='left' valign='top'><input name='Con_Password' type='password' placeholder='Re-enter Password' pattern='([A-Z][0-9].{8,}'  title='Enter the Confirm Password' maxlength='20' />
                                       </td>
                                  </tr>
                                </table></fieldset>
					<fieldset style='background-position:center'>
  <table cellspacing='3' cellpadding='1' width='420' align='center'>
                                  <tr>
                                    <td width='205' align='left' valign='top' >Date of Birth </td>
   <td>                                  																	  <input name='DOB' type='date'  placeholder='Date Of Birth' value='$row[DOB]'></td>
								 </tr>
                                  <tr>
                                    <td align='left' valign='top'>Gender</td>
                                    <td align='left' valign='top'><input name='Gender'  type='radio' placeholder='gender'  title='Select the gender' value='MALE' /> MALE <input name='Gender' type='radio' placeholder='Gender'  title='Select the gender' value='FEMALE'/>
                                      FEMALE
                                  </td>
                                  </tr>
                                  <tr>
                                  <td align='left' valign='top'>Blood Group</td>
             <td align='left' valign='top'>
				<select name='Bloodgroup' placeholder='Bloodgroup' ><option value='0'>-Select your bloodgroup-</option><option value='A+'>A+</option><option value='A1+'>A1+</option><option value='A2+'>A2+</option><option value='B+'>B+</option><option value='A1B+'>A1B+</option><option value='A2B+'>A2B+</option><option value='AB+'>AB+</option><option value='O+'>O+</option><option value='A-'>A-</option><option value='A1-'>A1-</option><option value='A2-'>A2-</option><option value='B-'>B-</option><option value='A1B-'>A1B-</option><option value='A2B-'>A2B-</option><option value='AB-'>AB-</option><option value='O-'>O-</option></select>                                     </td>
                                  </tr>
                                  <tr>
                                    <td align='left' valign='top'>Weight</td>
                                  <td align='left' valign='top'><input name='Weight'  type='text' size='10' maxlength='5' placeholder='Weight'  title='Enter your Weight' value='$row[Weight]' />
                                       <font color='#999966'>Kgs.</font> </td>
                                  </tr>
                                </table></fieldset>
				<fieldset style='background-position:center'>
     
								<table cellspacing='3' cellpadding='1' width='420' align='center'>
     
     
        <tr>
          <td align='left' valign='top' > Mobile No.  </td>
          <td align='left' valign='top'><input name='Mobile' type='text' maxlength='15' placeholder='Phone No'   pattern='[7-9]{1}[0-9]{9}' title='Enter your Mobile number' value='$row[Mobile]' />
            </td>
        </tr>
        <tr>
          <td align='left' valign='top'  width='205'>Office Phone </td>
         <td align='left' valign='top'><input name='Off_Phone' type='text' maxlength='15'  placeholder='Another No'  pattern='[7-9]{1}[0-9]{9}' title='Enter your Office number' value='$row[Off_Phone]'>
             </td>
        </tr>
        <tr>
          <td align='left' valign='top' >Email ID </td>
          <td align='left' valign='top'><input name='Emailid' type='text'  maxlength='50' placeholder='Email Id'  pattern='^[a-zA-Z0-9]+@+[a-z]+.+[a-z]{3,5}$' title='Enter your Email id' value='$row[Emailid]'/>
             </td>
        </tr>
        <tr>
          <td align='left' valign='top'>Address</td>
          <td align='left' valign='top'><textarea rows='3' name='Address' placeholder='Address'  title='Enter your Address'>$row[Address]</textarea></td>
        </tr>
        
          <td align='left' valign='top'>City</td>
           <td><select name='City' plceholder='City'  title='select your city'><option value='0'>-Select your City-</option><option value='Ariyalur'>Ariyalur</option><option value='Chennai'>Chennai</option><option value='Coimbatore'>Coimbatore</option><option value='Cuddalore'>Cuddalore</option><option value='Dharmapuri'>Dharmapuri</option><option value='Dindigul'>Dindigul</option><option value='Erode'>Erode</option><option value='Kanchipuram'>Kanchipuram</option><option value='Kanyakumari'>Kanyakumari</option><option value='Karur'>Karur</option><option value='Krishnagiri'>Krishnagiri</option><option value='Madurai'>Madurai</option><option value='Nagapattinam'>Nagapattinam</option><option value='Namakkal'>Namakkal</option><option value='Nilgiris'>Nilgiris</option><option value='Perambalur'>Perambalur</option><option value='Pudukkottai'>Pudukkottai</option><option value='Rmanathapuram'>Rmanathapuram</option><option value='Salem'>Salem</option><option value='Sivagangai'>Sivagangai</option><option value='Thanjavur'>Thanjavur</option><option value='Theni'>Theni</option><option value='Thothukudi'>Thothukudi</option><option value='Tiruchirappalli'>Tiruchirappalli</option><option value='Tirunelveli'>Tirunelveli</option><option value='Tiruppur'>Tiruppur</option><option value='Tiruvallur'>Tiruvallur</option><option value='Tiruvannamalai'>Tiruvannamalai</option><option value='Tiruvarur'>Tiruvarur</option><option value='Vellore'>Vellore</option><option value='Viluppuram'>Viluppuram</option><option value='Virudhunagar'>Virudhunagar</option></select></td>

        </tr>
        <tr>
          <td align='left'>Date of last blood donation</td>
          <td valign='top' align='left'>
            <input name='DOLBD' type='date' value='$row[DOLBD]'>
		    								    </td>
        </tr>
        <tr>
          <td valign='top' align='left' >How often have you donated <br />
            blood in the past?</td>
          <td align='left'><select name='Donatedblood' placeholder='DonatedBlood'><option value='0'>-SELECT-</option><option value='Yet to donate'>Yet to donate</option><option value='Regular donor'>Regular donor</option><option value='On need basis'>On need basis</option></select>                                    </td>
        </tr>
        
      </table></fieldset>";
			}
		}
		else{
		echo "<Script type='text/javascript'> alert('Invalid Username and Password....'); document.f1.user.focus(); </script>";
		 header("location:index.php");
		}
}
?>
     <p align="center">
                           <input name="reset2" type="reset"  value="Reset" />
                             <input name="submit" type="submit"  value="Update &raquo;" />
          </p>
      </form>
      