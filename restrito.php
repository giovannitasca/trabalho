<?php
     @session_start();
     
     if(isset($_SESSION['nomeuser'])) {
     
     
     }else{
           header("Location: frmlogin.php");
     
     }
?>

