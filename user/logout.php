<?php

session_start();
unset($_SESSION['sessioncheck']);
unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['image']);
unset($_SESSION['contact']);
unset($_SESSION);
unset($_COOKIE);
session_destroy();
header('Location:../index.php')

?>