<?php
session_start();

include '../../modele/connexion_sql.php';
$mail = htmlspecialchars($_POST["mail"]);
$password = $_POST["passwd"];
include '../../modele/admin/verif_connexion.php';
echo $mail;
echo $password;
$_SESSION["error"]["passwd_connexion"] ="";
$_SESSION["error"]["mail_connexion"] ="";
// appel du modele pour verifier si l'user esr enregistré en base de donné

$connexion = verifConnexion($mail);
var_dump($connexion) ;

if(!$connexion) { $_SESSION["error"]["mail_connexion"] = "Mail non reconnu";
$error = 1;
echo "non";} else {
  $_SESSION["error"]["mail_connexion"] ="";
  if (!password_verify($password, $connexion["passwd"])) {
    $_SESSION["error"]["passwd_connexion"] = "erreur de mot de passe";
    $error = 1;

  } else {
    $_SESSION["error"]["passwd_connexion"] ="";

  }

}

// redirection vers index
if (isset($error)) {
header("Location: ../../index.php" );
} else {
  $_SESSION["pseudo"] = $connexion["lastname"];
$_SESSION["id"] = $connexion["id"];
  header("Location: ../../index.php" );
}
 ?>
