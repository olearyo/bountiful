<?php session_start();  
 session_destroy();

 include("includes/db-config.php");

 header("Location: home.php");
?>

