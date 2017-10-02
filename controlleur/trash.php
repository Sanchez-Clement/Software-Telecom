<?php
// To update the visibility of the project

require_once " ../../modele/connexion_sql.php";
require_once " ../../modele/admin/trash.php";


$trashes = getTrash($_SESSION['id']);

foreach ($trashes as $key => $trash) {
$trashes[$key]['id']=$trash["id"];
$trashes[$key]['title_project']= htmlspecialchars($trash['title_project']);
$trashes[$key]['deadline']= $trash['deadline'];
} ;

require "vue/admin/modal_trash.php"

 ?>
