<?php

  session_start();
   include('class/dbconn.php');
   include('class/phpfunctions.php');
  
  $id=$_REQUEST['txtid'];
  $pass=$_REQUEST['txtpsw'];
  

  $connobj=new DB_Class('discussion','root','');
  
$sql="select * from user_tbl where email='$id' and pass='$pass'";

$Resultset=$connobj->fetch($sql);

  
  if(empty($Resultset))
  {
	  //invalid user
	  set_msg('Invalid Email Id or password','err');
	  header('Location:index.php');
  }
  else
  {
	  //valid user
	  $_SESSION['sessioncheck']=session_id();
	  $_SESSION['userid']=$Resultset[0]['sno'];
	  $_SESSION['username']=$Resultset[0]['fname']." ".$Resultset[0]['lname'];
	  $_SESSION['image']=$Resultset[0]['image'];
	  $_SESSION['contact']=$Resultset[0]['contact'];
	  $_SESSION['branch']=$Resultset[0]['branch'];
	  header('Location:user/index.php');
  }






?>