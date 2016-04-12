<?php

	require("constants.php");
	
	//1. Connect to to database
	$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
	if(!$connection)
		die("Could not connect: " . mysql_error());
		
	//2. Select Database
	$db_select = mysql_select_db(DB_NAME, $connection);
	if(!$db_select)
		die("Could not select: " . mysql_error());
?>