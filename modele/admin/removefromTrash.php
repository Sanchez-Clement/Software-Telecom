<?php
function removeFromTrash($id){
  $bdd = connect();
  $req = $bdd->prepare('UPDATE Project SET showproject = :show WHERE id = :id');
  $req->execute(array(
  	'show' => 1,
  	'id' => $id
  	));
    }


 ?>
