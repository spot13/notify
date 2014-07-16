<?php	
session_start();	
if(!isset($_SESSION['user']))
	header('location:login.php');
	
require_once("../inc_notify/config.php"); // includes the configuration file




				
if(isset($_POST['chng']))
{
	
	$ou = $_POST['olduname'];
	$nu = $_POST['newuname'];
	$op = $_POST['oldupass'];
	$np = $_POST['newupass'];
	
	
	// update the nessecary fields in the database table according to the GET values
	mysql_query("Update adminacc set username='$nu' where username='$ou'");
	mysql_query("Update adminacc set pass='$np' where pass='$op'");
	
}	

header('location:index.php'); // go back to the homepage
			
?>