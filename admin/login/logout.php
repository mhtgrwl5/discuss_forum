<?php
session_start();
unset($_SESSION['sessioncheck']);
unset($_SESSION);
unset($_COOKIE);
session_destroy();
header('Location:index.php');
?>