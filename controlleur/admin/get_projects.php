<?php

if(!isset($_POST["category"])) {
  $category = "maison";
} else {
  $category = $_POST["category"];
}
require "vue/admin/selectCategory.php";
echo $category;
echo $_SESSION['id'];
require "vue/admin/get_projects.php"
 ?>
