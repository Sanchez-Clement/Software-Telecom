<?php
function updateProjectshow($id){
  $bdd = connect();
  $req = $bdd->prepare('UPDATE Project SET showproject = :show WHERE id = :id');
  $req->execute(array(
  	'show' => 0,
  	'id' => $id
  	));
    }


 ?>
