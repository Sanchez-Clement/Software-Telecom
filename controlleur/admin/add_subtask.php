<?php

$id_project = $_POST['id_project'] ;
$id_task = $_POST['id_task'];
$title = htmlspecialchars($_POST['subtasktitle']);

require "../../modele/connexion_sql.php";
require "../../modele/admin/add_subtask.php";
addSubtask($id_task,$title);

header('Location: ../../index.php?id_project=' . $id_project );
?>
