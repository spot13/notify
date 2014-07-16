<?php	
session_start();	
if(!isset($_SESSION['user']))
	header('location:login.php');
	
require_once("../inc_notify/config.php"); // includes the configuration file
	



		
// add a new css styles to the database using the given values from the form		
if(isset($_POST['addentry']))
{

	// get the posted fields from the form
	
	$name = $_POST['cssname'];
	$files = $_POST['cssfiles'];
	$stdate = $_POST['cssstdate'];
	$sttime = $_POST['csssttime'];
	$fndate = $_POST['cssfndate'];
	$fntime = $_POST['cssfntime'];
	$uptime = $_POST['cssuptime'];
	
	// escape those values to remove the effects of quotes it order to avoid database hacking.
	$name = mysql_real_escape_string($name);
	$stdate = mysql_real_escape_string($stdate);
	$fndate = mysql_real_escape_string($fndate);
	$sttime = mysql_real_escape_string($sttime);
	$fntime = mysql_real_escape_string($fntime);
	$files = mysql_real_escape_string($files);
	
	mysql_query("Insert into cssfiles values('','$name','$files','$stdate','$sttime','$fndate','$fntime','$uptime')"); // add those values to the database
	
}		
	
header('location:index.php');	// return to the index page.
		
?>