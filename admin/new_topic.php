   <style>
    .men{color:red;}
    #text{border-color:blue;}
   </style>

<?php
 include('header.php')
?>

   <center>
    <h1>Newtopic</h1>
    <form action="insertnewtopic.php" method="get">
   <table border="1" >
  <tr>
      <td>title<span class="men">*</span></td> 
      <td><input type="text" name="txtname" ID="txtname"></td>
  </tr>

   <tr>
     
  <td align="center" colspan="2"><input type="submit" value="submit"></td>
  </tr>
 
 
   </table>
   </form>
   <?php
include('footer.php')
?>