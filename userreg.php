<style>
    .men{color:red;}
    #text{border-color:blue;}
</style>
<?php
include('header.php')
?>

   <center>
    <h1>USER_REGISTRATION<h1/>
    <form action="usercheck.php" method="POST">
   <table border="1" >
  <tr>
      <td>name<span class="men">*</span></td> 
      <td><input type="text" name="txtname" ID="txtname"></td>
  </tr>

    <tr>
       <td>email<span class="men">*</span></td> 
       <td><input type="text"  name="txtemail" ID="txtemail"></td>
    </tr>

   <tr>
       <td>password<span class="men">*</span></td> 
       <td><input type="password" name="txtpsw"  ID="txtpsw"></td>
   </tr>
 
  <tr>
     
       <td align="center" colspan="2"><input type="button" value="submit"></td>
  </tr>
   
   </table>
   </form>
<script src="src="jsfiles/jsreg.js"" ></script>   
   
    <?php
include('footer.php')
?>