<?php
$id_task = $_GET['id_task'];
$id_project = $_GET['id_project'];
require '../../modele/connexion_sql.php';
require '../../modele/admin/delete_task.php';
deleteTask($id_task);
header('Location: ../../index.php?id_project=' . $id_project )
 ?>
