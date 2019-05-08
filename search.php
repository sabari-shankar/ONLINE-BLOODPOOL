<html>
<head>
<title>Online Blood Pool</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" charset="utf-8" />
</head>
<body>
<div id="page">
  <div id="header">
    <div id="connect"> <a href="#" class="facebook"></a> <a href="#" class="twitter"></a> </div>
    <a href="index.html" id="logo"><img src="images/logo_1457185690879.png" width="300" height="100" alt="" /></a>
    <ul id="navigation">
      <li><a href="index.html">HOME</a></li>
      <li><a href="Registration.html">DONOR REGSTRATION</a></li>
      <li ><a href="blood request.html">BLOOD REQUEST</a></li>
      <li class="selected Search Donor"><a href="search donor.html">SEARCH DONOR</a></li>
      <li><a href="blood tips.html">BLOOD TIPS</a></li>
    </ul>
  </div>
   <div id="body">
    <?php
	session_start();
include 'connection.php';
    $_SESSION['City']=$_POST['City'];
	$City1=$_SESSION['City'];
	$_SESSION['Bloodgroup']=$_POST['Bloodgroup'];
	$Bloodgroup1=$_SESSION['Bloodgroup'];
	
	//$City='Madurai';
	//$Bloodgroup='B+';


$sr=mysqli_query($conn,"select * from registration where City='$City1' and Bloodgroup='$Bloodgroup1' ");

		
	echo"<div align='center'><table border='1' cellspacing='3' cellpadding='3' align='center' bgcolor='#FFFFFF'>";
 echo"<tr><th>NAME</th><th>BLOODGROUP</th><th>MOBILE</th><th>ADDRESS</th><th>CITY</th>";
 if(mysqli_num_rows($sr)>0){
while($fetch=mysqli_fetch_array($sr))
{
	echo"<tr>
	<td>$fetch[Fullname]</td>
	<td>$fetch[Bloodgroup]</td>
	<td>$fetch[Mobile]</td>
	<td>$fetch[Address]</td>
	<td>$fetch[City]</td>
	</tr>";
}

}
else{
	echo"<tr><th colspan=5>Records are Not Found</th></tr>";
	echo"<script>alert('Record Not Found');</script>";
}
echo"</table></div>";
?>
  