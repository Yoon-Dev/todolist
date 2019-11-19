<?php
require './extension/instance.php';
require_once './entete.php';
chargerclass($c_tache);
chargerclass($c_manager);
$manager = new ManagerTaches($conn);
$manager->InitRepe($jour);
$manager->RetardSimple($today);
$state = $manager->getVacState();


if($state == "true"){
    require './extension/vacance.html';
}else{



switch (true){
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// affiche le form add + all(tache_simple).today(tache_repe)
    case $adresse == "http://todo.pierre-monier.com/":
    
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
    $tache_del = (int)$_GET['del'];
    $redirection = $_GET['redirection'];
    $manager->del($tache_del);
    switch($redirection){
      case "logo":
?>
<script>
document.location.href = "./"
</script>
<?php
break;
      case "etude":
?>
<script>
document.location.href = "./?types=etude"
</script>
<?php
break;
      case "general":
?>
<script>
document.location.href = "./?types=general"
</script>
<?php
break; 
      case "devellopement":
?>
<script>
document.location.href = "./?types=devellopement"
</script>
<?php
break; 
      case "date":
?>
<script>
document.location.href = "./?date=today"
</script>
<?php
break; 
// fin SWITCH redirection
}
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// ajoute +1 a etat_repe (del repe)
    case isset($_GET['del_repe']) && !empty($_GET['del_repe']):
    $tache_repe = (int)$_GET['del_repe'];
    $redirection = $_GET['redirection'];
    $manager->delrepe($tache_repe);
    switch($redirection){
      case "logo":
?>
<script>
document.location.href = "./"
</script>
<?php
break;
      case "date":
?>
<script>
document.location.href = "./?date=today"
</script>
<?php
break; 
// fin SWITCH redirection
}
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// edit une tache simple
    case isset($_GET['edit']) && !empty($_GET['edit']):
    $redirection = $_GET['redirection'];
    $tache_edit = (int)$_GET['edit'];
    $t_edit = $manager->getId($tache_edit);
        require './extension/edit.php';
          break;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// edit une REPE
//     case isset($_GET['edit_repe']) && !empty($_GET['edit_repe']):
//     $repe_edit = (int)$_GET['edit_repe'];
//     $r_edit = $manager->getId($repe_edit);
//             require './extension/edit.php';
//               break;
//     case isset($_GET['sup_repe']) && !empty($_GET['sup_repe']): 
//     $repe_sup = (int)$_GET['sup_repe'];
//     $manager->supRepe($repe_sup);
// break;
// Page 404
    default:
      require './extension/404.php';
        break;
}


if (empty($taches) && empty($_GET['edit']) || !isset($taches) && empty($_GET['edit']))
{
?>
<div class="contairer marg-contain">
    <div class="row">
        <div class="col-12 text-center">
            <img class="no_tache" src="./img/gif/no_tache.gif" alt="aucune_tache">
        </div>
    </div>
</div>
<?php
}
if(empty($_GET['edit']))
{
  if($adresse == "http://todo.pierre-monier.com/"){
?>
<div class="contairer ">
      <div class="row">
<?php
}
  else{
?>
<div class="contairer marg-contain">
      <div class="row">
<?php
  }
  foreach ($taches as $uneTaches)
  {
    $uneTaches->SweetLimite();
?>
                <div class="col-12 col-md-6 col-xl-4 text-center my-5">
                    <div class="box">
                        <div class="box-lien">
                            <div class="row">
                                <div class="col-2 icone-box">
<?php
if($uneTaches->repe_jour() == null){
  // si c'est une tache simple
?>
                                  <a class="lien_del" href="?del=<?=$uneTaches->id();?>&amp;redirection=<?=$redirection_edit;?>"><i class="fas fa-minus"></i></a>
<?php
}
if($uneTaches->repe_jour() != null && !isset($_GET['repe']) && empty($_GET['repe'])){
  // si c'est une tache repe
?>
                                    <a class="lien_del" href="?del_repe=<?=$uneTaches->id();?>&amp;redirection=<?=$redirection_edit;?>"><i class="fas fa-minus"></i></a>
<?php
}
?>
                                </div>
                                <div class="col-8">
                                    <h2 class="nom-contenant <?php echo$uneTaches->etat();?>"><?php echo$uneTaches->nom();?></h2>
                                </div>
                                <div class="col-2">
                                    <a class="lien_jquery-nom" href=""><i class="fas fa-chevron-up"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="list-info-tache" id="list-info-tache">
                            <h5><?php echo$uneTaches->detail();?></h5>
<?php
if($uneTaches->repe_jour() == null){
  // si c'est une tache simple)
?>
                            <h3><?php echo$uneTaches->limite();?></h3>
<?php
}
else{
?>
                            <h5><?php echo "repe_jour : ".$uneTaches->repe_jour();?></h5>
<?php
}
?>
                            <p><?php echo$uneTaches->types(); ?></p>
                            <div class="box-lien">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <?php
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// EDIT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
if($uneTaches->repe_jour() == null){
  // si c'est une tache simple
?>
<a class="lien-edit" href="?edit=<?=$uneTaches->id()?>&amp;redirection=<?=$redirection_edit;?>"><i class="far fa-edit"></i></a>
<?php
}
?>
                                    </div>
                                </div>
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
</div>       
</body>
</html>
<?php
}

?>