<?php

if(!isset($_POST["category"])) {
  $category = "maison";
} else {
  $category = $_POST["category"];
}
require "vue/admin/selectCategory.php";
echo $category;
 ?>
