<?php
session_start();

require_once("../inc_notify/config.php"); // includes the configuration file

			
		  	
		  	
		  	// check if the given username and password exist in the database or not
			
			//  check if the given username and password exist in the database
			if(isset($_POST['uname']) && isset($_POST['upass']))
			{
				$un = $_POST['uname'];
				$up = $_POST['upass'];
				
				$checklog = mysql_query("select * from adminacc where username = '$un' and pass = '$up'"); // find them in the database
				
				if($res = mysql_fetch_array($checklog)) // if they exist create a session for the user
				{
					$_SESSION['user'] = $res['username'];
					$_SESSION['curuser']= $res['username'];					
					header('location:index.php');
				}
				else // if not return back to the login
				{
					$_SESSION['incorrect'] = 1;	
					header('location:login.php');
				}

			}
	
			
		
			
			
?>