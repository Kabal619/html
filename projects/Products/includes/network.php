<?php

	$network = mysql_connect("localhost", "roots", "link12");

	
	if (!$network)
		die('Could not connect to db' . mysql_error());
		
?>