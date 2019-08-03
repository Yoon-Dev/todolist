<?php
require'./entete.php';
require'./fake_module/connection_bdd.php';
switch (true) {
    case isset($_GET['type']) && !empty($_GET['type']):
        require './fake_module/affiche_tri_bdd.php';
        break;

    case isset($_GET['day']) && !empty($_GET['day']):
        require './fake_module/affiche_tri_everyday_bdd.php';
        break;

    default:
        require './fake_module/affiche_bdd.php';
        break;
}

?>
<div class="container main-content">
<div class=""><h1 id="annee-mois-date"></h1></div>
<?php
for ($j = 0; $j < $rows; $j++) {
    $row = $result->fetch_array(MYSQLI_ASSOC);
    require './fake_module/changement_etat.php';
    require './fake_module/rajoute_guillement.php';
?>
<div class=""><a href="http://localhost/todolist/php/traitement_del.php/?id=<?=$row['tache_id']?>">del</a>
              <a href="http://localhost/todolist/edit.php/?id=<?=$row['tache_id']?>">edit</a>
    <p><?php echo $row['tache_nom']; ?></p>
    <p><?php echo $row['tache_detail']; ?></p>
    <p><?php echo $row['tache_date']; ?></p>
    <p><?php echo $row['tache_type'];?></p>
</div>



<?php
}
?>
</body>
</html>