<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form3.css">
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
                <a href="./form3.html"><i class="fas fa-user" id="ouvert"></i></a>
                <a href="./form3_facscience.html"><i class="fas fa-landmark" id="ouvert"></i></a>
                <a href=""><i class="fas fa-scroll"></i></a>
                <a href=""><i class="fas fa-volleyball"></i></a>
            </div>
        </div> 
        <div class="corps">
            <form action="./form4.php" method="post">
                <label for="">Votre faculté<span>*</span></label><br>
                <p>
                    <select name="faculte" id="">
                        <option value="L1">FACULTE DES SCIENCES</option>
                        
                    </select>
                </p>
                <label for="">Niveau souhaité<span>*</span></label>
                <p>
                    <select name="niveau" id="">
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                        <option value="L4">M1</option>
                    </select>
                </p>
                <label for="">Premier choix de filiére<span>*</span></label>
                <p>
                    <select name="ch1" id="" required>
                    <option value=""></option>
                        <option value="INFORMATIQUE">INFORMATIQUE</option>
                        <option value="BIOCHIMIE">BIOCHIMIE</option>
                        <option value="BIOLOGIE ANIMALE">BIOLOGIE ANIMALE</option>
                        <option value="BIOLOGIE VEGETALE">BIOLOGIE VEGETALE</option>
                        <option value="CHIMIE">CHIMIE</option>
                        <option value="MATHEMATIQUES">MATHEMATIQUES</option>
                        <option value="PHYSIQUE">PHYSIQUE</option>
                        <option value="SCIENCES DE LA TERRE ET DE L'UNIVERS">SCIENCES DE LA TERRE ET DE L'UNIVERS</option>
                        <option value="MICROBIOLOGIE">MICROBIOLOGIE</option>
                        <option value="BIOSCIENCES">BIOSCIENCES</option>
                        <option value="GEOSCIENCES">GEOSCIENCES</option>
                        <option value="ICT FOR DEVELOPMENT">ICT FOR DEVELOPMENT</option>
                        <option value="CHIMIE INORGANIQUE">CHIMIE INORGANIQUE</option>
                        <option value="CHIMIE ORGANIQUE">CHIMIE ORGANIQUE</option>
                        <option value="Master Pro-Reseaux et Applications Multimédia(RAM)">Master Pro-Reseaux et Applications Multimédia(RAM)</option>
                        <option value="Master Pro-Systèmes d'information et Génie Logiciel(SIGL)">Master Pro-Systèmes d'information et Génie Logiciel(SIGL)</option>
                        <option value="Master Pro-Sécurité des Systèmes Informatiques(SSI)">Master Pro-Sécurité des Systèmes Informatiques(SSI)</option>
                        <option value="Licence Pro-Information and Communication Technology for Development(ICT4D)">Licence Pro-Information and Communication Technology for Development(ICT4D)</option>
                        <option value="Master Pro-Sciences de l'Environnement">Master Pro-Sciences de l'Environnement</option>
                        <option value="Master Pro-Sciences Forestières-Audit et Certification des Forets">Master Pro-Sciences Forestières-Audit et Certification des Forets</option>
                        <option value="Master Pro-Sciences Forestières-Aires Protégées">Master Pro-Sciences Forestières-Aires Protégées</option>
                        <option value="Master Pro-Sciences Forestières-Agroforesterie">Master Pro-Sciences Forestières-Agroforesterie</option>
                        <option value="Master Pro-Industrie des Semences">Master Pro-Industrie des Semences</option>
                        <option value="Master Pro Régional-Gestion Intégrée des Environnements Littoraux et Marins:Evaluation et Audit Environnemental">Master Pro Régional-Gestion Intégrée des Environnements Littoraux et Marins:Evaluation et Audit Environnemental</option>
                        <option value="Master Pro-Mines, Pétrole et Métallurgie">Master Pro-Mines, Pétrole et Métallurgie</option>
                        <option value="Master Pro-Ingénierie Géotechnique">Master Pro-Ingénierie Géotechnique</option>
                        <option value="Master Pro Régional-MAREMA">Master Pro Régional-MAREMA</option>
                        <option value="Master Pro-Sécurité Sanitaire des Aliments">Master Pro-Sécurité Sanitaire des Aliments</option>
                        <option value="Biotechnologie de la Santé Publique">Biotechnologie de la Santé Publique</option>
                    </select>
                </p>
                <label for="">Second choix de filiére<span>*</span></label>
                <p>
                    <select name="ch2" id="" required>
                    <option value=""></option>
                        <option value="INFORMATIQUE">INFORMATIQUE</option>
                        <option value="BIOCHIMIE">BIOCHIMIE</option>
                        <option value="BIOLOGIE ANIMALE">BIOLOGIE ANIMALE</option>
                        <option value="BIOLOGIE VEGETALE">BIOLOGIE VEGETALE</option>
                        <option value="CHIMIE">CHIMIE</option>
                        <option value="MATHEMATIQUES">MATHEMATIQUES</option>
                        <option value="PHYSIQUE">PHYSIQUE</option>
                        <option value="SCIENCES DE LA TERRE ET DE L'UNIVERS">SCIENCES DE LA TERRE ET DE L'UNIVERS</option>
                        <option value="MICROBIOLOGIE">MICROBIOLOGIE</option>
                        <option value="BIOSCIENCES">BIOSCIENCES</option>
                        <option value="GEOSCIENCES">GEOSCIENCES</option>
                        <option value="ICT FOR DEVELOPMENT">ICT FOR DEVELOPMENT</option>
                        <option value="CHIMIE INORGANIQUE">CHIMIE INORGANIQUE</option>
                        <option value="CHIMIE ORGANIQUE">CHIMIE ORGANIQUE</option>
                        <option value="Master Pro-Reseaux et Applications Multimédia(RAM)">Master Pro-Reseaux et Applications Multimédia(RAM)</option>
                        <option value="Master Pro-Systèmes d'information et Génie Logiciel(SIGL)">Master Pro-Systèmes d'information et Génie Logiciel(SIGL)</option>
                        <option value="Master Pro-Sécurité des Systèmes Informatiques(SSI)">Master Pro-Sécurité des Systèmes Informatiques(SSI)</option>
                        <option value="Licence Pro-Information and Communication Technology for Development(ICT4D)">Licence Pro-Information and Communication Technology for Development(ICT4D)</option>
                        <option value="Master Pro-Sciences de l'Environnement">Master Pro-Sciences de l'Environnement</option>
                        <option value="Master Pro-Sciences Forestières-Audit et Certification des Forets">Master Pro-Sciences Forestières-Audit et Certification des Forets</option>
                        <option value="Master Pro-Sciences Forestières-Aires Protégées">Master Pro-Sciences Forestières-Aires Protégées</option>
                        <option value="Master Pro-Sciences Forestières-Agroforesterie">Master Pro-Sciences Forestières-Agroforesterie</option>
                        <option value="Master Pro-Industrie des Semences">Master Pro-Industrie des Semences</option>
                        <option value="Master Pro Régional-Gestion Intégrée des Environnements Littoraux et Marins:Evaluation et Audit Environnemental">Master Pro Régional-Gestion Intégrée des Environnements Littoraux et Marins:Evaluation et Audit Environnemental</option>
                        <option value="Master Pro-Mines, Pétrole et Métallurgie">Master Pro-Mines, Pétrole et Métallurgie</option>
                        <option value="Master Pro-Ingénierie Géotechnique">Master Pro-Ingénierie Géotechnique</option>
                        <option value="Master Pro Régional-MAREMA">Master Pro Régional-MAREMA</option>
                        <option value="Master Pro-Sécurité Sanitaire des Aliments">Master Pro-Sécurité Sanitaire des Aliments</option>
                        <option value="Biotechnologie de la Santé Publique">Biotechnologie de la Santé Publique</option>
                    </select>
                </p>
                <label for="">Troisième choix de filiére<span>*</span></label>
                <p>
                    <select name="ch3" id="" required>
                    <option value=""></option>
                        <option value="INFORMATIQUE">INFORMATIQUE</option>
                        <option value="BIOCHIMIE">BIOCHIMIE</option>
                        <option value="BIOLOGIE ANIMALE">BIOLOGIE ANIMALE</option>
                        <option value="BIOLOGIE VEGETALE">BIOLOGIE VEGETALE</option>
                        <option value="CHIMIE">CHIMIE</option>
                        <option value="MATHEMATIQUES">MATHEMATIQUES</option>
                        <option value="PHYSIQUE">PHYSIQUE</option>
                        <option value="SCIENCES DE LA TERRE ET DE L'UNIVERS">SCIENCES DE LA TERRE ET DE L'UNIVERS</option>
                        <option value="MICROBIOLOGIE">MICROBIOLOGIE</option>
                        <option value="BIOSCIENCES">BIOSCIENCES</option>
                        <option value="GEOSCIENCES">GEOSCIENCES</option>
                        <option value="ICT FOR DEVELOPMENT">ICT FOR DEVELOPMENT</option>
                        <option value="CHIMIE INORGANIQUE">CHIMIE INORGANIQUE</option>
                        <option value="CHIMIE ORGANIQUE">CHIMIE ORGANIQUE</option>
                        <option value="Master Pro-Reseaux et Applications Multimédia(RAM)">Master Pro-Reseaux et Applications Multimédia(RAM)</option>
                        <option value="Master Pro-Systèmes d'information et Génie Logiciel(SIGL)">Master Pro-Systèmes d'information et Génie Logiciel(SIGL)</option>
                        <option value="Master Pro-Sécurité des Systèmes Informatiques(SSI)">Master Pro-Sécurité des Systèmes Informatiques(SSI)</option>
                        <option value="Licence Pro-Information and Communication Technology for Development(ICT4D)">Licence Pro-Information and Communication Technology for Development(ICT4D)</option>
                        <option value="Master Pro-Sciences de l'Environnement">Master Pro-Sciences de l'Environnement</option>
                        <option value="Master Pro-Sciences Forestières-Audit et Certification des Forets">Master Pro-Sciences Forestières-Audit et Certification des Forets</option>
                        <option value="Master Pro-Sciences Forestières-Aires Protégées">Master Pro-Sciences Forestières-Aires Protégées</option>
                        <option value="Master Pro-Sciences Forestières-Agroforesterie">Master Pro-Sciences Forestières-Agroforesterie</option>
                        <option value="Master Pro-Industrie des Semences">Master Pro-Industrie des Semences</option>
                        <option value="Master Pro Régional-Gestion Intégrée des Environnements Littoraux et Marins:Evaluation et Audit Environnemental">Master Pro Régional-Gestion Intégrée des Environnements Littoraux et Marins:Evaluation et Audit Environnemental</option>
                        <option value="Master Pro-Mines, Pétrole et Métallurgie">Master Pro-Mines, Pétrole et Métallurgie</option>
                        <option value="Master Pro-Ingénierie Géotechnique">Master Pro-Ingénierie Géotechnique</option>
                        <option value="Master Pro Régional-MAREMA">Master Pro Régional-MAREMA</option>
                        <option value="Master Pro-Sécurité Sanitaire des Aliments">Master Pro-Sécurité Sanitaire des Aliments</option>
                        <option value="Biotechnologie de la Santé Publique">Biotechnologie de la Santé Publique</option>
                    </select>
                </p>
                <label for="">Votre Statut<span>*</span></label>
                <p>
                    <select name="statut" id="">
                        <option value="">Etudiant Camerounais</option>
                        <option value="">Etudiant etrangé</option>
                    </select>
                </p>
                <br>
                <button type="submit">Suivant</button><a href="../inscription.php">Precedent</a>
            </form>
        </div>
        <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
      
    </div>
    <script src="../js/script.js"></script>           
</body>
</html>