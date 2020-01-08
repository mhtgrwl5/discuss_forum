<?php
   session_start();
    if($_SESSION['sessioncheck']!=session_id())
   {
	  header('Location:login/index.php') ;
   }

  include('header.php');
  
    $connobj=new DB_Class('discussion','root','');
   
    $rs=$connobj->fetch("select * from user_tbl");
   // print_r($rs);
  
?>
<style>
 .col{ color:#903;}
 .del{ cursor:pointer;}
</style>
<script>
  $(document).ready(function(){
	  $('.deltopic').click(function(){
		var id=$(this).attr('id');  
		
		$.post('deluser.php',{id:id},function(data){
			if(data==1)
			{
				window.location="mnguser.php";
			}
			
		})
	  })
  })
</script>

<div id="templatemo_content_container">
        <div id="templatemo_content">
            <div id="templatemo_content_left">	
                
                <div class="templatemo_post_wrapper">
                <div class="templatemo_post">
                   <table border="1px">
                     <tr>
                       <th>User Name</th>
                       <th>Email</th>
                       <th>Contact</th>
                       <th>Gender</th>
                       <th>Image</th>
                       <th>View post</th>
                       <th>Branch</th>
                       <th>Action</th>
                     </tr>
                     <?php foreach($rs as $val){?>
						   <tr>
                              <td><?php echo $val['fname']." ".$val['lname']?></td>
                              <td><?php echo $val['email']?></td>
                              <td><?php echo $val['contact']?></td>
                              <td><?php echo $val['gender']?></td>
                              <td><img src="../userimage/<?php echo $val['image']?>"  height="50px" width="50px"></td>
                              <th><a href="viewpost.php?id=<?php echo $val['sno'] ?>">Posts</a></th>
                              <td><?php echo $val['branch']?></td>
                              <td><img src="images/del.png" class="deltopic" id="<?php echo $val['sno']?>"></td>
                           </tr>
                           
					 <?php  } ?>
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