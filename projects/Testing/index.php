<!doctype html>
<html>
<?php $site="Testing Site"; ?>
<head>
<meta charset="utf-8">
<title><? echo $site; ?></title>
</head>

<body>
<center>
<div id="container" style="width:1000px">
<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;text-align:center;"><? echo $site; ?></h1></div>

<div id="menu" style="background-color:#FFD700;height:500px;width:100px;float:left;">
<b>Navigation</b><br>
Connery<br>
</div>

<div id="content" style="background-color:#EEEEEE;height:500px;width:900px;float:left;text-align:center;">


<?php 
	
	$name = "Alphonso Colmenero";
	$list = array("Computers", "Mathematics", "Education");
	
	echo "<p>Hello my name is $name and I am a starting developer learing how to use PHP and HTML together.</p>";
	
	echo "<p>These are the items that I enjoy";
	echo "<ul>";
	foreach ($list as $key)
	{
		echo "<li>$key</li>";
	}
	echo "</ul>";
	

?>
</div>
<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
Footer stuff will go here.
</div>
</div>
</center>
</body>

</html>