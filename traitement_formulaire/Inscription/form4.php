<?php
require 'config/databases.php';
session_start();
if (isset($_POST['password'])){
   if (empty(trim($_POST['password']))||
    empty(trim($_POST['password_conf']))
    ) {
        echo"mots de passe obligatoire";
   }else{
    $_SESSION['password']=htmlspecialchars($_POST['password']);
    $_SESSION['password_conf']=htmlspecialchars($_POST['password']);

   }
}else{
        echo"renseigner vos donnée.";
   }

?>