<?php
   session_start();
    if(isset($_SESSION['sessioncheck']))
   {
	   
	   if($_SESSION['sessioncheck']==session_id())
      {
	     header('Location:../index.php');
      }
   }
?>
<script src="../../jqlib/jquery-1.9.1.js"></script>
<script>
             $(document).ready(function(){
             $('#formlogin').submit(function(){
	   try
	  {
	     
		 $('.err').html('');
		  var id=$.trim($('#txtid').val());
	      var pass=$.trim($('#txtpsw').val());
	   if(id==''|| pass=='')
	   {
		if(id=='')
	   {
	     
	     alert('ID Required');
	     return false;
	   }
	  else if(pass=='')
	   {
		   
		   alert('Password required');
					return false;
		   
	     }
       }
	   
	   else
			{
				return true;
			}
	  }
              
                catch(err)
              {
	          console.log(err.massage);
	          return false;
			  }
			  return false;
           })//submit	
      })//ready function
</script>
<body style=" margin-bottom:0px; margin-left:0px; margin-right:0px; margin-top:0px; background-color:#FFC;">
<div style="width:100%; height:200px; background-color:#0FF; text-align:center" > <h1>ADMIN LOGIN PANEL</h1></div>
           <form action="logincheck.php" id="formlogin" method="post">
             <table align="center">
               <tr>
                 <td>Admin Id</td>
                 <td><input type="text" id="txtid" name="txtid" /></td>
              </tr>

           <tr>
             <td>Password</td>
             <td><input type="password" id="txtpsw" name="txtpsw"/></td>
           </tr>
   
        <tr>
         <td align="center" colspan="2">
         <input type="submit" value="login" id="btnlog" /> </td>
       </tr>
             </table>
</form>
</body>