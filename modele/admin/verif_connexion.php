<!-- permet de verifier si pseudo est connu dans bdd -->

<?php
function verifConnexion($mail){
  $bdd = connect();
  $reponse = $bdd->prepare('SELECT id, mail,lastname, passwd FROM Manager WHERE mail = :mail');
  $reponse->execute(array(
'mail' => $mail,

));

$connexion = $reponse->fetch();

return $connexion;
}
