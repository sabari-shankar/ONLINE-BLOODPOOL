<html>
<head>
<title>Online Blood Pool | Update</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8" />
</head>
<body>

  <div id="header">
    <div id="connect"> <a href="#" class="facebook"></a> <a href="#" class="twitter"></a> </div>
    <a href="index.PHP" id="logo"><img src="images/logo_1457185690879.png" width="230" height="86" alt="" /></a>
  <ul id="navigation">
  
   <li><a href="home.html">HOME</a></li>
   <li class="selected Donor Registration"><a href="Registration.html">DONOR REGISTRATION</a></li>
      <li><a href="blood request.html">BLOOD REQUEST</a></li>
      <li><a href="search donor.html">SEARCH DONAR</a></li>
      <li><a href="blood tips.html">BLOOD TIPS</a></li>
    </ul>
  </div>
<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db_select=mysql_select_db("bloodpools",$conn);

	
	$_SESSION['Fullname']=$_POST['Fullname'];
	$Fullname=$_SESSION['Fullname'];
	$_SESSION['Username']=$_POST['Username'];
	$Username=$_SESSION['Username'];
	$_SESSION['Password']=$_POST['Password'];
	$Password=$_SESSION['Password'];
	$_SESSION['DOB']=$_POST['DOB'];
	$DOB=$_SESSION['DOB'];
	$_SESSION['Gender']=$_POST['Gender'];
	$Gender=$_SESSION['Gender'];
	$_SESSION['Bloodgroup']=$_POST['Bloodgroup'];
	$Bloodgroup=$_SESSION['Bloodgroup'];
	$_SESSION['Weight']=$_POST['Weight'];
	$Weight=$_SESSION['Weight'];
	$_SESSION['Mobile']=$_POST['Mobile'];
	$Mobile=$_SESSION['Mobile'];
	$_SESSION['Off_Phone']=$_POST['Off_Phone'];
	$Off_Phone=$_SESSION['Off_Phone'];
	$_SESSION['Emailid']=$_POST['Emailid'];
	$Emailid=$_SESSION['Emailid'];
	$_SESSION['Address']=$_POST['Address'];
	$Address=$_SESSION['Address'];
	$_SESSION['City']=$_POST['City'];
	$City=$_SESSION['City'];
	$_SESSION['DOLBD']=$_POST['DOLBD'];
	$DOLBD=$_SESSION['DOLBD'];
	$_SESSION['Donatedblood']=$_POST['Donatedblood'];
	$Donatedblood=$_SESSION['Donatedblood'];


$update=mysql_query("update registration set Fullname='$Fullname',Username='$Username',Password='$Password',DOB='$DOB',Gender='$Gender',Bloodgroup='$Bloodgroup',Weight='$Weight',Mobile='$Mobile',Off_Phone='$Off_Phone',Emailid='$Emailid',Address='$Address',City='$City',DOLBD='$DOLBD',Donatedblood='$Donatedblood' where Username='$Username'")or die(mysql_error());
/*if($register)
{
	echo "Record Inserted";
}
else
{
echo"record not inserted:".mysql_error();
}*/
$extract=mysql_query("select * from registration");
echo "<table border='1' bgcolor='#FFFFFF'>";
echo "<tr>
<th>Fullname</th>
<th>Username</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>BloodGroup</th>
<th>Weight</th>
<th>Mobile</th>
<th>Office Mobile</th>
<th>Email Id</th>
<th>Address</th>
<th>City</th>
<th>Date Of Last Blood Donation</th>
<th>Need for Blood</th>
</tr>";
while($row=mysql_fetch_array($extract))
{
	echo "<tr>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	<td>$row[6]</td>
	<td>$row[7]</td>
	<td>$row[8]</td>
	<td>$row[9]</td>
	<td>$row[10]</td>
	<td>$row[11]</td>
	<td>$row[12]</td>
	<td>$row[13]</td>
	</tr>";
}
echo "</table>";

		mysql_close($conn);
?>
 </div>
 </body>
 </html>