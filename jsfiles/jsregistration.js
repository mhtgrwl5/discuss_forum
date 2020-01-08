$(document).ready(function(){
	
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	$('#frmreg').submit(function(){
		
		try{
			 var fname=$.trim($('#txtFname').val());
			 var lname=$.trim($('#txtLname').val());
			 var email=$.trim($('#txtEmail').val());
			 var contact=$.trim($('#txtContact').val());
			 var gen=$.trim($('#drpgen').val());
			 var psw=$.trim($('#txtpsw').val());
			 var repsw=$.trim($('#txtRepsw').val());
			
			
			 if(fname=='' || lname=='' || email==''||contact==''||psw=='' || repsw=='' ||(!emailReg.test(email)))
			{
				if(fname==''){alert('First Name Required');return false;}
				else if(lname==''){alert('Last Name Required');return false;}
				else if(email==''){alert('Email Required');return false;}
				else if(contact==''){alert('Contact No. Required');return false;}
				else if(psw==''){alert('Password Required');return false;}
				else if(repsw==''){alert('RE-Password Required');return false;}
				else if(!emailReg.test(email)){$('#txtEmail').val('');alert('Invalid Email');return false;}
			}
			 else
			{
			
				return true;
			}
		   }catch(err)
		   {
			   console.log(err.message);
			   return false;
		   }
		    return false;
		})
///////////////////////////////////////////////////////////////////////
//email validation

    $('#txtEmail').blur(function(){
	
	  var x=$.trim($(this).val());
	  
	  if(x!='')
	  {
		  	
		  if(!emailReg.test(x))
		  {
			 alert('Invalid Email');
			 return false; 
		  }
	  }
		
	}) 
///////////////////////////////////////////////////////////////////
//contact no validation
$('.numeric').keyup(function(){
   
   var x=$.trim($(this).val());
     if(x!='')
    {
		 if(!$.isNumeric(x))
		{
		  $(this).val('');	
		  alert('Numbers only');
	      return false;
		}
    }	
	 
})	
///////////////////////////////////////////////////////////////////////
//repassword validation
$('#txtRepsw').blur(function(){
	
	 var x=$.trim($('#txtpsw').val());
	 var y=$.trim($(this).val());
	
	 if(y!='')
	{
	   if(x!=y)
	  {
		 $(this).val('');
	   	 alert('Password not matched',2);
	     return false;
	  }
   }
})//blur	
	
})