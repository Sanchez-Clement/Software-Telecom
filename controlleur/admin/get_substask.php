<?php require "modele/connexion_sql.php" ;
$subtasks = getSubtask($task["id"]);


foreach ($subtasks as $key => $subtask) {
  $subtasks[$key]['id']=$subtask["id"];
  $subtasks[$key]['title_task']= htmlspecialchars($subtask['title_subtask']);
  $subtasks[$key]['done_substask']=$subtask["done_substask"];
}




?>
