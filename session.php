<?
session_start();
if($_SESSION['Username']=="")
{
header("location:home.php");
}

?>
