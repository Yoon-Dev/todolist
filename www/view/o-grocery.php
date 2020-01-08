<?php require'./serv/src/o-grocery.php';?>
<div class="row">
  <div class="col-12">
    <label for="Grocery"><span>Grocery</span><input class="input-form input-field" type="checkbox" name="grocery" value="grocery">
  </div>
  <div class="col-12">
    <select name="ingredient" class="input-form select-field mw-100 mb-2">
    <?php foreach($recettes as $val){?>
      <option value="<?php echo$val->ingredient()?>"><?php echo$val->titre()?></option>
    <?php }?>
    </select>
  </div>
</div>

