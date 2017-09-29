<?php if (!isset($_SESSION["pseudo"])) {

require "vue/admin/connexion.php";

} else if (isset($_GET['id_project'])){
  require "controlleur/admin/get_task.php";
} else {
  require "controlleur/admin/get_projects.php";
}?>
