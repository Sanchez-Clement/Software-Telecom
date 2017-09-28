<?php
function addProject($id,$category,$title,$resume,$deadline) {
  $bdd = connect();
  $req = $bdd->prepare('INSERT INTO Project (id_manager, category, title_project, resume_project,date_create, deadline) VALUES(:id, :category, :title, :resume, NOW(),:deadline)');
  $req->execute(array(
  'id' => $id ,
  'category' => $category,
  'title' => $title,
  'resume' => $resume,
  'deadline' => $deadline,
  ));


}

 ?>
