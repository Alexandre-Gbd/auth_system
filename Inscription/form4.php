<?php
require 'C:\wamp64\www\auth_system\auth_system\config\databases.php';
session_start();
if (isset($_POST['password'])){
   if (empty($_POST['password'])||
      empty($_POST['password_conf'])
    ){
        echo"mots de passe obligatoire";
   }
   if($_POST['password']!= $_POST['password_conf']
    ){
        echo"confirmer le mots de passe créer";
   }else{
    $_SESSION['password']=htmlspecialchars($_POST['password']);
    header ('location:form5.php');exit;

   }
}else{
        echo"renseigner vos donnée.";
   }

?>