<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form4.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <div class="sidebar">
            <div class="logo">
                <a href="info.html">
                    <img src="../img/logo.png" alt="logo">
                </a>
                <span class="link">UY I - NGOA</span>
            </div>
            <hr>
            <div class="logo">
                <i class="fas fa-calendar-days"></i>
                <span id="date"></span>
            </div>
            <hr>
            <ul class="nav_list">
                <li>
                    <a href="../index.html">
                        <i class="fas fa-house-user"></i>
                        <span class="link_name">Acceuil</span>
                    </a>
                    <span class="tooltip">Acceuil</span>
                </li>
                <li>
                    <a href="../inscription.php">
                        <i class="fas fa-address-card"></i>
                        <span class="link_name">Inscriptions</span>
                    </a>
                    <span class="tooltip">Inscriptions</span>
                </li>
                <li>
                    <a href="../dossier.html">
                        <i class="fas fa-address-card"></i>
                        <span class="link_name">Mon dossier</span>
                    </a>
                    <span class="tooltip">Mon dossier</span>
                </li>
            </ul>
            <br>
            <span class="as">ASSISTANCE</span>
            <ul class="nav_list">
                <li>
                    <a href="../faq.html">
                        <i class="fas fa-circle-question"></i>
                        <span class="link_name">FAQ</span>
                    </a>
                    <span class="tooltip">FAQ</span>
                </li>
                <li>
                    <a href="../contact.html">
                        <i class="fas fa-envelope"></i>
                        <span class="link_name">Contactez-nous</span>
                    </a>
                    <span class="tooltip">Contactez</span>
                </li>
            </ul>
        </div>
        <div class="D">
            <i class="fas fa-list-ul" id="btn"></i>
            <i class="fas fa-arrow-left" id="btn2"></i>
            <span>Pre-inscription à NGOA-EKELE</span>
            <hr>
            <div>
                <a href="../inscription.html"><i class="fas fa-address-card" id="ouvert"></i></a>
                <a href="./form2.html"><i class="fas fa-info" id="info"></i></a>
                <a href="./form2_2.html"><i id="ouvert" class="fas fa-user"></i></a>
                <a href="./form2_2.html"><i id="ouvert" class="fas fa-landmark"></i></a>
                <a href="./form4.html"><i id="ouvert" class="fas fa-scroll"></i></a>
                <a href=""><i class="fas fa-volleyball"></i></a>
            </div>
        </div>
        <div class="corps">
            <form action="./form5.php" method="post">
                <label for="">Nom du diplome soumis<span>*</span></label>
                <p>
                    <select name="diplome" id="">
                        <option value="BACC CAMEROUNAIS">BACC CAMEROUNAIS</option>
                        <option value="BACC ETRANGER">BACC ETRANGER</option>
                        <option value="GCE A LEVEL">GCE A LEVEL</option>
                        <option value="GCE O LEVEL">GCE O LEVEL</option>
                        <option value="DEUG">DEUG</option>
                        <option value="DUT">DUT</option>
                        <option value="LICENCE">LICENCE</option>
                        <option value="LICENCE PROFESSIONNELLE">LICENCE PROFESSIONNELLE</option>
                        <option value="MASTER 1">MASTER 1</option>
                        <option value="MASTER 2">MASTER 2</option>
                        <option value="DIPES 1">DIPES 1</option>
                        <option value="CSCT">CSCT</option>
                        <option value="RELEVE DE NOTES">RELEVE DE NOTES</option>
                        <option value="DIPLOME D'ETAT D'INFIRMIER">DIPLOME D'ETAT D'INFIRMIER</option>
                        <option value="Doctorat">Doctorat</option>
                        <option value="Doctorat en medécine ou en pharmacie">Doctorat en medécine ou en pharmacie</option>
                        <option value="Probatoire">Probatoire</option>
                    </select>
                </p>
                <label for="">Nom de la série</label>
                <p>
                    <select name="serie" id="">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F1">F1</option>
                        <option value="F2">F2</option>
                        <option value="F3">F3</option>
                        <option value="F4">F4</option>
                        <option value="F5">F5</option>
                        <option value="F6">F6</option>
                        <option value="F7">F7</option>
                        <option value="F8">F8</option>
                        <option value="TI">TI</option>
                        <option value="MEB">MEB</option>
                        <option value="IB">IB</option>
                        <option value="CB">CB</option>
                        <option value="CHB">CHB</option>
                        <option value="SPB">SPB</option>
                    </select>
                </p>
                <label for="">Annéé d'obtention<span>*</span></label><br>
                <input type="number" name="annee" id="" required><br>
                <label for="">Moyenne obtenue</label><br>
                <input type="number" name="moyenne" id="" value=""><br>
                <label for="">Observation du jury ou mention<span>*</span></label>
                <p>
                    <select name="mention" id="">
                        <option value="PASSABLE">PASSABLE</option>
                        <option value="ASSEZ-BIEN">ASSEZ-BIEN</option>
                        <option value="BIEN">BIEN</option>
                        <option value="TRES BIEN">TRES BIEN</option>
                        <option value="EXCELENT">EXCELENT</option>
                    </select>
                </p>
                <label for="">Emetteur du diplome<span>*</span></label><br>
                <input type="text" name="emetteur" placeholder="Exple: OBC, GCE Board" required><br>
                <label for="">Date de délivration du diplome<span>*</span></label><br>
                <input type="date" name="date" id="" required><br><br>
                <button type="submit">Suivant</button><a href="./form2_2.php">Precedent</a><br><br>
            </form>
        </div> 
        <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
        
    </div>
    <script src="../js/script.js"></script> 
    <?php
        $faculter = $_POST['faculte'];
        $niveau = $_POST['niveau'];
        $ch1 = $_POST['ch1'];
        $ch2 = $_POST['ch2'];
        $ch3 = $_POST['ch3'];
        $statut = $_POST['statut'];
        
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
            $requete1 = $conexion->prepare('SELECT COUNT(*) FROM UTILISATEUR');
            $requete1->execute();
            $num = $requete1->fetchColumn();
            $matricule = '22A'.$num+1;
            $requete = $conexion->prepare('INSERT INTO `ETUDIANT`(`matricule`, `numero_dossier`, `numero_payement`, `faculte`, `niveau`, `premier_choix`, `deuxieme_choix`, `troisieme_choix`, `diplome`, `serie`, `mention`, `emetteur`, `statut_social`, `sport_pratiquer`)               
                        VALUES (:matricule,:num, NULL,:faculte,:niveau,:ch1, :ch2, :ch3, NULL,NULL,NULL,NULL,:statut, NULL);
            ');
            
            $requete->bindParam(':num',$num);
            $requete->bindParam(':faculte',$faculter);
            $requete->bindParam(':niveau',$niveau);
            $requete->bindParam(':ch1',$ch1);
            $requete->bindParam(':ch2',$ch2);
            $requete->bindParam(':ch3',$ch3);
            $requete->bindParam(':statut',$statut);
            $requete->bindParam(':matricule',$matricule);
            

            $requete->execute();
        }
        catch(PDOException $e){
            echo 'erreur de connexion'.$e->getMessage();
        }
    ?>          
</body>
</html>