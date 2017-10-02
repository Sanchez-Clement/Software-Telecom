<?php
// to remove projects from trash

$id = $_GET['id_project'];
require "../../modele/connexion_sql.php";
require "../../modele/admin/removefromTrash.php";
removeFromTrash($id);
header('Location: ../../index.php')
?>
