<?php
  include('header.php');
?>
<script src="jsfiles/jsregistration.js"></script>
<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
				
                <div class="templatemo_post_wrapper">
                <div><?php echo show_msg()?></div>
                <form id="frmreg" action="insertregistration.php" method="post" enctype="multipart/form-data">
                 <table width="80%" height="40%">
                   <tr>
<h3>
About this page</h3>
<h2></h2>
<br><br>
<td>
This page is made by Sudeepto in the year 2014 for college minor project.
This web page provide the features to discuss in any topic or other thinks also provide
to another user to comment on the posts of any other users post her/his comments or thought 
in given post .Any new users easly easly register on this page by fill the simple registration
form.so register and enjoy the page features and post and comment on any topic.<br>

....................thank you........................................... 
</td>                 
</tr>
                 </table>
                 </form>
                </div> <!-- End of a post-->
                
                
                
            </div> <!-- end of content left -->
             <?php include('rightsidebar.php') ?>
	    </div> <!-- end of content -->
</div> <!-- end of content container -->
<?php
  include('footer.php');
?>
	