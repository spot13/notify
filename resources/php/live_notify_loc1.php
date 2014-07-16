<?php
require_once("../../inc_notify/config.php"); // includes the configuration file

function getcss() {
  	
	
	
  	
	
	$todays_date = date("Y-m-d");
	$current_time = date("H:i:s");
	
	
	
	$conc = $todays_date . ' ' . $current_time;

	
	
  	// select the current Virtual CSS Files from the database
 	$res = mysql_query("SELECT * 
						from cssfiles where (
							(loc1 = '1' AND start_date = '0000-00-00' and finish_date='0000-00-00' and start_time <= '$current_time' and finish_time >= '$current_time')
							 or (loc1 = '1' AND start_date < '$todays_date' and finish_date > '$todays_date') 
							 or (loc1 = '1' AND start_date = '$todays_date' and finish_date = '$todays_date' and start_time <= '$current_time' and finish_time >= '$current_time') 
							 or (loc1 = '1' AND start_date = '$todays_date' and start_time <= '$current_time' and finish_date != '$todays_date' ) 
							 or (loc1 = '1' AND finish_date = '$todays_date' and finish_time >= '$current_time' and start_date != '$todays_date')) ");
	//$res = mysql_query("SELECT * from cssfiles where id=$id and (start_date + ' ' + start_time) <= $conc");
	
	
	$arr = '';
	
	while($row = mysql_fetch_array($res)) // gets the results from the query
	{
		
		
		$arr = $arr . '..*..' .  $row['css_files'] . '.*.' . $row['id'] . '.*.' . $row['up_time']; // choose only the css contents field
		
  	}
	
	return substr($arr,5); // return the contents
  
}

  


echo getcss(); // send the returned value back to the ajax call

?>