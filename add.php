<?php
require './entete.php';
?>
<form action="./php/traitement_add.php" method="post">
    <fieldset>
        <legend>Ajouter une tâche:</legend>
        <label for="tache_nom"><span>Nom</span><span class="required">*</span><input type="text" name="tache_nom"
                id="tache_nom"></label>
        <label for="tache_detail"><span>Detail</span><input type="text" name="tache_detail"></label>
        <label for="tache_date"><span>Limite</span><span class="required">*</span><input id="tache_date"
                name="tache_date" type="date" value=""></label>
        <label for="tache_type"><span>Type</span><span class="required">*</span><select name="tache_type">
                <option value="etude">etude</option>
                <option value="general">general</option>
                <option value="developpement">developpement</option>
            </select></label>
        <label for=""><input type="submit" value="sub"></label>
    </fieldset>
</form>
<!-- permet d'inserer la date du jour dans le input date -->
</body>

</html>