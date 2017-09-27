<?php
function insert_manager($firstname,$lastname,$email,$age,$passwd) {
$bdd = connect();
$req = $bdd->prepare('INSERT INTO Manager (firstname, lastname, mail, ages,passwd) VALUES(:firstname, :lastname, :mail, :ages, :passwd)');
$req->execute(array(
'firstname' => $firstname ,
'lastname' => $lastname,
'mail' => $email,
'ages' => $age ,
'passwd' => $passwd,
));

$_SESSION["id"] = $bdd-> lastInsertId();
}


 ?>
