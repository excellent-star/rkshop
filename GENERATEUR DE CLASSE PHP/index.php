<?php include 'connexion/init.php';
        include 'connexion/fonctions.php';
$tables=allTables(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>GENERATEUR DES CLASSES</title>
</head>
<body>
    <div style="text-align: center;">
    <h2>LISTE DES TABLES DE VOTRE BDD</h2>
    <ul>
        <?php foreach ($tables as $key => $value): ?>
        <li><?=$value ?></li>
        <?php endforeach ?>
    </ul>
    </div>
    <?php var_dump(getYear("15-07-1992")) ?>
    <!-- <a href="index.php">RETOUR</a> -->
    <div style="text-align: center;">
        <h2>FORMULAIRE POUR GENERER DES CLASSES EN PHP</h2>
        <hr>
        <form action="generer_classe" method="POST">
            <div>
                <!-- <input type="text" name="bdd" placeholder="Nom de la base de données" ><br><br> -->
                <select name="classe_name" style="width: 555px;">
                    <option >Nom de la table dans la bdd</option>
                  <?php foreach ($tables as $key => $value): ?>
                    <option value="<?=$value ?>"><?=$value ?></option>
                  <?php endforeach ?>
                </select><br><br>
                <input type="text" name="table_etranger" placeholder="Nom des tables meres(separé par la virule)" style="width: 555px;"><br><br>
                <input type="text" name="table_fille" placeholder="Nom des tables filles(separé par la virule)" style="width: 555px;"><br><br>
                <select name="type" style="width: 555px;">
                    <option value="1">GENERER UNE CLASSE</option>
                    <option value="2">GENERER UNE CLASSE MANAGER</option>
                </select>
                <br><br>
                <button type="submit">Valider</button>
            </div>
        </form>
    </div>
</body>
</html>