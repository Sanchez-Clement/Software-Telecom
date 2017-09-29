<div id="modal3" class="modal">
   <div class="modal-content">
<h4 class="center">Ajouter une tâche !</h4>
<form class="" action="controlleur/admin/add_task.php" method="post">
  <div class="input-field">
<input type="text" id="tasktitle" name="tasktitle" value="" required>
<label for="tasktitle">Nom de la Tâche</label>
  </div>
  <input type="hidden" name="id_project" value="<?php echo $id ?>">

  <input type="submit" name="" value="Ajouter tâche" class="btn">
</form>



</div>

</div>
