<?php
require 'C:\wamp64\www\auth_system\auth_system\config\databases.php';
session_start();
if (isset($_POST['date'])) {
   if (empty($_POST['date'])||
    empty($_POST['sexe'])
    ){
        echo"Tous les renseignements sont obligatoires";
   }else{
    $_SESSION['date']=htmlspecialchars($_POST['date']);
    $_SESSION['sexe']=htmlspecialchars($_POST['sexe']);
        header ('location:numero.php');exit;

   }
}else{
        echo"renseigner vos donnée.";

   }

?>