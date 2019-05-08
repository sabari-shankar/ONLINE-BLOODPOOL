<?php
include 'connection.php';

	$Patientname=$_POST['Patientname'];
	$Required_BG=$_POST['Required_BG'];
	$City=$_POST['City'];
	$Hospital_Name_Addr=$_POST['Hospital_Name_Addr'];
	$Doctor_Name=$_POST['Doctor_Name'];
	$When_Required=$_POST['When_Required'];
	$Contact_Name=$_POST['Contact_Name'];
	$Contact_Email=$_POST['Contact_Email'];
	$Contact_NO=$_POST['Contact_NO'];

$request=mysqli_query($conn,"INSERT INTO request values('$Patientname','$Required_BG','$City','$Hospital_Name_Addr','$Doctor_Name','$When_Required','$Contact_Name','$Contact_Email','$Contact_NO')");

if ($request)
	{
		echo "Inserted";
	}			
else
	{
		die(mysqli_error($conn));
	}
?>
 