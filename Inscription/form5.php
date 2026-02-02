<?php
require 'C:\wamp64\www\auth_system\auth_system\config\databases.php';
session_start();
if (empty($_SESSION['tel']) && 
empty($_SESSION['email'])){
    echo"inscrivez-vous avec votre numero mobile ou votre email";
    }
   if(isset($_SESSION['nom'],
    $_SESSION['prenoms'],
    $_SESSION['date'],
    $_SESSION['sexe'],
    $_SESSION['password'],
 )){
$password=password_hash( $_SESSION['password'],PASSWORD_DEFAULT);
    //requetes
$sql="INSERT iNTO user(nom,prenom,email,telephone,date,password,genre) VALUES(?,?,?,?,?,?,?)";
$stmt=$pdo->prepare($sql);
$stmt->execute([
$_SESSION['nom'],
$_SESSION['prenoms'],
$_SESSION['email']??null,
$_SESSION['tel']??null,
$_SESSION['date'],
$password,
$_SESSION['sexe']
]);
session_destroy();
echo"inscriptions reussi";
   }else{
    echo"Donnée manquante";
   }

?>