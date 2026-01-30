<?php
require 'config/databases.php';
session_start();
if (isset($_POST['email'])) {
    $_SESSION['email']=htmlspecialchars($_POST['email']);
   }
else{
        echo"renseigner vos donnée.";
   }

?>