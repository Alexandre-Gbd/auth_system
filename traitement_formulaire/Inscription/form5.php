<?php
require 'config/databases.php';
session_start();
if (empty(trim($_SESSION['tel']))&&
    empty(trim($_SESSION['email']))){
    echo"inscrivez-vous avec votre numero mobile ou votre email";
    }
   if($_SESSION['password']=!
    $_SESSION['password_conf']
    ){
        echo"confirmer le mots de passe créer";
   }elseif (isset($_SESSION['nom'],
    $_SESSION['prenom'],
    $_SESSION['date'],
    $_SESSION['sexe'],
    $_SESSION['tel'],
    $_SESSION['email'],
    $_SESSION['password'],
    $_SESSION['password_conf'])
    ){
$password=password_hash( $_SESSION['password_conf'],PASSWORD_DEFAULT);
    //requetes
$sql="INSERT iNTO user( nom,prenom,email,password,genre,tel) VALUES(?,?,?,?,?,?)";
$stmt=$pdo->prepare($sql);
$stmt->execute([
$_SESSION['nom'],
$_SESSION['prenom'],
$_SESSION['date'],
$_SESSION['sexe'],
$_SESSION['tel']??null,
$_SESSION['email']??null,
$password
]);
session_destroy();
echo"inscriptions reussi";
   }else{
    echo"Donnée manquante";
   }

?>