<?php
require 'config/databases.php';
session_start();
if (isset($_POST['tel'])) {
  
    $_SESSION['tel']=htmlspecialchars($_POST['tel']);
   }
else{
        echo"renseigner vos donnée.";

   }

?>
