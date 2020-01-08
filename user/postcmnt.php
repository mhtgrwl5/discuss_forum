<?php

 session_start();
   include('../class/dbconn.php');
   include('../class/phpfunctions.php');
  
   $topicno=$_REQUEST['topicno'];
   $cmnttxt=$_REQUEST['cmnttext'];
   $postedby=$_SESSION['userid'];
   $posteddate=date('Y/m/d');
   
   
   
   
   $connobj=new DB_Class('discussion','root','');
  
$sql=" INSERT INTO `discussion`.`cmnt`(`sno`,`topicno`,`cmntby`,`cmnttext`,`date`)VALUES (NULL , '$topicno', '$postedby', '$cmnttxt', '$posteddate')";
  
  if($connobj->query($sql))
  {
	 header('Location:index.php');
  }
  else
  {
	 
	  header('Location:index.php');
  }





?>