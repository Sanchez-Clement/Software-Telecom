<?php
// To get the subtask with the id_task;

require_once "modele/admin/get_subtask.php";
$subtasks = getSubtask($task["id"]);


foreach ($subtasks as $key => $subtask) {
  $subtasks[$key]['id']=$subtask["id"];
  $subtasks[$key]['title_subtask']= htmlspecialchars($subtask['title_subtask']);
  $subtasks[$key]['done_subtask']=$subtask["done_subtask"];
}



?>
