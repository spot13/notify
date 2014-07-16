<?php 
session_start();
require_once("../inc_notify/config.php"); // includes the configuration file
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="ios/Icon.png">
    <link href="ios/Icon.png" rel="apple-touch-icon" />
<link href="ios/Icon-76.png" rel="apple-touch-icon" sizes="76x76" />
<link href="ios/Icon-120.png" rel="apple-touch-icon" sizes="120x120" />
<link href="ios/Icon-152.png" rel="apple-touch-icon" sizes="152x152" />

    <title>TRCA Service Disruption Notification System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
	<?php
		
			if(isset($_SESSION['incorrect']))
			{
				// show the Incorrect login message when the account is not found in the database
				echo '<p style="color:red"> Incorrect login </p>';
			}
		
		?>
      <form class="form-signin" role="form" method="post" action="checklogin.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" name="uname" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" name="upass" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
