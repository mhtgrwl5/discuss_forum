<?php
   session_start();
   include('class/dbconn.php');
   include('class/phpfunctions.php');
   
    if(is_uploaded_file($_FILES['image']['tmp_name']))
   {
	   $name=time().$_FILES['image']['name'];
	   move_uploaded_file($_FILES['image']['tmp_name'],"userimage/".$name);
	   
   }
   else
   {
	  $name='';
	}
  $fname=$_REQUEST['txtFname'];
  $lname=$_REQUEST['txtLname'];
  $email=$_REQUEST['txtEmail'];
  $contact=$_REQUEST['txtContact'];
  $gen=$_REQUEST['drpgen'];
  $branch=$_REQUEST['branch'];
  $pass=$_REQUEST['txtRepsw'];
  $fname=$_REQUEST['txtFname'];

  $connobj=new DB_Class('discussion','root','');
  
$sql="INSERT INTO `discussion`.`user_tbl`(`fname`,`lname`,`email`,`contact`,`gender`,`pass`,`image`,`branch`,`sno`)VALUES('$fname','$lname','$email','$contact','$gen','$pass','$name','$branch',NULL)";
  
  if($connobj->query($sql))
  {
	  set_msg('Data Saved!!!','suc');
	  header('Location:registration.php');
  }
  else
  {
	  set_msg('Data Not Saved!!!','err');
	  header('Location:registration.php');
  }


?>