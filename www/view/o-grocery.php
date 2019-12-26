<?php require'./serv/src/o-grocery.php';?>
 <form>
  <label for="Grocery"><span>Grocery</span><input type="checkbox" name="grocery" value="grocery">
  <select name="ingredient" class="">
  <?php foreach($recettes as $val){?>
    <option value="<?php echo$val->ingredient()?>"><?php echo$val->titre()?></option>
  <?php }?>
  </select>
</form> 
