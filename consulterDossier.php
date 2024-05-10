<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/consulterDossier.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-6.1.1-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <div class="sidebar">
            <div class="logo">
                <a href="info.html">
                    <img src="./img/logo.png" alt="logo">
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
                    <a href="index.html">
                        <i class="fas fa-house-user"></i>
                        <span class="link_name">Acceuil</span>
                    </a>
                </li>
                <li>
                    <a href="inscription.html">
                        <i class="fas fa-address-card"></i>
                        <span class="link_name">Inscriptions</span>
                    </a>
                </li>
                <li>
                    <a href="dossier.html">
                        <i class="fas fa-address-card"></i>
                        <span class="link_name">Mon dossier</span>
                    </a>
                </li>
            </ul>
            <br>
            <span class="as">ASSISTANCE</span>
            <ul class="nav_list">
                <li>
                    <a href="faq.html">
                        <i class="fas fa-circle-question"></i>
                        <span class="link_name">FAQ</span>
                    </a>
                </li>
                <li>
                    <a href="contact.html">
                        <i class="fas fa-envelope"></i>
                        <span class="link_name">Contactez-nous</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="D">
            <i class="fas fa-list-ul" id="btn"></i>
            <span>Bienvenue sur la plateforme d'inscription à l'Université de Yaoundé I </span>
        </div>
        <div class="grand">
            <?php
                try{
                    $connexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
                    $requete3 = $connexion->prepare('SELECT * FROM `MAT` WHERE 1');
                    $requete3->execute();
                    $mat = $requete3->fetch();
                    $matricule = $mat['matr'];
                    $num_dos = $mat['num'];
                    $requete4 = $connexion->prepare('DELETE FROM `MAT` WHERE 1');
                    $requete4->execute();
                    $requete = $connexion->prepare('SELECT * FROM   ETUDIANT WHERE matricule = :matricule ;');
                    $requete->bindParam(':matricule', $matricule);
                    $requete->execute();
                    $rep = $requete->fetch();
                    $requete2 = $connexion->prepare(' SELECT * FROM   UTILISATEUR WHERE  numero_dossier = :num_dos ;');
                    $requete2->bindParam(':num_dos', $num_dos);
                    $requete2->execute();
                    $rep2 = $requete2->fetch();
                   /* print_r('<pre>');
                    print_r($rep);
                    echo'</pre>';
                    print_r('<pre>');
                    print_r($rep2);
                    echo'</pre>';*/
                }
                catch(PDOException $e){
                    echo'veuillez verifier vos informations'.$e->getMessage();
                }
            ?>
            <form action="./fin.php" method="post" >
               <fieldset>
                   <legend>Etat civil du candidat</legend>
                   <label for="prenom">Prénom<span>*</span> : </label>
                   <input type="text" name="prenom"  value="<?php echo $rep2['prenom']; ?>" id="prenom"><br><br>
                   <label for="noms" id="nom">Nom<span>*</span> : </label>
                    <input type="text" name="nom" value="<?php echo $rep2['nom']; ?>" id="noms">
                    <br><small id="e1"></small><sml id="e7"></small><br><br>
                    <label for="Z3">date de naissance<span>*</span> : </label><br><input type="date" value="<?php echo $rep2['date_naissance']; ?>" name="dat" id="Z3">
                    <br><small id="e2"></small><br><br>
                    <label for="Z6">lieu de naissance<span>*</span> : </label><br><input type="text" value="<?php echo $rep2['lieu_naissance']; ?>"   name="nom" id="Z6">
                    <br><small id="e3"></small><br><br>
                    <label for="Z7">Numéro de CNI  : </label><br><input type="text"  value="<?php echo $rep2['numero_cni']; ?>" name="nom" id="Z7">
                    <br><small id="e4"></small><br>
                    <p> 
                        <label for="Z8">Sexe<span>*</span> :</label><br> <input type="text" value="<?php echo $rep2['sexe']; ?>" >
                    </p>
                    <label for="Z9">Adresse<span>*</span>  : </label><br>  
                    <input type="text" name="nom" value="<?php echo $rep2['adresse']; ?>" id="Z9">
                    <br><small id="e5"></small><small id="e6"></small><br>
                    <label for="Z11">Votre adresse e-mail</label><br><input type="email" value="<?php echo $rep2['mail']; ?>"  name="" id="Z11">
                    <br><small id="e7"></small><br> 
               </fieldset>
               <fieldset>
                    <legend>Choix de faculter et de filière</legend>
                    <label for="" id="L1">Lieu de paiment<span>*</span> : </label>
                    <p>
                       <input type="text" value="<?php echo $rep2['lieu_payement']; ?>" >
                    </p>
                    <label for="">Numéro de transaction<span>*</span> :</label>
                    <br>
                    <input type="text" name="" id="num" value="<?php echo $rep2['numero_payement']; ?>" required>
                    <br>
                    <label for="">Nationalité<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep2['nationalite']; ?>" required>
                    </p>
                    <label for="">Region d'origine<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep2['region']; ?>" required>
                    </p>
                    <label for="">Département d'origine<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep2['departement']; ?>" required>
                    </p>
                    <label for="">Nom du père</label><br>
                    <input type="text" name="" id="" value="<?php echo $rep2['nom_pere']; ?>"><br>
                    <label for="">Profession du père</label><br>
                    <input type="text" name="" id="" value="<?php echo $rep2['profession_pere']; ?>"><br> 
                    <label for="">Nom du contact pour urgence<span>*</span></label><br>
                    <input type="text" name="" id="" value="<?php echo $rep2['nom_urgence']; ?>"><br>
                    <label for="">Téléphone du contact pour urgence<span>*</span></label><br>
                    <input type="number" name="" id="" value="<?php echo $rep2['contact_urgence']; ?>"><br>
                    <label for="">Ville de résidence du contact pour urgence<span>*</span></label><br>
                    <input type="text" name="" id="" value="<?php echo $rep2['adresse_urgence']; ?>"><br><br>
                </fieldset>
                <fieldset>
                        <legend>Filiation </legend>
                        <label for="">Votre faculté<span>*</span></label><br>
                    <p class="F">Faculté des Sciences (FS)</p>
                    <label for="">Niveau souhaité<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep['niveau']; ?>" required>
                    </p>
                    <label for="">Premier choix de filiére<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep['premier_choix']; ?>" required>
                    </p>
                    <label for="">Second choix de filiére<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep['deuxieme_choix']; ?>" required>
                    </p>
                    <label for="">Troisième choix de filiére<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep['troisieme_choix']; ?>" required>
                    </p>
                    <br>
                </fieldset>
                <fieldset>
                    <legend>Diplômes</legend>
                    <label for="">Nom du diplome soumis<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep['diplome']; ?>" required>
                    </p>
                    <label for="">Nom de la série</label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep['serie']; ?>" required>
                    </p>
                    <label for="">Observation du jury ou mention<span>*</span></label>
                    <p>
                    <input type="text" name="" id="num" value="<?php echo $rep['mention']; ?>" required>
                    </p>
                    <label for="">Emetteur du diplome<span>*</span></label><br>
                    <input type="text" placeholder="Exple: OBC, GCE Board" value="<?php echo $rep['emetteur']; ?>"><br>
                </fieldset>
                <a href="index.html" style="background-color:rgb(62, 12, 109);color:#fff;font-size:30px;width:120px; height: 35px; text-decoration:none;">validez</a><br><br><br>
           </form>
        </div>
        <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
    </div>
    <script src="./js/script.js"></script>
    
</body>
</html>