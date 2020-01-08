<?php
   session_start();
    include('../class/phpfunctions.php');
	include('../class/dbconn.php');
	
	$connobj=new DB_Class('discussion','root','');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>College Discussion</title>
<meta name="keywords" content="free css layout, old blog template, CSS, HTML" />
<meta name="description" content="Old Blog Template - free website template provided by TemplateMo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Designed by w w w . t e m p l a t e m o . c o m  -->
<link rel="stylesheet" type="text/css" href="tabcontent.css" />
<script type="text/javascript" src="../jqlib/jquery-1.9.1.js"></script>
<script src="../messages/messages.js"></script>
<link href="../messages/messages.css" rel="stylesheet" />
</head>
<body>

	<div id="templatemo_header_panel">
    	<div id="templatemo_title_section">
				
	    </div>
    </div> <!-- end of templatemo header panel -->
    
    <div id="templatemo_menu_panel">
    	<div id="templatemo_menu_section">
            <ul>
                <li><a href="index.php"  class="current">Admin Panel</a></li>
                <li><a href="mngtopic.php">Manage Topics</a></li>  
                <li><a href="mnguser.php">Manage User</a></li> 
                <li><a href="login/logout.php">Logout</a></li>                     
            </ul> 
		</div>
    </div> <!-- end of menu -->