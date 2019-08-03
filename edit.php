<?php
require './entete.php';
// connection BDD
require'./fake_module/connection_bdd.php';
// selection des valeur pour l'id passer dans l'url
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $getid = $_GET['id'];
$query = "SELECT * FROM `tache` WHERE tache_id = '$getid'";
$result = $conn->query($query);
if (!$result) {
    die($conn->error);
}

$rows = $result->num_rows;
}
// debut FOR bdd 
for ($j = 0; $j < $rows; $j++) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    require './fake_module/rajoute_guillement.php';
?>
<form action="http://localhost/todolist/php/traitement_edit.php" method="post">
    <fieldset>
        <legend>Ajouter une tâche:</legend>
        <label for="tache_nom"><span>Nom</span><span class="required">*</span><input type="text" name="tache_nom"
                id="tache_nom" value="<?php echo $row['tache_nom']; ?>"></label>
        <label for="tache_detail"><span>Detail</span><input type="text" name="tache_detail" value="<?php echo $row['tache_detail']; ?>"></label>
        <label for="tache_date"><span>Limite</span><span class="required">*</span><input id="tache_date"
                name="tache_date" type="date" value="<?php echo $row['tache_date']; ?>"></label>
        <label for="tache_type"><span>Type</span><span class="required">*</span><select name="tache_type">
<?php
switch ($row['tache_type']){
    case "etude":
?>
                <option value="etude">etude</option>
                <option value="general">general</option>
                <option value="developpement">developpement</option>
<?php
    break;
    case "general":
?>
                <option value="general">general</option>
                <option value="etude">etude</option>              
                <option value="developpement">developpement</option>
<?php
    break;
    case "developpement":
?>   
                <option value="developpement">developpement</option>
                <option value="general">general</option>
                <option value="etude">etude</option>                          
<?php
    break;
}
?>           
                </select></label>
        <input type="hidden" name="tache_id" value="<?php echo $row['tache_id']; ?>">
        <label for=""><input type="submit" value="sub"></label>
    </fieldset>
</form>
<?php
// fin du FOR bdd
}
?>
</body>
</html>