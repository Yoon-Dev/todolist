<?php
require_once './entete.php';
require './extension/instance.php';
chargerclass($c_tache);
chargerclass($c_manager);
$manager = new ManagerTaches($conn);
$manager->InitRepe($jour);
switch (true){
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// affiche le form add + all(tache_simple).today(tache_repe)
    case $adresse == "http://localhost/todolist/":
    // variable de redirection sur un edit de tache simple
    $redirection_edit = "logo";
    // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // echo"affiche le formulaire de saisie des taches : ";
    require './extension/form.php';
    // +
    // echo"affiche toute les taches et les repe concerné par aujourd'hui";
    // +
          $taches = $manager->getList($jour);
            break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// affiche les taches en fonction du type mais aucune repe
    case isset($_GET['types']) && !empty($_GET['types']):
    // +
    // echo "filtre en fonction de type : ";
    // +
    $gettype = $_GET['types'];
        // variable de redirection sur un edit de tache simple
        // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        switch ($gettype){
          case "etude":
            $redirection_edit = "etude";
              break;
          case "general":
            $redirection_edit = "general";
              break;
          case "devellopement":
            $redirection_edit = "devellopement";
              break;
        }
    // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        $taches = $manager->getTypes($gettype);
      // +
        // echo $gettype;
      // +
        break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// Affiche all(repe)
    case isset($_GET['repe']) && !empty($_GET['repe']):
    // +
    // echo"filtre et affiche les repe";
    // +
    $taches = $manager->getRepe();
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// affiche toute les taches concerné par aujourd'hui 
    case isset($_GET['date']) && !empty($_GET['date']):
    // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
      // redirection
        $redirection_edit = "date";
    // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // +
    // echo"filtre les taches concernant uniquement aujourdhui";
    // +
    $taches = $manager->getToday($jour, $today);
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// supprime une tache simple
    case isset($_GET['del']) && !empty($_GET['del']):
    // +
    // echo"je veux supprimer cette tache";
    // +
    $tache_del = (int)$_GET['del'];
    // +
    // echo $tache_del,gettype($tache_del);
    // +
    $manager->del($tache_del);
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// ajoute +1 a etat_repe (del repe)
    case isset($_GET['del_repe']) && !empty($_GET['del_repe']):
    // +
    // echo"j'ai accomplis cette tache repe, je veux donc quelle disparraise de ma todolist";
    // +
    $tache_repe = (int)$_GET['del_repe'];
    // +
    // echo $tache_repe,gettype($tache_repe);
    // + 
    $manager->delrepe($tache_repe);
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// edit une tache simple
    case isset($_GET['edit']) && !empty($_GET['edit']):
    // +
    // echo"je veux edit cette tache et me rediriger vers redirection";
    // +
    $redirection = $_GET['redirection'];
    // +
    // echo $redirection,gettype($redirection);
    // +
    $tache_edit = (int)$_GET['edit'];
    // +
    // echo $tache_edit,gettype($tache_edit);
    // +
    $t_edit = $manager->getId($tache_edit);
        require './extension/edit.php';
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// edit une REPE
    case isset($_GET['edit_repe']) && !empty($_GET['edit_repe']):
    // +
    // echo"je veux edit cette repe";
    // +
    $repe_edit = (int)$_GET['edit_repe'];
    // +
    // echo $repe_edit,gettype($repe_edit);
    // +
    $r_edit = $manager->getId($repe_edit);
            require './extension/edit.php';
              break;
}


if (empty($taches))
{
  echo 'Aucune Tache !';
}
else
{
?>
<div class="contairer">
  <div class="row">
<?php
  foreach ($taches as $uneTaches)
  {

?>

    <div class="col-12 col-md-6 col-xl-4 text-center my-5">
        <div class="box">
            <div class="box-lien">
              <div class="row">
                <div class="col-2">
                    <?php
if($uneTaches->repe_jour() == null){
  // si c'est une tache simple
?>
                    <a class="lien_del" href="?del=<?=$uneTaches->id();?>">del</a>
                    <?php
}else{
  // si c'est une tache repe
?>
                    <a class="lien_del" href="?del_repe=<?=$uneTaches->id();?>">del_repe</a>
                    <?php
}
?>
</div>
<div class="col-8">
<h2 class="nom-contenant"><?php echo$uneTaches->nom();?></h2>
</div>
<div class="col-2 tex">
                    <a class="lien_jquery-nom" href="">bru</a>
                    </div>
            <!-- fin row titre -->
            </div>
                  </div>
            <div class="list-info-tache" id="list-info-tache">
                <h5><?php echo "id : ".$uneTaches->id(); ?></h5>
                <h5><?php echo "detail : ".$uneTaches->detail(); ?></h5>
                <h5><?php echo "limite : ".$uneTaches->limite(); ?></h5>
                <h5><?php echo "types : ".$uneTaches->types(); ?></h5>
                <h5><?php echo "etat : ".$uneTaches->etat(); ?></h5>
                <h5><?php echo "etat_repe : ".$uneTaches->etat_repe(); ?></h5>
                <h5><?php echo "repe_jour : ".$uneTaches->repe_jour(); ?></h5>
                <h5><?php echo "repe_confirme : ".$uneTaches->repe_confirme(); ?></h5>
                <div class="box-lien">
                    <?php
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// EDIT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
if($uneTaches->repe_jour() == null){
  // si c'est une tache simple
?>
                    <a href="?edit=<?=$uneTaches->id()?>&amp;redirection=<?=$redirection_edit;?>">edit</a>
                    <?php
}
if($uneTaches->repe_jour() != null && isset($_GET['repe']) && !empty($_GET['repe'])){
  // si c'est une tache repe
?>
                    <a href="?edit_repe=<?=$uneTaches->id();?>">edit_repe</a>
                    <?php
}
?>
                </div>
            </div>
        </div>
    </div>

<?php

  }
}
?>
</div>
</div>
<script src="./js/form.js"></script>
<script src="./js/display.js"></script>
</body>

</html>