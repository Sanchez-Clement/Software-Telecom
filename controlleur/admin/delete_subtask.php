<?php
$id_subtask = $_GET['id_subtask'];
$id_project = $_GET['id_project'];
require '../../modele/connexion_sql.php';
require '../../modele/admin/delete_subtask.php';
deleteSubtask($id_subtask);
header('Location: ../../index.php?id_project=' . $id_project )
 ?>
