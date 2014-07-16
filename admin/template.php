<?php 
session_start();
if(!isset($_SESSION['curuser']))
	header('location:login.php');
	
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
        <link rel="shortcut icon" href="images/favicon.ico">
        <title>Dashboard Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/dashboard.css" rel="stylesheet">

        <!--Bootstrap Date Picker-->
        <link href="css/datepicker.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/docs.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script>
	$('#dp1').datepicker();
	</script>
        <script type="text/javascript" src="js/tinymce/jquery.tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea"
         });
        </script>
        </head>

        <body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
    <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <a class="navbar-brand" href="#">Service Disruption Notification System</a> </div>
    <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Dashboard</a></li>
        <li><a href="index.php?add=true">New</a></li>
        <li><a href="index.php?changelog=true">Settings</a></li>
        <li><a href="logoff.php">Logout</a></li>
      </ul>
            </div>
  </div>
        </div>
<div class="container-fluid">
          <div class="row">
    <form method="post">
              <textarea id="elm1"></textarea>
            </form>
    <div class="input-append date" id="dp1" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
              <input class="span2" size="16" type="text" value="12-02-2012">
              <span class="add-on"><i class="icon-th"></i></span> </div>
    <div class="col-sm-12 main"> </div>
    
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Edit</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Title</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="" class="input-xlarge" required="">
    <p class="help-block">Enter the heading of the notification</p>
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="textarea">Message</label>
  <div class="controls">                     
    <textarea id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Display Duration</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="" class="input-mini">
    <p class="help-block">seconds to display</p>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label" for="checkboxes">Locations</label>
  <div class="controls">
    <label class="checkbox" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="TRCA">
      TRCA
    </label>
    <label class="checkbox" for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="Albion Hills CA">
      Albion Hills CA
    </label>
    <label class="checkbox" for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="Boyd CA">
      Boyd CA
    </label>
    <label class="checkbox" for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="Glen Haffy CA">
      Glen Haffy CA
    </label>
    <label class="checkbox" for="checkboxes-4">
      <input type="checkbox" name="checkboxes" id="checkboxes-4" value="Heart Lake CA">
      Heart Lake CA
    </label>
    <label class="checkbox" for="checkboxes-5">
      <input type="checkbox" name="checkboxes" id="checkboxes-5" value="Petticoat Creek CA">
      Petticoat Creek CA
    </label>
    <label class="checkbox" for="checkboxes-6">
      <input type="checkbox" name="checkboxes" id="checkboxes-6" value="Black Creek">
      Black Creek
    </label>
    <label class="checkbox" for="checkboxes-7">
      <input type="checkbox" name="checkboxes" id="checkboxes-7" value="Kortright">
      Kortright
    </label>
    <label class="checkbox" for="checkboxes-8">
      <input type="checkbox" name="checkboxes" id="checkboxes-8" value="Glen Rouge">
      Glen Rouge
    </label>
    <label class="checkbox" for="checkboxes-9">
      <input type="checkbox" name="checkboxes" id="checkboxes-9" value="Bathurst Glen">
      Bathurst Glen
    </label>
    <label class="checkbox" for="checkboxes-10">
      <input type="checkbox" name="checkboxes" id="checkboxes-10" value="Indian Line">
      Indian Line
    </label>
    <label class="checkbox" for="checkboxes-11">
      <input type="checkbox" name="checkboxes" id="checkboxes-11" value="Tommy Thompson Park">
      Tommy Thompson Park
    </label>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Start Date</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="YYYY-MM-DD" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">Start Time</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="HH:MM:SS" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">End Date</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="YYYY-MM-DD" class="input-medium">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="textinput">End Time</label>
  <div class="controls">
    <input id="textinput" name="textinput" type="text" placeholder="HH:MM:SS" class="input-medium">
    
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="button1id">Double Button</label>
  <div class="controls">
    <button id="button1id" name="button1id" class="btn btn-success">Save and Publish</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Reset</button>
  </div>
</div>

</fieldset>
</form>

    
  			</div>
        </div>
</div>
</body>
</html>
