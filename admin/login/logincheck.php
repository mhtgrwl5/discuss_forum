<?php
      session_start();
	  include('../../class/dbconn.php');
      include('../../class/phpfunctions.php');
	  
        $id=$_REQUEST['txtid'];
        $pass=$_REQUEST['txtpsw'];

        $connobj=new DB_Class('discussion','root','');
		$RS=$connobj->fetch("select * from adminlogin where loginid='$id' and pass='$pass'");
    
             if(empty($RS)) 
             {
				 echo "invalid user";
				 //header('Location:index.php');
            
             }
             else
             {
				  //echo "valid user";
				$_SESSION['sessioncheck']=session_id(); 
                header('location:index.php'); 
             }
?>