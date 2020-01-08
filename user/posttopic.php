<?php
  session_start();
  
   if($_SESSION['sessioncheck']!=session_id())
  {
	  header('Location:../index.php');
  }
  include('header.php');
?>
<script>
  $(document).ready(function(){
	$('#frmtopic').submit(function(){
	
	  try{
		  
		    var x=$.trim($('#txtareatopic').val());
		    if(x=='')
		   {
			alert('Give some Topic'); 
			return false; 
		   }else
		   {
			 return true;  
		   }
		 }
		 catch(err)
		 {
			 return false;
		 }
			 return false;
		})
	  
  })
</script>
<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                <div> <?php echo show_msg() ?></div>
                    <div class="post_title">
                    	Post Your Topic
                     </div>
                     <form id="frmtopic" action="inserttopic.php" method="post">
                     <table>
                    <tr>
                      <td><textarea id="txtareatopic" name="txtareatopic" rows="5" cols="45"></textarea></td>
                    </tr>
                    <tr>
                     <td><input type="submit" value="Post Topic" id="btn"></td>
                    </tr>
                     </table>
                    </form>
                </div>
                </div> <!-- End of a post-->
                
                
            </div> <!-- end of content left -->
             <?php include('rightsidebar.php') ?>
	    </div> <!-- end of content -->
</div> <!-- end of content container -->
<?php
  include('footer.php');
?>