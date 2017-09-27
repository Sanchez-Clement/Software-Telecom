<!-- Connexion base de données -->

<?php
function connect() {
try {
    $bdd = new PDO('mysql:host=localhost;dbname=telecom;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

return $bdd;
}
