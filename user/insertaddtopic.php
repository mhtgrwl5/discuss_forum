<form action="addtopic.php" method="get">
<?php
 $title=$_REQUEST['txtname']."<br>";
 
  $connobj= mysql_connect('localhost','root','');
  mysql_selectdb('discussion',$connobj);
  
  $sql="INSERT INTO `discussion`.`new_topic`(`title`)value('$title')";
   mysql_query($sql);
  $sql="select * from new_topic";
  $RS= mysql_query($sql);
  while ( $row= mysql_fetch_row($RS))
  {
	  print_r($row);
	  }
?>
<a href="addtopic.php">addtopic</a>