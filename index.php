<?php
  
   include_once("header.php");
if(isset($_SESSION['sessioncheck']))
{
    if($_SESSION['sessioncheck']==session_id())
   {
	  header('Location:user/index.php') ;
   }
}
 
    $connobj=new DB_Class('discussion','root','');
   
    //print_r($rs);
  
?>
<style>
 .col{ color:#903;}
 .del{ cursor:pointer;}
</style>

<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
                
            </div> <!-- end of content left -->
             <?php include('rightsidebar.php') ?>
	    </div> <!-- end of content -->
</div> <!-- end of content container -->
