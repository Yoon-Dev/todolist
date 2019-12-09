<?php
require './extension/instance.php';
    require_once './entete.php';
    chargerclass($c_tache);
    chargerclass($c_manager);
    $manager = new ManagerTaches($conn);
    $state = $manager->getVacState();
    $taches = $manager->getRepe();

    require './extension/form_repe.php';

// TEST
switch (true){
    case isset($_GET['edit_repe']) && !empty($_GET['edit_repe']):
        $repe_edit = (int)$_GET['edit_repe'];
        $r_edit = $manager->getId($repe_edit);
            require './extension/edit.php';
?>
<script src="./js/none-add-repe"></script>
<?php
                break;
    case isset($_GET['sup_repe']) && !empty($_GET['sup_repe']): 
        $repe_sup = (int)$_GET['sup_repe'];
        $manager->supRepe($repe_sup);
?>
<script>
document.location.href = "./backoffice.php"
</script>
<?php
            break;
    case isset($_GET['vacation']) && !empty($_GET['vacation']): 
        $manager->toggleVac();
?>
<script>
document.location.href = "./backoffice.php"
</script>
<?php
}

?>
<body>
    

<?php
if (empty($taches) && !isset($taches))
{
?>
<div class="contairer marg-contain">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <img class="no_tache" src="./img/gif/no_tache.gif" alt="aucune_tache">
        </div>
    </div>
</div>
<?php
}
else{
?>

<div class="contairer ">
    <div class="row">
<?php
foreach ($taches as $uneTaches)
{
$uneTaches->SweetLimite();
?>
            <div class="col-12 col-md-6 col-xl-4 text-center my-5">
                <div class="box">
                    <div class="box-lien">
                        <div class="row">
                            <div class="col-2 icone-box">
                                <a class="lien_del" href="?sup_repe=<?=$uneTaches->id();?>"><i class="far fa-trash-alt"></i></a>
                            </div>
                            <div class="col-8">
                                <h2 class="nom-contenant <?php echo$uneTaches->etat();?>"><?php echo$uneTaches->nom();?></h2>
                            </div>
                            <div class="col-2">
                                <a class="lien_jquery-nom" href=""><i class="fas fa-chevron-up"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row list-info-tache" id="list-info-tache">
                        <div class="col-12">
                            <h5><?php echo$uneTaches->detail();?></h5>
                        </div>
                        <div class="col-12">
                            <h5><?php echo$uneTaches->repe_jour();?></h5>
                        </div>
                        <div class="col-12">
                            <p><?php echo$uneTaches->types(); ?></p>
                        </div>
                    </div>
                    <div class="box-lien">
                        <div class="row">
                            <div class="col-12 text-center">
                                <a href="?edit_repe=<?=$uneTaches->id();?>"><i class="far fa-edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    


<!-- FIN DU FOREACH -->
<?php
}if($state == "false"){
?>
    <div class="col-12 text-center">
        <a href="?vacation=y">Mode vacance <i class="fas fa-times"></i></a>
    </div>
<?php
}else{
?>
    <div class="col-12 text-center">
        <a href="?vacation=y">Mode vacance <i class="fas fa-check"></i></a>
    </div>
<?php
}
?>
    </div>
</div>
<!-- FIN ELSE PRINCIPALE -->
<?php
}

// fin if pricipame


?>
</div>
</body>
</html>