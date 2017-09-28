<?php

if(!isset($_POST["category"])) {
  $category = "maison";
} else {
  $category = $_POST["category"];
}
require "vue/admin/selectCategory.php";
require "vue/admin/modal_addproduct.php" ;
require "modele/connexion_sql.php";
require "modele/admin/get_projects.php";
$projects = getProjects($_SESSION['id'],$category);
require "vue/admin/get_projects.php"
 ?>
