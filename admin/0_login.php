<?php 
session_start();
require_once("../inc_notify/config.php"); // includes the configuration file
	
	

	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Admin Panel</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--[if lte IE 6]>

   <script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>

<![endif]-->



<style type="text/css">

#content {width:938px;}

#login {width:300px;margin:0 auto;padding:20px;background:#f6f6f6;border:1px solid #ccc; -webkit-box-shadow: #fff 0px 4px 15px;

	        -moz-box-shadow: #fff 0px 4px 15px; box-shadow: #fff 0px 4px 15px; behavior: url(css/PIE.htc);}

.btn,.input {margin:8px;}

</style>

</head>



<body>



   <div id="container" class="round10">



      <div id="header" class="round5">

           <div class="left"> Live Notifier with Scheduler V1.0 </div>

            <div class="clear"></div>

      </div>

      <div class="clear">&nbsp;</div>



      <div id="content" class="left round10">

         <h1>Administrator Login</h1>

         <p>

            Please use the below form to login to administrator panel.

         </p>



         <br /><br />

         <div class="round10" id="login">

            <form method="post" action="checklogin.php">

            <table width="400" align="center" cellpadding="5" cellspacing="0">
               <tr>
                  <td align="left">Username:</td>
                  <td align="left"><input type="text" name="uname" class="input round5" /></td>
               </tr>
               <tr>
                  <td align="left">Password:</td>
                  <td align="left"><input type="text" name="upass" class="input round5" /></td>
               </tr>
               <tr>
                  <td align="left">&nbsp;</td>
                  <td align="left"><input type="submit" name="submit" class="btn" value="Submit" /></td>
               </tr>
			<?php
		
			if(isset($_SESSION['incorrect']))
			{
				// show the Incorrect login message when the account is not found in the database
				echo '<p style="color:red"> Incorrect login </p>';
			}
		
		?>
		
            </table>

            </form>

         </div>

      </div>

      <div class="clear">&nbsp;</div>

      

   </div>



</body>

</html>


						<form method="POST" action="checklogin.php">
							<p>
								<label for="username">Username:</label>
								<input type="text" name="uname" id="username" value="" size="40" class="text" />
								<br />
							</p>
							<p>
								<label for="password">Password:</label>
								<input type="password" name="upass" id="password" value="" size="40" class="text" />
								<br />
							</p>
							<p class="last">
								<input type="submit" value="Login" class="button"/>
								
								<?php
		
			if(isset($_SESSION['incorrect']))
			{
				// show the Incorrect login message when the account is not found in the database
				echo '<p> Incorrect login </p>';
			}
		
		?>
								<br />
							</p>
							<div class="clear"></div>
						</form>
				
