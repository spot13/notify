<?php		
session_start();
if(!isset($_SESSION['user']))
	header('location:login.php');
	
	
require_once("../inc_notify/config.php"); // includes the configuration file

// edit the current css styles with the new given values from the edit form		
if(isset($_POST['editentry']))
{

	$name = $_POST['cssname'];
	$files = $_POST['cssfiles'];
	$std = $_POST['cssstdate'];
	$stt = $_POST['csssttime'];
	$fnd = $_POST['cssfndate'];
	$fnt = $_POST['cssfntime'];
	$ac = $_POST['cssactive'];
	$ide = $_POST['editid'];
	$uptime = $_POST['cssuptime'];
	
	$name = mysql_real_escape_string($name);
	$files = mysql_real_escape_string($files);
	$std = mysql_real_escape_string($std);
	$stt = mysql_real_escape_string($stt);
	$fnd = mysql_real_escape_string($fnd);
	$fnt = mysql_real_escape_string($fnt);
	$uptime = mysql_real_escape_string($uptime);
	
	
	mysql_query("Update cssfiles set name='$name', css_files='$files', start_date='$std', start_time='$stt', finish_date='$fnd', finish_time='$fnt', up_time='$uptime' where id='$ide'");
	
}	

header('location:index.php');
			
?>