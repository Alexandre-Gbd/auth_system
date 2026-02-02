<?php
require 'C:\wamp64\www\auth_system\auth_system\config\databases.php';
session_start();
if (isset($_POST['tel'])) {
    $_SESSION['tel']=htmlspecialchars($_POST['tel']);
        header ('location:password.php');exit;
   }
else{
        echo"renseigner vos donnée.";

   }

?>
