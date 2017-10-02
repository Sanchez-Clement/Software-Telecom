<?php
// To update the validate checkbox

require "../../modele/connexion_sql.php";
require "../../modele/admin/update_subtask.php";


foreach ($_POST['id'] as $id ) {

updateSubtask($id);
}

header('Location: ../../index.php?id_project=' . $_POST['id_project'] );
 ?>
