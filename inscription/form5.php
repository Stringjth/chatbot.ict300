<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form5.css">
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
                <a href="./form3.html"><i id="ouvert" class="fas fa-landmark"></i></a>
                <a href="./form4.html"><i id="ouvert" class="fas fa-scroll"></i></a>
                <a href="./form5.html"><i class="fas fa-volleyball" id="ouvert"></i></a>
            </div>
        </div> 
        <div class="grand">
            <form  id="ok" action="../fin.php" method="post">
                <div class="deux">     
                <div id="gauche" > 
                    <label for="" class="txt">Sport pratiqué</label>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_1" value="athlétisme" > 
                        <label class="form-check-label" for="id_sport_1">Athlétisme</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_2" value="basketball" > 
                        <label class="form-check-label" for="id_sport_2">BasketBall</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_3" value="boxe" > 
                        <label class="form-check-label" for="id_sport_3">Boxe</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_4" value="football" > 
                        <label class="form-check-label" for="id_sport_4">Football</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_5" value="gymnastique" > 
                        <label class="form-check-label" for="id_sport_5">Gymnastique</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_6" value="handball" > 
                        <label class="form-check-label" for="id_sport_6">Handball</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_7" value="judo" > 
                        <label class="form-check-label" for="id_sport_7">Judo</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_8" value="karate" > 
                        <label class="form-check-label" for="id_sport_8">Karaté</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_9" value="lutte" > 
                        <label class="form-check-label" for="id_sport_9">Lutte</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_10" value="nambudo" > 
                        <label class="form-check-label" for="id_sport_10">Nambudo</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_11" value="tennistable" > 
                        <label class="form-check-label" for="id_sport_11">Tennis de table</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="sport" id="id_sport_12" value="volleyball" > 
                        <label class="form-check-label" for="id_sport_12">Volley-ball</label>
                    </div>
                    <div id="div_id_autresport" class="form-group"> 
                        <label for="id_autresport" class="">Si autre, indiquez le sport</label><br>
                        <input type="text" name="autresport" maxlength="300" class="textinput textInput form-control" id="id_autresport">  
                    </div>
                </div>

                
                <div id="droite"> 
                    <label for="" class="txt">Art pratiqué</label> 
                    <div class="form-check" > 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_1" value="artsplastiques" > 
                        <label class="form-check-label" for="id_art_1">Arts plastiques</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_2" value="chanson" > 
                        <label class="form-check-label" for="id_art_2">Chanson</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_3" value="chorale" > 
                        <label class="form-check-label" for="id_art_3">Chorale</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_4" value="dansetrad" > 
                        <label class="form-check-label" for="id_art_4">Danse traditionnelle et moderne</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_5" value="dessinpeinture" > 
                        <label class="form-check-label" for="id_art_5">Dessin et peinture</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_6" value="litterature" > 
                        <label class="form-check-label" for="id_art_6">Littérature écrite et orale</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_7" value="majorette" > 
                        <label class="form-check-label" for="id_art_7">Majorette</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_8" value="musique" > 
                        <label class="form-check-label" for="id_art_8">Musique</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_9" value="orchestre" > 
                        <label class="form-check-label" for="id_art_9">Orchestre moderne et traditionnel</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_10" value="photographie" > 
                        <label class="form-check-label" for="id_art_10">Photographie</label> 
                    </div> 
                    <div class="form-check"> 
                        <input type="checkbox" class="form-check-input" name="art" id="id_art_11" value="theatre" > 
                        <label class="form-check-label" for="id_art_11">Théâtre</label> 
                    </div> 
                    <div id="div_id_autreart"> 
                        <label for="id_autreart" class="">Si autre, indiquez l'art</label> <br>
                        <input type="text" name="autreart" maxlength="300" class="textinput textInput form-control" id="id_autreart">
                    </div>
                </div> 
                </div> 
                <div id="div_id_handicap" > 
                    <label for="id_handicap_0" class="txt">Avez vous un handicap?<span class="asteriskField">*</span> </label> 
                <div> 
                <div class="form-check"> <input type="radio" class="form-check-input" name="handicap" id="id_handicap_1" value="Oui" > <label for="id_handicap_1" class="form-check-label">Oui</label> </div> 
                <div class="form-check"> <input type="radio" class="form-check-input" name="handicap" id="id_handicap_2" value="Non" > <label for="id_handicap_2" class="form-check-label">Non</label> </div> 
                <div class="bt1">
                <button id="bt1" type="submit">
                    envoyer
                </button>
                <button id="bt2" type">
                    precedent
                </button>
                </div>
                </div>
            </form>
        </div>
    </div>
    <br>
    <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
    <script src="../js/script.js"></script>           
    <?php
                    $diplome = $_POST['diplome'];
                    $serie = $_POST['serie'];
                    $annee = $_POST['annee'];
                    $moyenne = $_POST['moyenne'];
                    $mention = $_POST['mention'];
                    $emetteur = $_POST['emetteur'];
                    $date = $_POST['date'];
                    
                            
                    try{
                        $conexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
                        $requete1 = $conexion->prepare('SELECT COUNT(*) FROM UTILISATEUR');
                        $requete1->execute();
                        $num = $requete1->fetchColumn();
                        $requete = $conexion->prepare('
                            UPDATE `ETUDIANT` SET 
                                    `diplome`=:diplome,`serie`=:serie,`mention`=:mention,`emetteur`=:emetteur WHERE ETUDIANT.numero_dossier=:num;
                        ');
                        $requete->bindParam(':diplome',$diplome);
                        $requete->bindParam(':serie',$serie);
                        $requete->bindParam(':mention',$mention);
                        $requete->bindParam(':num',$num);
                        $requete->bindParam(':emetteur',$emetteur);
                       
            
                        $requete->execute();
                    }
                    catch(PDOException $e){
                        echo 'erreur de connexion'.$e->getMessage();
                    }
    ?>
</body>
</html>