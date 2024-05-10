<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bd.css">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <img src="./img/UY1.jpg" alt="logo">
        <a href="./index.html" style="margin-left:900px; font-size:20px;">Deconnexion</i></a>
        <table>
            <tr>
                <th class="th" >Matricule</th>
                <th class="th">N° Dossier</th>
                <th class="th">filière</th>
                <th class="th">faculté</th>
                <th class="th">niveau</th>
            </tr>
            <?php
                $connexion = new PDO('mysql:host=localhost;dbname=INSCRIPTION_UY1','root','');
                $requete2 = $connexion->prepare('SELECT COUNT(*) FROM ETUDIANT WHERE 1');
                $requete2->execute();
                $num = $requete2->fetchColumn();
                $requete = $connexion->prepare('SELECT * FROM   ETUDIANT WHERE 1');
                $requete->execute();
                $rep = $requete->fetchAll();
                for($i=0;$i<=$num;$i++){
                    echo"<tr>
                    <td >".$rep[$i]['matricule']."</td>
                    <td >".$rep[$i]['numero_dossier']."</td>
                    <td >".$rep[$i]['premier_choix']."</td>
                    <td >".$rep[$i]['faculte']."</td>
                    <td >".$rep[$i]['niveau']."</td>
                    </tr>";
                }
            ?>
            
        </table>
    </div>

    <p style=" text-align:center;"> As votre attention aucune <mark>informations</mark> ne doit etre divulguuer </p>
    
</body>
</html>
