<?php		
    
	// unset and destroys the session and send the user back to the login window
	session_start();
	session_unset();
	session_destroy();
	header('location:login.php');
	
?>