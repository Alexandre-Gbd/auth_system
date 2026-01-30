<?php
require 'config/databases.php';
session_start();

   if (isset($_POST['email'])
    ){
        if (empty(trim($_POST['email']))||
    empty(trim($_POST['password']))){
    echo"inscrivez votre email et votre mots de passe";
    }else{
    $email=htmlspecialchars($_POST['email']);
    $password=password_hash( $_POST['password_conf'],PASSWORD_DEFAULT);
    //requetes
$sql="SELECT FROM user( password,email) WHERE  email=? AND password=?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$email,$password]);
if ($stmt->rowCount()>0) {
echo"Connexion reussie";
}else {
echo"identifiant ou mots de passe incorrect";   }
   }
   } else {
echo"créer un compte" ;
};

?>