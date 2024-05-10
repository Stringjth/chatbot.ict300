<?php
        try{
            $connexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
            $requete = $connexion->prepare('SELECT * FROM `ADMIN` WHERE 1');
            $requete->execute();
            $rep = $requete->fetch();
            if(strlen($_POST['mot']) != 10){
                echo "<script> alert ' mot de passe incorrect';</script>";
                include 'admin.html';
            }
            else{
                echo "<script> alert ' mot de passe correct';</script>";
                include 'bd.php';
            }
        }
        catch(PDOException $e){
            echo'veuillez verifier vos informations'.$e->getMessage();
        }
?>