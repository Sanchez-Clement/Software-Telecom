<?php if (!isset($_SESSION["pseudo"])) {

require "vue/admin/connexion.php";

} else {
  require "controlleur/admin/get_projects.php";
}?>
