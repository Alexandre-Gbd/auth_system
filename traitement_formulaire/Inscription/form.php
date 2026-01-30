<?php
require 'config/databases.php';
session_start();
if (isset($_POST['nom'])) {
   if (empty(trim($_POST['nom']))||
      empty(trim($_POST['prenom']))
    ) {
        echo"renseigner  votre nom et prenom";
   }else{
    $_SESSION['nom']=htmlspecialchars($_POST['nom']);
    $_SESSION['prenom']=htmlspecialchars($_POST['prenom']);
   }
}else{
            echo"renseigner vos donnée.";

   }

?>