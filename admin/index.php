<?php
   session_start();
    if($_SESSION['sessioncheck']!=session_id())
   {
	  header('Location:login/index.php') ;
   }

  include('header.php');
  
    $connobj=new DB_Class('discussion','root','');
   
    $rs=$connobj->fetch(" SELECT topic . * , user_tbl.fname, user_tbl.lname, user_tbl.email, user_tbl.contact, user_tbl.gender, user_tbl.image FROM topic
JOIN user_tbl ON topic.postedby = user_tbl.sno");
    //print_r($rs);
  
?>
<style>
 .col{ color:#903;}
 .del{ cursor:pointer;}
</style>

<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">	
                
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                    <h4>welcome as Admin you can manage web site</h4>
                     </div>
                </div>
                </div> <!-- End of a post-->  
                
            </div> <!-- end of content left -->
             <?php include('rightsidebar.php') ?>
	    </div> <!-- end of content -->
</div> <!-- end of content container -->
<?php
  include('footer.php');
?>