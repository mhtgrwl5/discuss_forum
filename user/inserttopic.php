<?php

   session_start();
   include('../class/dbconn.php');
   include('../class/phpfunctions.php');
  
   $topic=$_REQUEST['txtareatopic'];
   $postedby=$_SESSION['userid'];
   $posteddate=date('Y/m/d');
   $branch=$_SESSION['branch'];   
   
   
   
   $connobj=new DB_Class('discussion','root','');
  
$sql="INSERT INTO `discussion`.`topic` (`sno` ,`postedby` ,`posteddate` ,`topic`,`branch`)VALUES (NULL , '$postedby', '$posteddate', '$topic','$branch');";
  
  if($connobj->query($sql))
  {
	  set_msg('Data Saved!!!','suc');
	  header('Location:posttopic.php');
  }
  else
  {
	  set_msg('Data Not Saved!!!','err');
	  header('Location:posttopic.php');
  }



?>