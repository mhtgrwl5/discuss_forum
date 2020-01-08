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
<script>
$(document).ready(function(){
	
	$('.del').click(function(){
		
		var id=$(this).attr('id');
		$.post('delete.php',{sno:id},function(data){
			
			if(data==1)
			{
				window.location="mngtopic.php";
			}
			
		})
		
	})//click
	
	////////topic delete
	
	$('.topicdel').click(function(){
		
	  var id=$(this).attr('id');
		$.post('deltopic.php',{sno:id},function(data){
			
			if(data==1)
			{
				window.location="mngtopic.php";
			}
			
		}) 	
	})
	
	
	
})
</script>
<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">
		
          <?php foreach($rs as $val){ ?>		
                
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                    <div class="post_title">
                    	Discussion Topic</div>
                    <div class="post_info">
                     <table>
                        <tr>
                          <td><img src="../userimage/<?php echo $val['image'];?>" height="50px" width="50px" /></td>
                           <td>Posted By <span class="col"><?php echo $val['fname']." ".$val['lname'] ?> </span>Posted On <span class="col"><?php echo $val['posteddate']?></span></td>
                        </tr>
                     </table>
        
                    </div>
                    <div class="post_body">
                        <p>
                          <h3><?php   echo $val['topic']?> <img src="images/del.png" class="topicdel" id="<?php echo $val['sno']?>"></h3>
                        </p>
                  </div>
                  
                     <div class="post_comment">
                      <?php $cmnt=$connobj->fetch("select * from cmnt where topicno='".$val['sno']."'"); ?>
                     <div id="stsrtline"><span class="col"><?php echo count($cmnt)?> Comments</span></div>
                        <div>
                          <?php foreach($cmnt as $cmntrow){
							  $userdetail=$connobj->fetch("select * from user_tbl where  sno='".$cmntrow['cmntby']."'");
						  ?>
                            <div class="cmntrow">
                              <table>
                                <tr>
                                   <td><img src="../userimage/<?php echo $userdetail[0]['image']?>" height="40px" width="40px" /></td>
                                   <td><?php echo $userdetail[0]['fname']." ".$userdetail[0]['lname'] ?></td>
                                   <td>
                                         <img src="images/del.png" id="<?php echo $cmntrow['sno']?>" class="del"/>
                                    </td>
                                </tr>
                             </table> 
                            <br />
							<?php echo $cmntrow['cmnttext']?></div>
                          <?php }?>
                        </div>
                     </div>
                </div>
                </div> <!-- End of a post-->
            <?php }?>    
                
            </div> <!-- end of content left -->
             <?php include('rightsidebar.php') ?>
	    </div> <!-- end of content -->
</div> <!-- end of content container -->
<?php
  include('footer.php');
?>