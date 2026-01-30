<?php
require 'config/databases.php';
session_start();
if (isset($_POST['date'])) {
   if (empty(trim($_POST['date']))||
    empty(trim($_POST['sexe']))
    ) {
        echo"Tous les renseignements sont obligatoires";
   }else{
    $_SESSION['date']=htmlspecialchars($_POST['date']);
    $_SESSION['sexe']=htmlspecialchars($_POST['sexe']);
   }
}else{
        echo"renseigner vos donnée.";

   }

?>