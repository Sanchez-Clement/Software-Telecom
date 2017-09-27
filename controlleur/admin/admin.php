<?php if (!isset($_SESSION["pseuso"])) {

require "vue/admin/connexion.php";

} else {
  echo $_SESSION["pseuso"];
}?>
