<?php 
session_start();
if(!isset($_SESSION['curuser']))
	header('location:login.php');
	
require_once("../inc_notify/config.php"); // includes the configuration file
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Admin Panel</title>

<!--<link href="css/style.css" rel="stylesheet" type="text/css" />-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>



<body>



   <div id="container" class="round10">

      <div id="header" class="round5">

	  
	  
           <div class="left">
		   
		   <h1 style="margin-bottom:20px; color:white;"> Live Notifier V1.0</h1>
		   
		       <?php
	
		$todays_date = date("Y-m-d");
		$current_time = date("H:i:s");
	
    	echo '<h1 style="margin-bottom:5px;"> Current Server Date: ' . $todays_date . '</h1>';
		echo '<h1> Current Server Time: ' . $current_time . '</h1>';
    
	?>
		   
		   
		   
		   </div>

           <div class="right" id="adminBtns" align="right">



               <div class="right" align="center">

                   <a href="logoff.php"><img src="images/logout.png" alt="Logout" /></a>

                   <a href="logoff.php">Logout</a>

               </div>

           </div>

          

            <div class="clear"></div>

            <div class="right" id="loginDetails">User Logged In: <?php echo $_SESSION['curuser']; ?></div>

            <div class="clear"></div>

      </div>

      <div class="clear">&nbsp;</div>



      <div id="sidebar" align="center" class="left round5">

         

         <a class="navhead" href="#"> Navigation </a>



         <ul class="navlinks">
			
			<li><a href="index.php">Current Notifications</a></li>
         	<li><a href="index.php?add=true">Add a Notification</a></li>
         	<li><a href="index.php?changelog=true">Change Login Details</a></li>
         	
         </ul>



        



      </div>

       

      <div id="content" class="left round10">

         

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
				
				 
				 	echo ' <h1> Add new Notification</h1>';
				
			echo '<div class="box box-info"> You will find the Current server date and time at the top of the page! </div>';
				
				
				// this is the adding new css form
				echo '<form class="largeform" action="addcss.php" method="post" onSubmit="">';
				
					echo '<br />';
				
					echo '<p> <label> Name </label> <br /> <input type="text" class="input round5" name="cssname"/> <br /> </p>';
					echo '<p> <label> Notification Content </label> <br /> <textarea class="input round5 width400" type="text" name="cssfiles" cols="50" rows="10" ></textarea> <br /> </p>';
					echo '<p> <label> Display Duration: in seconds (or enter 0 for permenant display duration) </label> <br /> <input class="input round5" type="text" name="cssuptime"/> <br /> </p>';
					echo '<p> <label> Repeat Everyday (Excludes start/finish dates) </label> <br/>   <input class="input round5" id="chk" style="margin-left:-80px;" type="checkbox"  onchange="dis();"  name="cssevery" value="everyday " /> <br /> </p>';
					echo '<p> <label> Start Date: YYYY-MM-DD  example: 2012-07-22</label> <br /> <input id="std" class="input round5" type="text" name="cssstdate"/> <br /> </p>';
					echo '<p> <label> Start Time: HH:MM:SS  example: 18:22:59 </label><br /> <input  type="text" class="input round5" name="csssttime"/> <br /> </p>';
					echo '<p> <label> Finish Date: YYYY-MM-DD  example: 2012-07-22</label><br /> <input id="fnd" class="input round5" type="text" name="cssfndate"/> <br /> </p>';
					echo '<p> <label> Finish Time: HH:MM:SS  example: 18:22:59 </label> <br /><input class="input round5"  type="text" name="cssfntime"/> <br /> </p>';
					echo '<input type="hidden" name="addentry" value="true">';
					echo '<br />';
					echo ' <input type="submit" class="btn" name="addsubmit" id="subm" value="Save"/>';
				
				echo '<br />';
				
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
					echo '<p> <label> Notification Content </label><br /> <textarea class="input round5 width400" type="text" name="cssfiles" cols="50" rows="10">'. $res['css_files'] . '</textarea> <br /> </p>';
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
			
			echo ' <h1> Current Notifications</h1>';
			
echo ' <table class="tbl" >';
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
                	echo '<th id="empty">  </th>';
                   
                    echo '<th> Name </th>';
echo '<th> Start Date (YYYY-MM-DD) </th>';
echo '<th> Start Time (HH:MM::SS) </th>';
echo '<th> Finish Date (YYYY-MM-DD)</th>';
echo '<th> Finish Time (HH:MM::SS)</th>';
echo '<th> Display Duration (Seconds)</th>';
                    echo '<th> Edit </th>';
                    echo '<th> Delete </th>';
                echo '</tr>';
			
			// query to get the contents of the css files from the database table
			$query = mysql_query("SELECT * from cssfiles");
			
			while($res = mysql_fetch_array($query))
			{
			echo '<tr>';
			
				echo '<td>';
					echo '<img src="images/Comment.png"/>';
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
					echo '<a href="index.php?edit=' . $tx . '"> <img src="images/Pencil.png"/> </a>';
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
			



         <br /><br />

         





      </div>

      <div class="clear">&nbsp;</div>

      

      <div id="footer" align="right" class="round5">

      </div>



   </div>





<script type="text/javascript">



(function($){

   // code for sidebar menu animation starts

      

      var animateSidebarMenu = true; // whether or not sidebar menu animation should be there



      // DO NOT EDIT BELOW THIS LINE



      if (animateSidebarMenu){

         // initially hide all sidebar items except for first one

         $('#sidebar ul.navlinks:not(:first)').hide();



         $('.navhead').click(function(){

            if (! $(this).next('ul.navlinks').is(':visible')){

               // hide all opended ones

               $(this).siblings('ul.navlinks').slideUp('fast');

               // now show the clicked one

               $(this).next('ul.navlinks').slideDown('fast');

            }



            return false;

         });



      }



   // code for sidebar menu animation ends

})(jQuery);



</script>



</body>

</html>

