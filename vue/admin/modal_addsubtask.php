<!-- modal to add a new subtask -->

<div id='<?php echo "modalsubtask" . $task["id"] ?>' class="modal">

   <div class="modal-content">
     <h4 class="center">Ajouter une sous-tâche !</h4>

     <form class="" action="controlleur/admin/add_subtask.php" method="post">

        <div class="input-field">
            <input type="text" id="tasktitle" name="subtasktitle" value="" required>
            <label for="tasktitle">Nom de la Tâche</label>
        </div>

        <input type="hidden" name="id_project" value="<?php echo $id ?>">
        <input type="hidden" name="id_task" value="<?php echo $task["id"] ?>">
        <input type="submit" name="" value="Ajouter tâche" class="btn">

      </form>



    </div>

</div>
