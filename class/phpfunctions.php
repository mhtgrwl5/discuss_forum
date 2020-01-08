<?php
function set_msg($msg,$type)
{
	$_SESSION['type'] = $type;
	$_SESSION['msg'] = $msg;
	if($type == 'err') //for error
		$_SESSION['style'] = '#ee5b4f'; 
	elseif($type=='suc') //for success
		$_SESSION['style'] = '#B3FFB3'; 
	else                 //for information
		$_SESSION['style'] = '#FFFFC1'; 
}
function show_msg()
{
	if(isset($_SESSION['msg']))
	{
		echo '<div style=" text-align:center; margin: 0 auto; background-color:'.$_SESSION['style'].';
				color:#000000"><b>'.$_SESSION["msg"].'</b></div>';
		unset($_SESSION['type']);
		unset($_SESSION['msg']);
		unset($_SESSION['style']);
		
	}
	
}

?>