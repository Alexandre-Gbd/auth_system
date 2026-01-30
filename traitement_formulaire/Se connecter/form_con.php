<?php
require 'config/databases.php';
session_start();
   if (isset($_POST['tel'])
    ){
        if (empty(trim($_POST['tel']))||
    empty(trim($_POST['password']))){
    echo"inscrivez votre numero mobile et votre mots de passe";
    }else{
    $tel=htmlspecialchars($_POST['tel']);
    $password=password_hash( $_POST['password_conf'],PASSWORD_DEFAULT);
    //requetes
$sql="SELECT FROM user( password,tel) WHERE  tel=? AND password=?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$tel,$password]);
if ($stmt->rowCount()>0) {
echo"Connexion reussie";
}else {
echo"identifiant ou mots de passe incorrect";   }
   }
   } else {
echo"créer un compte" ;
   }

?>