<div id="modal2" class="modal">
   <div class="modal-content">
     <h4 class="center">Nouveau Projet</h4>
     <form class="" action="controlleur/admin/addProject_post.php" method="post">
       <div class="input-field">

                <select class="" name="category">
                  <option value="">maison</option>
                  <option value="">appartement</option>
                  <option value="">lotissement</option>
                </select>
            <label>Catégory :</label>
              </div>
              <div class="input-field ">

                       <input id="title" type="text" name="title" class="validate" required>
                       <label for="title">Titre</label>
                     </div>
                     <div class="input-field ">

                       <textarea id="resume" name="resume" class="materialize-textarea"></textarea>
<label for="resume">Résumé</label>
                            </div>
                            <div class="input-field col s6">

                                      <input id="deadline" name="deadline" type="text" class="datepicker">
                                     <label for="deadline">Date fin de chantier</label>
                                   </div>


                                   <div class="input-field ">
<input type="submit" name="" value="Ajouter projet" class="btn">
                                     </div>
     </form>
   </div>

 </div>
