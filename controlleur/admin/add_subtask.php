<?php
// To add a subtask with the task id
$id_project = $_POST['id_project'] ;
$id_task = $_POST['id_task'];
$title = htmlspecialchars($_POST['subtasktitle']);

require_once "../../modele/connexion_sql.php";
require "../../modele/admin/add_subtask.php";
addSubtask($id_task,$title);


// To go to the project
header('Location: ../../index.php?id_project=' . $id_project );
?>
