<?php

$matricule=$_POST["matricule"];
$num_dos=$_POST["num_dos"];
try{
    $connexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
    $requete = $connexion->prepare('
        SELECT * FROM   ETUDIANT WHERE matricule = :matricule ;
    ');
    $requete->bindParam(':matricule', $matricule);
    $requete->execute();
    $rep = $requete->fetchAll();
    $requete2 = $connexion->prepare('
        SELECT * FROM   UTILISATEUR WHERE  numero_dossier = :num_dos ;
    ');
    $requete2->bindParam(':num_dos', $num_dos);
    $requete2->execute();
    $rep2 = $requete2->fetchAll();
    if(!$rep || !$rep2){
        if(!$rep){
            echo "<script>alert(' Matricule incorrect..')</script>";
        }
        else{
            echo "<script>alert(' Numero de dossier incorect..')</script>";
        }
        
        include 'dossier.html';
    }
    else{
        $requete3 = $connexion->prepare('INSERT INTO `MAT`(`matr`, `num`) VALUES (:mat,:num)');
        $requete3->bindParam(':mat', $matricule);
        $requete3->bindParam(':num', $num_dos);
        $requete3->execute();
        include 'consulterDossier.php';
    }
}
catch(PDOException $e){
    echo'veuillez verifier vos informations'.$e->getMessage();
}

?>