<div id="templatemo_content_right">
            
                <div class="templatemo_right_section">
                <div><?php echo show_msg()?></div>
                	<h2><span style="color:#0FF;">LOGIN AS</span><span style="color:#C00;"> ADMIN</span></h2>
                    
                </div>
                
                <div class="templatemo_right_section">
                    <?php $count=$connobj->fetch('select * from user_tbl')?>
                	<h3>Total Registred user <span style="color:#C00;"><?php echo count($count)?></span></h3>
					 
                </div>
                
                <div class="templatemo_right_section">
                 <?php $count=$connobj->fetch('select * from topic')?>
	              <h3>Total Topics <span style="color:#C00;"><?php echo count($count)?></span></h3>
                	
                </div>
                
                <div class="templatemo_right_section">
                	<h2>Search</h2>
					<form method="get" action="#">
                        <input class="inputfield" name="keyword" type="text" id="keyword"/>
                        <input type="submit" name="submit" class="button" value="Search" />
                    </form>
                </div>
                
            </div>