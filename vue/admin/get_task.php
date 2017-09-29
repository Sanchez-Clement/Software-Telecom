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


</li>


<?php  } ?>



</ul>

</div>
