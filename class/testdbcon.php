<?php
include('dbconn.php');

$dbconnect = new DB_Class('demo', 'root', '');
//var_dump($dbconnect);
$query = "SELECT * FROM class";
$result = $dbconnect->fetch($query);
//var_dump($result);
print_r($result);

?>