<!DOCTYPE HTML>

<?php
	
	include_once ("\includes\network.php");
	
?>
<html>

	<head>
        <?php $site = "Products";?>
		<title><?php echo $site; ?></title>

	</head>

	<body>
    
    	<div id="body" style="width:1000px;margin:auto;color:white;">
        
        	<div id="header" style="background-color:#666666;width:900px;">
            	
                <h1 style="margin-bottom:0;text-align:center;"><?php echo $site; ?></h1>
                
             </div>
             
             <div id="navigation" style="background-color:#3D3D3D;width:100px;height:500px;float:left;">
             
            	<b>Navigation</b><br />
                <?php 
					
					$navigation = array("Home", "Products", "About Us", "Contact Us");
					foreach ($navigation as $nav)
						echo "<a href=\"\">$nav</a><br />";
						
				?>		
          
             
             </div>
             
             <div id="content" style="background-color:#333333;width:900px;height:500px;">
             
            	 Content will go here
             
             </div>
             
             
             
             <div id="footer" style="clear:both;background-color:#999999;text-align:center;width:900px;">
             	
                Footer Stuff
             
             </div>
            
        
        </div>
    
	</body>
    
</html>