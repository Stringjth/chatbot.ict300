<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form2_2.css">
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
                <a href="./form2_2.html"><i class="fas fa-user" id="ouvert"></i></a>
                <a href=""><i class="fas fa-landmark"></i></a>
                <a href=""><i class="fas fa-scroll"></i></a>
                <a href=""><i class="fas fa-volleyball"></i></a>
            </div>
        </div> 
        <br>
        <div class="corps">
            <form>
                <div class="fac">
                    <div class="science">
                        <h2>fac-science</h2>
                        <br>
                        <ul>
                            <li>
                                <i class="fas fa-user-graduate"></i>
                                <div>
                                    <h5>Filiéres</h5>
                                    informatique, math, physique, biologie, ...
                                </div>
                            </li>
                            <br><br>
                            <li>
                                <i  class="fas fa-computer" id="Gi"></i>
                                <div>
                                    <h5>Caractéristiques</h5>
                                    Plusieurs salles de cours de grande capacités et des salles annexes 
                                </div>
                            </li>
                            <br>
                            <li>
                                <i class="fas fa-user-tie"></i>
                                <div>
                                    <h5>Stage</h5>
                                    Nos étudiants pourrons bénéficient d'un stage arrivées à un certain niveau 
                                </div>
                            </li>
                            <br>
                        </ul>
                        <br>
                        <a href="./form3_facscience.php">Se préinscrire</a>
                        <br>
                    </div>
                    <div class="lettre">
                        <h2>fac-lettre</h2>
                        <br>
                        <ul>
                            <li>
                                <i class="fas fa-user-graduate"></i>
                                <div>
                                    <h5>Filiéres</h5>
                                    Langue, cinematographie, philosophie, ...
                                </div>
                            </li>
                            <br><br>
                            <li>
                                <i class="fas fa-map-location-dot" id="Gi"></i>
                                <div>
                                    <h5>Localisation</h5>
                                    Notre faculté est situé au sein de l'université et est facilement accesible
                                </div>
                            </li>
                            <br>
                            <li>
                                <i class="fas fa-landmark-dome"></i>
                                <div>
                                    <h5>Caractéristiques</h5>
                                    Nous disposons d'une bibliothéques fournie et de grande salle de cours
                                </div>
                            </li>
                            <br>
                        </ul>
                        <br>
                        <a href="./form3_faclettre.php">Se préinscrire</a>
                        <br>
                    </div>
                </div>
            </form>
        </div>
        <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
    </div>
    <?php
           $lieu_paye = $_POST['lieu_paye'];
            $numero = $_POST['num_trans'];
            $pays = $_POST['pays'];
            $region = $_POST['region'];
            $departement = $_POST['departement'];
            $pere = $_POST['pere'];
            $profp = $_POST['profp'];
            $mere = $_post['mere'];
            $profm = $_POST['profm'];
            $urgence = $_POST['urgence'];
            $tel_u = $_POST['tel_u'];
            $add_u = $_POST['add_u'];         
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
                $requete1 = $conexion->prepare('SELECT COUNT(*) FROM UTILISATEUR');
                $requete1->execute();
                $num = $requete1->fetchColumn();
                $requete = $conexion->prepare(' UPDATE UTILISATEUR SET lieu_payement=:l,numero_transaction=:num
                        ,nationalite=:n,region=:r,departement=:d
                        ,nom_pere=:p,profession_pere=:pp,nom_mere=:m,proffesion_mere=:pm,nom_urgence=:u
                        ,contact_urgence=:cu,adresse_urgence=:au WHERE UTILISATEUR.numero_dossier=:num;
                ');
                $requete->bindParam(':l',$lieu_paye);
                $requete->bindParam(':num',$numero);
                $requete->bindParam(':n',$pays);
                $requete->bindParam(':r',$region);
                $requete->bindParam(':d',$departement);
                $requete->bindParam(':p',$pere);
                $requete->bindParam(':pp',$profp);
                $requete->bindParam(':m',$smere);
                $requete->bindParam(':pm',$profm);
                $requete->bindParam(':u',$urgence);
                $requete->bindParam(':cu',$tel_u);
                $requete->bindParam(':au',$add_u);
                $requete->bindParam(':num',$num);

                $requete->execute();
            }
            catch(PDOException $e){
                echo 'erreur de connexion'.$e->getMessage();
            }
        ?>
    <script src="../js/script.js"></script>           
</body>
</html>