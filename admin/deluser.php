<?php

   session_start();
   include('../class/dbconn.php');
   include('../class/phpfunctions.php');
  
   $sno=$_REQUEST['id'];
   
   
   
   $connobj=new DB_Class('discussion','root','');
   
	
   $sql="DELETE FROM `user_tbl` WHERE `user_tbl`.`sno` = $sno LIMIT 1";
  
  if($connobj->query($sql))
  {
	echo "1";
  }
  else
  {
	 echo "0";
  }





?>