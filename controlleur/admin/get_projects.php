<?php

if(!isset($_POST["category"])) {
  $category = "maison";
} else {
  $category = $_POST["category"];
}
require "vue/admin/selectCategory.php";
require "vue/admin/modal_addproduct.php" ;
require_once "modele/connexion_sql.php";
require "modele/admin/get_projects.php";
$projects = getProjects($_SESSION['id'],$category);

foreach ($projects as $key => $project) {
$projects[$key]['id']=$project["id"];
$projects[$key]['title_project']= htmlspecialchars($project['title_project']);
$projects[$key]['resume_project']= htmlspecialchars($project['resume_project']);
$projects[$key]['deadline']= $project['deadline'];
} ;

if ($projects ) {


require "vue/admin/get_projects.php";}
 ?>
