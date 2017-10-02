<?php
// to add a task with the project id
$id = $_POST['id_project'];
$title = $_POST['tasktitle'];


require_once "../../modele/connexion_sql.php";
require "../../modele/admin/add_task.php";
addTask($id,$title);

// to go to the project detail
header('Location: ../../index.php?id_project=' . $id );

 ?>
