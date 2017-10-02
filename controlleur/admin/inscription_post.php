<?php
// To add a new manger in bdd


session_start();
$firstname = htmlspecialchars($_POST['prenom']);
$lastname = htmlspecialchars($_POST['nom']);
$age = $_POST["age"];
$email = htmlspecialchars($_POST['mail']);
$passwd = password_hash($_POST['password'], PASSWORD_BCRYPT);
require "../../modele/connexion_sql.php";
require "../../modele/admin/inscription.php";

insert_manager($firstname,$lastname,$email,$age,$passwd);
$_SESSION["pseudo"] = $lastname;

header("Location: ../../index.php")
 ?>
