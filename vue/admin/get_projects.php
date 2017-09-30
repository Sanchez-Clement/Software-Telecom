<div class="fixed-action-btn">
    <a class="btn-floating btn-large red modal-trigger" data-target="modal2" >
      <i class="large material-icons">add_circle</i>
</a>

  </div>


<div class="row">



<?phpforeach($projects as $project) {?>


<article class="card col s12 m6 l4 lime white-text">
<div class="card-content">
  <h4 class="card-title center"><?php echo $project['title_project'] ?> <a href="controlleur/admin/delete_project.php?delpro=<?php echo $project['id'] ?>" class="btn-floating red"><i class="material-icons">clear</i></a> </h4>
<p><?php echo $project['resume_project'] ?></p>

</div>
<div class="card-action ">
  <form class="" action="index.php" method="get">
    <input type="hidden" name="id_project" value="<?php echo $project['id'] ?>">
  <input class="btn" type="submit" value="Détail">
  </form>
<p class="chip"><?php echo $project['deadline'] ?></p>
</div>

</article>


<?php} ;?>

</div>
