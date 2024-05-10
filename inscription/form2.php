<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form2.css">
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
                <a href=""><i class="fas fa-user"></i></a>
                <a href=""><i class="fas fa-landmark"></i></a>
                <a href=""><i class="fas fa-scroll"></i></a>
                <a href=""><i class="fas fa-volleyball"></i></a>
            </div>
        </div> 
        <br>
        <div class="corps">
            <form action="./form2_2.php" method="post" onload="select()">
                <label for="" id="L1">Lieu de paiment<span>*</span> : </label>
                <p>
                    <select name="lieu_paye" id="" required>
                        <option value="eu">Epress union</option>
                        <option value="sgc">SGC</option>
                        <option value="yup">YUP</option>
                    </select>
                </p>
                <label for="">Numéro de transaction<span>*</span> :</label>
                <br>
                <input type="number" name="num_trans" id="num" required>
                <br>
                <small id="e1">Le numéro de transaction est requis</small>
                <br>
                <label for="" id="L2">Facture<span>*</span> : </label>
                <br>
                <input type="file" name="" id="fil" accept="image/jpg, image/png, .pdf " required>
                <br>
                <small id="e2">Une copie de la facture est requise</small>
                <br>
                <label for="">Nationalité<span>*</span></label>
                <p>
                    <select name="pays" id="pays">
                        <div>
                            <option value="Cameroun">Cameroun</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Guinee Equatorial">Guinee Equatorial</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Tchad">Tchad</option>
                            <option value="RCA">RCA</option>
                        </div>
                        <div><option value="Autre">Autre</option></div>
                    </select>
                </p>
                <label for="">Region d'origine<span>*</span></label>
                <p>
                    <select name="region" id="region">
                        <div id="camer">
                            <option value="Adamaoua">Adamaoua</option>
                            <option value="Centre">Centre</option>
                            <option value="Est">Est</option>
                            <option value="Extrême-Nord">Extrême-Nord</option>
                            <option value="Littoral">Littoral</option>
                            <option value="Nord">Nord</option>
                            <option value="Nord-Ouest">Nord-Ouest</option>
                            <option value="Ouest">Ouest</option>
                            <option value="Sud">Sud</option>
                            <option value="Sud-Ouest">Sud-Ouest</option>
                        </div>
                        <div><option value="Autre">Autre</option></div>
                    </select>
                </p>
                <label for="">Département d'origine<span>*</span></label>
                <p>
                    <select name="departement" id="">
                        <div class="Adamaoua">
                            <option value="Djérem">Djérem</option>
                            <option value="Faro-et-Déo">Faro-et-Déo</option>
                            <option value="Mayo-Banyo">Mayo-Banyo</option>
                            <option value="Mbéré">Mbéré</option>
                            <option value="Vina">Vina</option>
                        </div>
                        <div class="Centre">
                            <option value="Haute-Sanaga">Haute-Sanaga</option>
                            <option value="Lekié">Lekié</option>
                            <option value="Mbam-et-Kim">Mbam-et-Kim</option>
                            <option value="Méfou-et-Afamba">Méfou-et-Afamba</option>
                            <option value="Méfou-et-Akono">Méfou-et-Akono</option>
                            <option value="Mfoundi">Mfoundi</option>
                            <option value="Nyong-et-Kelé">Nyong-et-Kelé</option>
                            <option value="Nyong-et-Mfoumou">Nyong-et-Mfoumou</option>
                            <option value="Nyong-et-So'o">Nyong-et-So'o</option>
                        </div>
                        <div class="Est">
                            <option value="Boumba-et-Ngoko">Boumba-et-Ngoko</option>
                            <option value="Haut-Nyong">Haut-Nyong</option>
                            <option value="Kadey">Kadey</option>
                            <option value="Lom-et-Djérem">Lom-et-Djérem</option>
                        </div>
                        <div class="Extreme">
                            <option value="Diamaré">Diamaré</option>
                            <option value="Logone-et-chari">Logone-et-chari</option>
                            <option value="Mayo-Danay">Mayo-Danay</option>
                            <option value="Mayo-Kan">Mayo-Kani</option>
                            <option value="Mayo-Sava">Mayo-Sava</option>
                            <option value="Mayo-Tsanaga">Mayo-Tsanaga</option>
                        </div>
                        <div class="Littoral">
                            <option value="Moungo">Moungo</option>
                            <option value="Nkam">Nkam</option>
                            <option value="Sanaga-Maritime">Sanaga-Maritime</option>
                            <option value="Wouri">Wouri</option>
                        </div>
                        <div class="Nord">
                            <option value="Bénoué">Bénoué</option>
                            <option value="Faro">Faro</option>
                            <option value="Mayo-Louti">Mayo-Louti</option>
                            <option value="Mayo-Rey">Mayo-Rey</option>
                        </div>
                        <div class="Nord_ouest">
                            <option value="Boyo">Boyo</option>
                            <option value="Bui">Bui</option>
                            <option value="Donga-Mantung">Donga-Mantung</option>
                            <option value="Menchum">Menchum</option>
                            <option value="Mezam">Mezam</option>
                            <option value="Momo">Momo</option>
                            <option value="Ngo-Ketunjia">Ngo-Ketunjia</option>
                        </div>
                        <div class="Ouest">
                            <option value="Bamboutos">Bamboutos</option>
                            <option value="Haut-Nkam">Haut-Nkam</option>
                            <option value="Hauts-Plateaux">Hauts-Plateaux</option>
                            <option value="Koung-Khi">Koung-Khi</option>
                            <option value="Menoua">Menoua</option>
                            <option value="Mifi">Mifi</option>
                            <option value="Ndé">Ndé</option>
                            <option value="Noun">Noun</option>
                        </div>
                        <div class="Sud">
                            <option value="Dja-et-Lobo">Dja-et-Lobo</option>
                            <option value="Mvila">Mvila</option>
                            <option value="Océan">Océan</option>
                            <option value="Vallée-du-Ntem">Vallée-du-Ntem</option>
                        </div>
                        <div class="Sud_ouest">
                            <option value="Fako">Fako</option>
                            <option value="Koupé-Manengouba">Koupé-Manengouba</option>
                            <option value="Lebialem">Lebialem</option>
                            <option value="Manyu">Manyu</option>
                            <option value="Meme">Meme</option>
                            <option value="Ndian">Ndian</option>
                        </div>
                        <div>
                            <option value="Autre">Autre</option>
                        </div>
                    </select>
                </p>
                <label for="">Nom du père</label><br>
                <input type="text" name="pere" id=""><br>
                <label for="">Profession du père</label><br>
                <input type="text" name="profp" id=""><br>
                <label for="">Nom de la mère<span>*</span></label><br>
                <input type="text" name="mere" id="" required><br>
                <label for="">Profession du mère<span>*</span></label><br>
                <input type="text" name="profm" id="" required><br>
                <label for="">Nom du contact pour urgence<span>*</span></label><br>
                <input type="text" name="urgence" id="" required><br>
                <label for="">Téléphone du contact pour urgence<span>*</span></label><br>
                <input type="number" name="tel_u" id="" required><br>
                <label for="">Ville de résidence du contact pour urgence<span>*</span></label><br>
                <input type="text" name="add_u" id="" required><br><br>
                <button type="submit">Suivant</button>
                <a href="../inscription.php">Precedent</a>
            </form>
        </div>
        <footer>Copyright © 2022 ICT4D L1. All rights reserved. <br>Université de Yaoundé I</footer>
    </div>
    <?php
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['dat'];
        $lieu = $_POST['naissance'];
        $cni = $_POST['cni'];
        $sex = $_POST['sel'];
        $adresse = $_POST['add'];
        $tel = $_post['tel'];
        $mail = $_POST['mail'];
        $statut = $_POST['sel2'];
        $langue = $_POST['sel3'];
        $profession = $_POST['sel4'];         
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
            $requete = $conexion->prepare('
                INSERT INTO UTILISATEUR(numero_dossier,nom,prenom,date_naissance,lieu_naissance,numero_cni,sexe,adresse,telephone,mail,lieu_payement,numero_transaction,nationalite,region,departement,nom_pere,profession_pere,nom_mere,proffesion_mere,nom_urgence,contact_urgence,adresse_urgence)
                    VALUES (NULL,:nom,:prenom,:date,:lieu,:cni,:sex,:adresse,:tel,:mail,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
            ');
            $requete->bindParam(':nom',$nom);
            $requete->bindParam(':prenom',$prenom);
            $requete->bindParam(':mail',$mail);
            $requete->bindParam(':date',$date);
            $requete->bindParam(':adresse',$adresse);
            $requete->bindParam(':lieu',$lieu);
            $requete->bindParam(':cni',$cni);
            $requete->bindParam(':sex',$sex);
            $requete->bindParam(':tel',$tel);

            $requete->execute();
        }
        catch(PDOException $e){
            echo 'erreur de connexion'.$e->getMessage();
        }
    ?>
    <script src="../js/form2.js"></script>           
</body>
</html>