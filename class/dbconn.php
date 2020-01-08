<?php
 
class DB_Class {
 
     var $db;
     ////////////////////////////////////////////////////////
     function DB_Class($dbname, $username, $password) {
          $this->db = mysql_connect('localhost', $username, $password)
           or die ("Unable to connect to Database Server");
 
          mysql_select_db($dbname, $this->db) or die ("Could not select database");
     }
      
     function query($sql) {
          $result = mysql_query ($sql, $this->db) or die ("Invalid query: " . mysql_error());
          return $result;
     }
     ///////////////////////////
     function fetch($sql) {
          $data = array();
          $result = $this->query($sql);
          
          while($row = mysql_fetch_assoc($result)) {
               $data[] = $row;
          }
		 
              return $data;
     }
     ///////////////////////////*/
}
?>