<div class="row">

<?php require 'vue/admin/modal_addtask.php' ?>


<a class="btn-floating btn-large waves-effect waves-light red right modal-trigger" data-target="modal3"><i class="material-icons">add</i></a>

<h3 class="center white-text"><?php echo $thisProject['title_project'] ?><span class="chip"><?php echo $thisProject['deadline']  ?> </span></h3>
</div>

<ul class="collapsible" data-collapsible="accordion">

  <?php foreach ($tasks as $task) {?>

    <?php require 'vue/admin/modal_addsubtask.php' ?>

<li>

  <div class="collapsible-header">
    <p><?php echo $task['title_task'] ?></p>
    <a class="btn-floating btn-min waves-effect waves-light red right modal-trigger" data-target='<?php echo "modalsubtask" . $task["id"]?>' ><i class="material-icons">add</i></a>
  </div>

  <div class="collapsible-body white">
    <?php require "controlleur/admin/get_subtask.php" ?>
<form class="" action="index2.php" method="post">

<?php foreach ($subtasks as $subtask) {?>

  <p>
  <input type="checkbox" id="<?php echo $subtask['title_subtask'] ?>" name="test<?php echo $subtask['id'] ?>" value="1" <?php if ($subtask['done_subtask']==1 ) {
  echo "checked='checked'";} ?>>

  <label for="<?php echo $subtask['title_subtask'] ?>"><?php echo $subtask['title_subtask']?></label>
  <input type="hidden" name="id[<?php echo $subtask['id'] ?>]" value="<?php echo $subtask['id'] ?>">
  </p>







<?php } ; ?>
<input type="submit" name="" value="envoyer">
</form>
</div>
</li>


<?php  } ?>



</ul>

</div>
