<?php 

	require_once("includes/connection.php");
	require_once("includes/functions.php");
	
	find_selected_page();
	
    include("includes/header.php"); 
	  
	  
	  
	  
?>

        	<table id="structure">
            	<tr>
                	<td id="navigation">
                    	<?php echo navigation($sel_subject, $sel_page, $public = false); ?>
                        <br />
                        <a href="new_subject.php">+ Add a new subject</a>
                    
                    </td>
                    
                    <td id="page">
                    	<h2>Add New Page</h2>
                        <?php if (!empty($message)) {echo "<p class=\"message\">" . $message .
						"</php>";} ?>
                        <?php if (!empty($errors)) { display_errors($errors); } ?>
                        
                        <form action="new_page.php?subj=<?php echo $sel_subject['id']; ?> method="post">
                        
                        <?php $new_page = true;?>
                        <?php include "page_form.php" ?>
                        <input type="submit" name="submit" value="Create Page" />
                        </form>
                       
                        <br />
                        <a href="content.php">Cancel</a>
                    </td>
                 </tr>
           </table>

<?php require("includes/footer.php"); ?>