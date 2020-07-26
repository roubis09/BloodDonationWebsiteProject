<?php
  session_start();
  if(isset($_SESSION['email'])){
    //header("Location: address.php");
    define('SECURE_PAGE', true);
    include 'address.php';
  }
  else{
    header("Location: index.php");
  }
?>
