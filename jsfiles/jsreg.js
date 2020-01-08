$(document).ready(function(){
$('#sub').click(function(){
		
		$('.err').html('');
		
		var name=$('#txtname').val()
		var email=$('#txtemail').val()
		var password=$('#txtpsw').val()
		
		
		if( name=='' || email=='' || password=='' )
		{
			if(name=='')
			{
				$('#txtname').focus();
				$('#errmsgfname').html('Please enter Requiered Field');
			}
			
			
			if(email=='')
			{
				$('#txtemail').focus();
				$('#errmsgemail').html('Please enter Requiered Field');
			}
			if(password=='')
			{
				$('#txtpsw').focus();
				$('#errmsgpwd').html('Please enter Requiered Field');
			}
			
		}
		
		})//click
	})//ready