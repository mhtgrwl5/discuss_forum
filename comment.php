   <style>
    .men{color:red;}
    #text{border-color:blue;}
   </style>


<?php
include('header.php')
?>



   <center>
    <h1>COMMENT</h1>
    <form action="" method="POST">
   <table border="1" >
  <tr>
      <td>Newtopic_no<span class="men">*</span></td> 
      <td><input type="text" name="txtname" ID="txtname"></td>
  </tr>

    <tr>
       <td>Comment<span class="men">*</span></td> 
       <td><input type="text"  name="txtemail"ID="txtemail"></td>
    </tr>

   <tr>
       <td>Posted_date<span class="men">*</span></td> 
       <td><input type="text" name="txtpsw"  ID="txtpsw"></td>
   </tr>
 
  <tr>
       <td>Posted_by<span class="men">*</span></td> 
       <td><input type="text" name="txtpsw"  ID="txtpsw"></td>
   </tr>
 
   <tr>
     
       <td align="center" colspan="2"><input type="button" value="submit"></td>
  </tr>
 
   </table>
   </form>
   <?php
include('footer.php')
?>