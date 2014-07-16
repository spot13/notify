<?php		
session_start();
if(!isset($_SESSION['user']))
	header('location:login.php');
	
	
require_once("../inc_notify/config.php"); // includes the configuration file

// delete the given css styles from the database
if(isset($_GET['delete']))
{
	$del = $_GET['delete'];
	mysql_query("DELETE FROM cssfiles WHERE id='$del'");
}

header('location:index.php');
			
?>