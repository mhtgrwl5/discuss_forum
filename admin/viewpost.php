<?php
   session_start();
    if($_SESSION['sessioncheck']!=session_id())
   {
	  header('Location:login/index.php') ;
   }

    include('header.php');
  
    $connobj=new DB_Class('discussion','root','');
    $sql="select * from topic where postedby='".$_REQUEST['id']."'";
    $rs=$connobj->fetch($sql);
  
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
                   <table border="1px">
                     <tr>
                       <th>Topic</th>
                       <th>posteddate</th>
                     </tr>
                     <?php
					  if(!empty($rs)){
					  foreach($rs as $val){?>
						   <tr>
                              <td><?php echo $val['topic']." ".$val['lname']?></td>
                              <td><?php echo $val['posteddate']?></td>
                             
                           </tr>
                           
					 <?php  }
					 }else{ ?>
					<tr>
                    <td colspan="2">No Topic Posted</td>
                    </tr>
                      	 
				<?php }?>
                   </table>
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