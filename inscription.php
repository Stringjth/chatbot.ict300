<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inscrit.css">
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
                    <span class="tooltip">Acceuil</span>
                </li>
                <li>
                    <a href="inscription.php">
                        <i class="fas fa-address-card"></i>
                        <span class="link_name">Inscriptions</span>
                    </a>
                    <span class="tooltip">Inscriptions</span>
                </li>
                <li>
                    <a href="dossier.html">
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
                    <a href="faq.html">
                        <i class="fas fa-circle-question"></i>
                        <span class="link_name">FAQ</span>
                    </a>
                    <span class="tooltip">FAQ</span>
                </li>
                <li>
                    <a href="contact.html">
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
                <a href="inscription.php"><i class="fas fa-address-card" id="ouvert"></i></a>
                <a href=""><i class="fas fa-info" id="info"></i></a>
                <a href=""><i class="fas fa-user"></i></a>
                <a href=""><i class="fas fa-landmark"></i></a>
                <a href=""><i class="fas fa-scroll"></i></a>
                <a href=""><i class="fas fa-volleyball"></i></a>
            </div>
        </div>
        <br>
        <div class="form">
            <form action="./inscription/form2.php" id="F1" method="post">
            <label for="prenom">Prénom<span>*</span> : </label><label for="noms" id="nom">Nom<span>*</span> : </label><br>
                <input type="text" name="prenom" id="prenom"><input type="text" name="nom" id="noms">
                <br><small id="e1"></small><small id="e7"></small><br><br>
                <label for="Z3">date de naissance<span>*</span> : </label><br><input type="date" name="dat" id="Z3">
                <br><small id="e2"></small><br><br>
                <label for="">Est ce la date marquée sur votre acte de naissance?<span>*</span></label><br>
                    <input type="radio" name="rad" id="Z4" checked><span>oui</span><br>
                    <input type="radio" name="rad" id="Z5"><span>non</span><br><br>
                <label for="Z6">lieu de naissance<span>*</span> : </label><br><input type="text" name="nom" id="Z6">
                <br><small id="e3"></small><br><br>
                <label for="Z7">Numéro de CNI  : </label><br><input type="text" name="cni" id="Z7">
                <br><small id="e4"></small><br>
                <p> 
                    <label for="Z8">Sexe<span>*</span> :</label><br>
                    <select name="sel" id="Z8">
                        <option value="f">Feminin</option>
                        <option value="m">Masculin</option>
                    </select>
                </p>
                <label for="Z9">Adresse<span>*</span>  : </label><label for="Z10" class="tel">Telephone<span>*</span>  : </label><br>  
                <input type="text" name="add" id="Z9"><input type="number" name="tel" id="Z10" placeholder="+237 6-XX-XX-XX-XX">
                <br><small id="e5"></small><small id="e6"></small><br>
                <label for="Z11">Votre adresse e-mail</label><br><input type="email" name="mail" id="Z11">
                <br><small id="e7"></small><br> 
                <div> 
                    <label for="Z12">Statut marital<span>*</span> :</label><label for="Z13" id="L1">Première langue<span>*</span></label><label for="Z11" id="L2">Statut professionnel</label><br>
                    <select name="sel2" id="Z12">
                        <option value="celib">Celibataire</option>
                        <option value="mary">Marie(e)</option>
                        <option value="div">Divorce(e)</option>
                    </select>
                    <select name="sel3" id="Z13">
                        <option value="fr">Français</option>
                        <option value="ang">Anglais</option>
                    </select>
                    <select name="sel4" id="Z11">
                        <option value="sa">Sans emploi</option>
                        <option value="sal">Salarie(e)</option>
                        <option value="ae">En auto-emploi</option>
                    </select>
                </div>
                <br><br><button name="submit" type="submit" id="s" onclick="valider()">Suivant</button><input type="reset" value="Annuler">
                <br><small id="sub"></small><br><br>
            </form>
        </div>
        

        <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
    </div>
    <script src="./js/form1.js"></script>
    
</body>
</html>