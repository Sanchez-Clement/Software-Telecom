<div class="row">


<form class="input-field col s5"  method="post">



<select class="" name="category" onchange="this.form.submit()">
  <option value="maison" <?php if ($category=="maison"){echo "selected";} ?>>maison</option>
  <option value="appartement" <?php if ($category=="appartement"){echo "selected";} ?>>appartement</option>
  <option value="lotissement" <?php if ($category=="lotissement"){echo "selected";} ?>>lotissement</option>
</select>
<label class="black-text">Catégory :</label>
<!-- <input name="submit" id="submit" type="submit" value="SEND FORM"> -->
</form>
</div>
