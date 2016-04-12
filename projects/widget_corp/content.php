<?php 

	require_once("includes/connection.php");
	require_once("includes/functions.php");
	
	find_selected_page();
	
    include("includes/header.php"); 
	  
	  
	  
	  
?>

        	<table id="structure">
            	<tr>
                	<td id="navigation">
                    
                    	<?php echo navigation($sel_subject, $sel_page); ?>
                        
                        <br />
                        <a href="new_subject.php">+ Add a new subject</a>
                    </td>
                    
                    <td id="page">
                    	<h2><?php if (isset($sel_subject))
							 		echo $sel_subject['menu_name'];
                             	  else if(isset($sel_page))
								  {
                        			echo $sel_page['menu_name']; ?></h2>
								<div class="page-content">	
                                	<?php  echo $sel_page['content'];  ?>
                                	<a href="edit_page.php">Edit Page</a>
                                </div>
								 <?php } else 
								 			echo "Home";	?>	</h2>
                       		<br />
   							<br />
                    </td>
                 </tr>
           </table>

<?php require("includes/footer.php"); ?>