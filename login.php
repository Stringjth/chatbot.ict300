<?php
session_start();

include('connexion.php');

if ( (isset($_POST["password"])) ){

    $password = stripslashes(strip_tags($_POST["password"]));

    $query=$db->prepare("SELECT * FROM utilisateur WHERE username = :username AND password= :password");
    $query->bindValue(':username', $username, PDO::PARAM_INT);
    $query->bindValue(':password', md5($password), PDO::PARAM_STR);
    $query->execute();
    $data = $query->fetch();
    $query->CloseCursor();

    if(empty($data)){
        echo "<script>alert('Utilisateur ou Mot de passe incorrect..')</script>";
        echo "<script>window.location.replace('../index.html');</script>";
    }else{

        $_SESSION['username'] = $data['username'];
        echo "<script>window.location.replace('../home.php');</script>";
    }
}else{
    echo "Veuillez passer par la <a href='../index.php'>page d'accueil</a> et remplir le formulaire de connexion..";
}
