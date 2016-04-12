<?php 

	require_once("includes/connection.php");
	require_once("includes/functions.php");
	
	
	$errors = array();
	$check = array('menu_name', 'position', 'visible');
	
	foreach ($check as $variable)
	{
		if (!isset($_POST[$variable]) || empty($_POST[$variable]))
		{
			$errors[] = $variable;
		}
	}
	
	$fields_with_lengths = array('menu_name' => 30);
	foreach($fields_with_lengths as $fieldname => $maxlength)
	{
		if (strlen(trim(mysql_prep($_POST[$fieldname]))) > $maxlength)
		{
			$errors[] = $fieldname;
		}
	}
	
	if(!empty($errors))
	{
		redirect_to("new_subject.php");
	}
		
	
	$menu_name = mysql_prep($_POST['menu_name']);
	$position = mysql_prep($_POST['position']);
	$visible = mysql_prep($_POST['visible']);
 
 	$query = "INSERT INTO Subjects (menu_name, position, visible) VALUES ('{$menu_name}', {$position}, {$visible})";
	
	if(mysql_query($query, $connection))
	{
		redirect_to("content.php");
	}
	else
	{
		//Display error message
		echo "<p> Subject Creation Failed.</p>";
		echo "<p>" .mysql_error() . "</p>";
	}
	
 
 
 	mysql_close($connection); ?>