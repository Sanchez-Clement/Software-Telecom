<?php
$id = $_POST['id_project'];
$title = $_POST['tasktitle'];


require "../../modele/connexion_sql.php";
require "../../modele/admin/add_task.php";
addTask($id,$title);

header('Location: ../../index.php?id_project=' . $id );

 ?>
