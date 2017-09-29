<?php
$id = $_GET['id_project'];
require "modele/connexion_sql.php";
require "modele/admin/get_task.php";

$thisProjects = getThisProject($id);


foreach ($thisProjects as $key => $thisProject) {
$thisProjects[$key]['id']=$thisProject["id"];
$thisProjects[$key]['title_project']= htmlspecialchars($thisProject['title_project']);
$thisProjects[$key]['deadline']= $thisProject['deadline'];
} ;

$tasks = getTask($id);


foreach ($tasks as $key => $task) {
$tasks[$key]['id']=$task["id"];
$tasks[$key]['title_task']= htmlspecialchars($task['title_task']);
// $tasks[$key]['deadline']= $task['deadline'];
} ;


require "vue/admin/get_task.php";
