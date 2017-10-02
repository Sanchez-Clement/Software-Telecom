<div class="row">

<?php require 'vue/admin/modal_addtask.php' ?>

<!-- modal to add a new task -->
    <a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" data-target="modal3"><i class="material-icons">add</i></a>

    <h3 class="center white-text"><?php echo $thisProject['title_project'] ?></h3>
    <p class="chip center col s12"><?php echo $thisProject['deadline_fr']  ?> </p>
</div>

<!-- list of tasks -->
<ul id="task" class="collapsible popout" data-collapsible="accordion">

  <?php foreach ($tasks as $task) {
    ?>

    <?php require 'vue/admin/modal_addsubtask.php' ?>

    <li class="abc">

      <div class="collapsible-header taskDescription"  >
        <p><?php echo $task['title_task'] ?></p>

<!-- Links to ad add subtask and remove a task -->
        <div class="links">
          <a class="btn-floating btn-min waves-effect waves-light red right modal-trigger" data-target='<?php echo "modalsubtask" . $task["id"]?>' ><i class="material-icons">add</i></a>
          <a class="btn-floating btn-min waves-effect waves-light red right" href="controlleur/admin/delete_task.php?id_task=<?php echo
          $task['id']?>&id_project=<?php echo $thisProject['id'] ?>" ><i class="material-icons">healing</i></a>
        </div>

      </div>

<!-- list ok subtasks -->
      <div class="collapsible-body white ">
    <?php require "controlleur/admin/get_subtask.php" ?>

        <form class="" action="controlleur/admin/updatecheckbox.php" method="post">

          <?php foreach ($subtasks as $subtask) { ?>

            <p>
              <input type="checkbox" class="" id="<?php echo $subtask['title_subtask'] ?>" name="subtask<?php echo $subtask['id'] ?>" value="1" <?php if ($subtask['done_subtask']==1) {echo "checked='checked'";} ?>>

              <label for="<?php echo $subtask['title_subtask'] ?>"><?php echo $subtask['title_subtask']?></label>
              <a class=" right" href="controlleur/admin/delete_subtask.php?id_subtask=<?php echo
              $subtask['id']?>&id_project=<?php echo $thisProject['id'] ?>" >X</a>
              <input type="hidden" name="id[<?php echo $subtask['id'] ?>]" value="<?php echo $subtask['id'] ?>">
              <input type="hidden" name="id_project" value="<?php echo $thisProject['id'] ?>">
            </p>


            <?php } ; ?>
            <?php if ($subtasks) { ?>
            <input class='btn' type="submit" name="" value="Enregistrer">
            <?php } ?>
          </form>
        </div>
      </li>


<?php } ?>
<!-- end of foreach -->


  </ul>

</div>
