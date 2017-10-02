<?php
// To get all the tasks with the id_project


$id = $_GET['id_project'];

require_once "modele/connexion_sql.php";
require "modele/admin/get_task.php";

$thisProjects = getThisProject($id);


foreach ($thisProjects as $key => $thisProject) {
$thisProjects[$key]['id']=$thisProject["id"];
$thisProjects[$key]['title_project']= htmlspecialchars($thisProject['title_project']);
$thisProjects[$key]['deadline']= $thisProject['deadline'];
} ;

$tasks = getTask($id);

$test = 0;
foreach ($tasks as $key => $task) {
$tasks[$key]['id']=$task["id"];
$tasks[$key]['title_task']= htmlspecialchars($task['title_task']);
$tasks[$key]['done_task']=$task["done_task"];
if ($task["done_task"] == 1) {
  $test++;

}

// $tasks[$key]['deadline']= $task['deadline'];
} ;




require "vue/admin/get_task.php";
