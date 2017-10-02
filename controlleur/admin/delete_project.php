<?php
// to update the visibility project

$id = $_GET['delpro'];
require "../../modele/connexion_sql.php";
require "../../modele/admin/update_showproject.php";
updateProjectshow($id);
header("Location: ../../index.php")
?>
