<?php
function connect_to_database() {
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $databasename = "BaseTest01";

    try {
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "<p>Vous êtes connecté</p>";

        $sql = "DELETE FROM produit
        WHERE Nom='T-Shirt noir'";

        $pdo->exec($sql);
        echo 'Entrée supprimée dans la table';
    }
     catch(PDOException $e) {
         echo "<p> Vous n'êtes pas connecté</p>".$e->getMessage();

     }

     }
     $pdo = connect_to_database();

     ?>