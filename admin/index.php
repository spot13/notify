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
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Service Disruption Notification System</a>
        </div>
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
  <span class="add-on"><i class="icon-th"></i></span>
</div>        
        <div class="col-sm-12 main">
          <!--<h1 class="page-header">Dashboard</h1>-->

          
          <div class="table-responsive">
        <?php
		 
	
		 			// the following conditions change the page contents according to the passed Get values, each one shows a different form / contents.
			if(isset($_GET['changelog']))
			{
				// this is the change login information form
				echo ' <h1> Change Login Details </h1>';
				

				echo '<form method="post" action="changeinfo.php" >';
				
				
				echo '<label> Old Username </label> <br /> <input class="input round5" type="text" name="olduname"/> <br /> ';
				echo ' <label> New Username </label> <br /> <input class="input round5" type="text" name="newuname"/> <br /> ';
				echo ' <label> Old Password  </label> <br /> <input class="input round5" type="text" name="oldupass"/> <br /> ';
				echo ' <label> New Password  </label> <br /> <input class="input round5" type="text" name="newupass"/> <br /> ';
		
				
				echo '<input type="hidden" name="chng" value="true">';
				
				echo '<input id="submitb" style="margin-top:10px" class="btn" type="submit" value="Save" />';
				
				echo '</form>';
				echo '</br>';echo '</br>';echo '</br>';
	
				
			}
			else if(isset($_GET['add']))
			{
				
				 
				 	echo ' <h1>Add new Notification</h1>';
				
			echo '<div class="box box-info"> You will find the Current server date and time at the top of the page! </div>';
				
				
				// this is the adding new css form
				echo '<form class="largeform" action="addcss.php" method="post" onSubmit="">';
				
					echo '<div class="input-group input-group-lg"><br />';
				
					echo '<p> <label> Name </label> <br /> <input type="text" class="input round5" name="cssname"/> <br /> </p>';
					echo '<p> <label> Notification Content </label> <br /> <form method="post"><textarea class="input round5 width400" type="text" name="cssfiles" cols="50" rows="10" ></textarea></form> <br /> </p>';
					echo '<p> <label> Display Duration: in seconds (or enter 0 for permenant display duration) </label> <br /> <input class="input round5" type="text" name="cssuptime"/> <br /> </p>';
					echo '<p> <label> Repeat Everyday (Excludes start/finish dates) </label> <br/>   <input class="input round5" id="chk" style="margin-left:-80px;" type="checkbox"  onchange="dis();"  name="cssevery" value="everyday " /> <br /> </p>';
			
					echo '<p> <label> Start Date: YYYY-MM-DD  example: 2012-07-22</label> <br /> <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy"><input class="span2" size="16" type="text" value="12-02-2012" id="std" name="cssstdate" /><span class="add-on"><i class="icon-th"></i></span></div> <br /> </p>';

					echo '<p> <label> Start Time: HH:MM:SS  example: 18:22:59 </label><br /> <input  type="text" class="input round5" name="csssttime"/> <br /> </p>';

					echo '<p> <label> Finish Date: YYYY-MM-DD  example: 2012-07-22</label><br /> <input id="fnd" class="input round5" type="text" name="cssfndate"/> <br /> </p>';
					echo '<p> <label> Finish Time: HH:MM:SS  example: 18:22:59 </label> <br /><input class="input round5"  type="text" name="cssfntime"/> <br /> </p>';
					echo '<input type="hidden" name="addentry" value="true">';
					echo '<br />';
					echo ' <input type="submit" class="btn" name="addsubmit" id="subm" value="Save"/>';
				
				echo '<br /></div>';
				
				echo '</form>';
			
			echo '</br>';echo '</br>';echo '</br>';
			
			}
			else if(isset($_GET['edit']))
			{
				
							
								 
				echo ' <h1> Edit Notification </h1>';
				
				echo '<div class="box box-info"> You will find the Current server date and time at the top of the page! </div>';
				
				$ide = $_GET['edit'];
				
				$query = mysql_query("SELECT * from cssfiles where id=$ide");
				
				$res = mysql_fetch_array($query);
				
				
				
				
				echo '<form action="editcss.php" method="post">';
					
					echo '<br />';
					
					echo '<p> <label> Name </label><br /> <input type="text" class="input round5" name="cssname" value=' . $res['name'] . ' /> <br /> </p>';
					echo '<p> <label> Notification Content </label><br /> <form method="post"><textarea class="input round5 width400" type="text" name="cssfiles" cols="50" rows="10">'. $res['css_files'] . '</textarea></form> <br /> </p>';
					echo '<p> <label> Display Duration: in seconds </label> <br /> <input class="input round5" type="text" name="cssuptime" value=' . $res['up_time'] . ' /> <br /> </p>';
					
					if($res['start_date'] == '0000-00-00' && $res['finish_date'] == '0000-00-00' )
					echo '<p> <label> Repeat Everyday (Excludes start/finish dates) </label> <br/> <input id="chk" type="checkbox"  onchange="dis();" checked="checked" name="cssevery" value="everyday " /> <br /> </p>';
					else
					echo '<p> <label> Repeat Everyday (Excludes start/finish dates) </label> <br/><input id="chk" type="checkbox"  onchange="dis();"  name="cssevery" value="everyday " />';
					if($res['start_date'] == '0000-00-00' && $res['finish_date'] == '0000-00-00' )
					echo '<p> <label> Start Date: YYYY-MM-DD  example: 2012-07-22</label><br /> <input id="std" class="input round5" type="text" name="cssstdate"/> <br /> </p>';
					else
					echo '<p> <label> Start Date: YYYY-MM-DD  example: 2012-07-22</label> <br /> <input id="std" class="input round5" type="text" name="cssstdate" value=' . $res['start_date'] . '></input> <br /> </p>';
					echo '<p> <label> Start Time: HH:MM:SS  example: 18:22:59 </label><br /> <input  type="text" class="input round5" name="csssttime" value=' . $res['start_time'] . '></input> <br /> </p>';
					if($res['start_date'] == '0000-00-00' && $res['finish_date'] == '0000-00-00' )
					echo '<p> <label> Finish Date: YYYY-MM-DD  example: 2012-07-22</label><br /> <input id="fnd" class="input round5" type="text" name="cssfndate"/> <br /> </p>';
					else
					echo '<p> <label> Finish Date: YYYY-MM-DD  example: 2012-07-22</label><br />  <input class="input round5" id="fnd" type="text" name="cssfndate" value=' . $res['finish_date'] . '></input> <br /> </p>';
					echo '<p> <label> Finish Time: HH:MM:SS  example: 18:22:59 </label><br /> <input class="input round5"  type="text" name="cssfntime" value=' . $res['finish_time'] . '></input> <br /> </p>';
					
					echo '<input type="hidden" name="editentry" value="true">';
					echo '<br />';
					echo ' <input type="submit" class="btn" name="addsubmit" id="subm" value="Save"/>';
					
				echo '<br />';
				
				
				
				
				echo '<input type="hidden" name="editid" value="'. $ide .'" />';
				
				
				
				
				
				
				echo '</form>';
				
	echo '</br>';echo '</br>';echo '</br>';
	
			}
			else
			{
			
			echo ' <h1>Dashboard</h1>';
			
echo ' <table class="table table-striped">';
            echo ' <col width="30" />';
       
  			echo ' <col width="200" />';
 
echo ' <col width="180" />';
echo ' <col width="180" />';
echo ' <col width="180" />';
echo ' <col width="180" />';
echo ' <col width="100" />';
            echo ' <col width="100" />';
            echo ' <col width="100" />';
			
            	echo '<tr>';
                	echo '<th> Edit </th>';
                   
                    echo '<th> Title </th>';
echo '<th> Start Date (YYYY-MM-DD) </th>';
echo '<th> Start Time (HH:MM::SS) </th>';
echo '<th> Finish Date (YYYY-MM-DD)</th>';
echo '<th> Finish Time (HH:MM::SS)</th>';
echo '<th> Display Duration (Seconds)</th>';
                    
                    echo '<th> Delete </th>';
                echo '</tr>';
			
			// query to get the contents of the css files from the database table
			$query = mysql_query("SELECT * from cssfiles");
			
			while($res = mysql_fetch_array($query))
			{
			echo '<tr>';
			
			echo '<td>';
					$tx = $res['id'];
				echo '<a href="index.php?edit=' . $tx . '"> <img src="images/Pencil.png"/> </a>';
				echo '</td>';
				

				
				echo '</p> <td>';
					echo $res['name'];
				echo '</td>';

				echo '</p> <td>';
				if($res['start_date']=='0000-00-00')
				{
					echo 'Everyday';
				}
				else
				{
					echo $res['start_date'];	
				}
				echo '</td>';

				echo '</p> <td>';
					echo $res['start_time'];
				echo '</td>';


				echo '</p> <td>';
				
				if($res['finish_date']=='0000-00-00')
				{
					echo 'Everyday';
				}
				else
				{
					echo $res['finish_date'];	
				}
				echo '</td>';

				echo '</p> <td>';
					echo $res['finish_time'];
				echo '</td>';

				echo '</p> <td>';
				if($res['up_time']=='0')
				{
					echo 'Permanent';
				}
				else
				{
					echo $res['up_time'];	
				}
					
				echo '</td>';
				
	
				
				echo '<td>';
					$tx = $res['id'];
					echo '<a href="deletecss.php?delete=' . $tx . '"> <img src="images/Delete.png"/> </a>';
				echo '</td>';
				
			echo '</tr>';
			
			
			
			}
			
			
			
			}
			
			?>
            
            </table>
			
       <!--     <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>nec</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>-->
          </div>
        </div>
      </div>
    </div>

    
    
   
    
    
  </body>
</html>
