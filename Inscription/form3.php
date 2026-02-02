<?php
require 'C:\wamp64\www\auth_system\auth_system\config\databases.php';
session_start();
if (isset($_POST['email'])) {
    $_SESSION['email']=htmlspecialchars($_POST['email']);
        header ('location:password.php');exit;
   }
else{
        echo"renseigner vos donnée.";
   }

?>