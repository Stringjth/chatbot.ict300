<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/fin.css">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <?php          
        $sport = $_POST['sport'];  
                            
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
            $requete1 = $conexion->prepare('SELECT COUNT(*) FROM UTILISATEUR');
            $requete1->execute();
            $num = $requete1->fetchColumn();
            $requete = $conexion->prepare('
                UPDATE `ETUDIANT` SET `sport_pratiquer`=:sport  WHERE ETUDIANT.numero_dossier=:num;
            ');
            $requete->bindParam(':sport',$sport);
            $requete->bindParam(':num',$num);
            $requete->execute();
            $requete2 = $conexion->prepare('SELECT numero_dossier FROM UTILISATEUR where numero_dossier = :num');
            $requete2->bindParam(':num',$num);
            $requete2->execute();
            $numero = $requete2->fetch();
            $requete3 = $conexion->prepare('SELECT matricule FROM ETUDIANT where numero_dossier = :num');
            $requete3->bindParam(':num',$num);
            $requete3->execute();
            $matricule = $requete3->fetch();
            
            
        }
        catch(PDOException $e){
            echo 'erreur de connexion'.$e->getMessage();
        }
    ?>
    <div class="principal">
        <div class="corps" style="margin-top: 125px;">
            <a href="./index.html" style="margin-top: 20px; font-size:20px; text-decoration:none;"><i class="fas fa-arrow-left"></i> retour page d'accueil</a>
            <div class="text">
                <h1>Confirmation d'inscription</h1>
                <p>Vous êtes maintenat un étudiant de L'université de NGOA-Ekele<br>Merci d'avoir choisi notre université<br><span>😊</span></p>
                <p> votre matricule est <?php print_r($matricule[0]);?>  et votre numero de dossier <?php print_r($numero[0]);?> <br>
                    Rendez-vous à la prochaine rentré</p>
            </div>
            <div class="link">
                <a href="./index.html">Acceuil<span></span></a>
                <a href="./dossier.html">Voir-dossier<span></span></a>
                <a href="./contact.html">Contactez-nous</a>
            </div>
        </div>
        <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
    </div>
    
</body>
</html>
