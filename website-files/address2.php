<?php
  session_start();
  if(isset($_SESSION['email'])){
    //header("Location: address.php");
    define('SECURE_PAGE', true);
    include 'addressneed.php';
  }
  else{
    header("Location: address1.php");
  }
?>
