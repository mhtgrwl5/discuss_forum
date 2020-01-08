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
                 <table width="80%">
                   <tr>
                     <td colspan="2" align="center"><h3>SignUp</h3></td>
                   </tr>
                   <tr>
                       <td>First Name</td>
                       <td><input type="text" id="txtFname" name="txtFname" /></td>
                   </tr>
                   <tr>
                       <td>Last Name</td>
                       <td><input type="text" id="txtLname" name="txtLname" /></td>
                   </tr>
                    <tr>
                       <td>Email</td>
                       <td><input type="text" id="txtEmail" name="txtEmail" /></td>
                   </tr>
                   <tr>
                       <td>Contact</td>
                       <td><input type="text" id="txtContact" name="txtContact"  class="numeric"/></td>
                   </tr>
                   <tr>
                       <td>Gender</td>
                       <td><select id="drpgen" name="drpgen">
                            <option selected="selected" value="MALE">MALE</option>
                             <option  value="FEMALE">FEMALE</option>
                           </select></td>
                   </tr>
                   <tr>
                      <td>Password</td>
                      <td><input type="password" id="txtpsw" name="txtpsw" /></td>
                   </tr>
                   <tr>
                      <td>RE-Password</td>
                      <td><input type="password" id="txtRepsw" name="txtRepsw" /></td>
                   </tr>
                   <tr>
                      <td>Branch</td>
                      <td><select id="branch" name="branch">
                      <option selected="selected" >---select---</option>
                      <option value="cse">cse</option>
                      <option value="mech">mech</option>
                      <option value="civil">civil</option>
                      <option value="etnt">Et & t </option>
                      </select></td>
                   </tr>
                   
                   <tr>
                      <td>Image</td>
                      <td><input type="file" id="image" name="image" /></td>
                   </tr>
                   <tr>
                     <td align="center" colspan="2"><input type="submit" value="SAVE" /></td>
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
	