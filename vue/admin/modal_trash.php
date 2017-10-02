<div id="modal4" class="modal">

   <div class="modal-content">

     <h4 class="center black-text">Projets Supprimés !</h4>
     <ul class="collection" id="subtasks">
<?php foreach ($trashes as $trash): ?>
  <li class="collection-item black-text" ><?php echo $trash['title_project']?> <span><?php echo $trash['deadline_fr'] ?></span> <a class="btn" href="controlleur/admin/removeFromTrash.php?id_project=<?php echo $trash['id'] ?>">remove</a></li>
<?php endforeach; ?>


</ul>



</div>

</div>
