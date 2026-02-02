<?php
require 'C:\wamp64\www\auth_system\auth_system\config\databases.php';
session_start();
if (isset($_POST['nom'])) {
   if (empty($_POST['nom'])||
      empty($_POST['prenoms'])
    ) {
        echo"renseigner  votre nom et prenoms";
   }else{
    $_SESSION['nom']=htmlspecialchars($_POST['nom']);
    $_SESSION['prenoms']=htmlspecialchars($_POST['prenoms']);
    header('location:genre.php');exit;
   }
}else{
            echo"renseigner vos donnée.";
   }

?>