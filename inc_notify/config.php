<?php

////////////////////////////////////////////////
// database information:

	$database = 'notifydb-v4'; // database name
	$host = '209.15.202.55';         // this is the location of the database server (usually kept unchanged)
	$db_user = 'notifydb4-admin';			 // this is the username of the database adminstrator account (which you will set through the php interface)
	$db_pass = '8s5368P2';               // this is the password of the database adminstrator account (which you will set through the php interface)

///////////////////////////////////////////////



///////////////////////////////////////////////
// Please don't play with the code in this area.


	$con = mysql_connect($host,$db_user,$db_pass);
	mysql_select_db($database,$con);

//////////////////////////////////////////////


?>