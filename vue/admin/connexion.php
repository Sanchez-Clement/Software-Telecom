<div class="card" id="formconnexion">


<form class="col s12 m6" action="controlleur/admin/connexion_post.php" method="post">
  <div class="input-field col s6">
           <i class="material-icons prefix">email</i>
           <input id="icon_prefix" type="email" name="mail" class="validate" required>
           <label for="icon_prefix">E-mail</label>
<?php if(isset($_SESSION["error"]["mail_connexion"])) {echo $_SESSION["error"]["mail_connexion"];} ?>
         </div>
         <div class="input-field col s6">
             <i class="material-icons prefix">enhanced_encryption</i>
             <input id="passwd" type="password" name="passwd" class="validate" required>
             <label for="passwd">Mot de passe</p></label>
             <?php if(isset($_SESSION["error"]["passwd_connexion"])) {echo $_SESSION["error"]["passwd_connexion"];} ?>
           </div>
           <div class="input-field col s6">
           <input type="submit" name="" value="Connexion" class="btn">
           </div>
</form>
<div class="card-action">
  <a data-target="modal1" class=" modal-trigger">Nouveau manager</a>
</div>
</div>

<?php require "vue/admin/modal_inscription.php" ?>
