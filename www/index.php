<?php require './serv/src/getAll.php'; ?>
<?php require_once './view/header.php'; ?>
<div class="contairer" id="task-list">
  <div class="row">
<?php if($manager->notEmpty($empty)){foreach($taches as $uneTaches){ ?>
    <div class="col-12 col-md-6 col-xl-4 text-center my-5">
        <div class="box">
            <div class="box-lien">
                <div class="row">
                    <div class="col-2 icone-box">
<?php if($uneTaches->IamSimple()){ ?>
                      <a class="lien_del" href="#"><i class="fas fa-minus"></i></a>
<?php }else{ ?>
                      <a class="lien_del" href="#"><i class="fas fa-minus"></i></a>
<?php } ?>
                    </div>
                    <div class="col-8">
                        <h2 class="nom-contenant <?php echo$uneTaches->etat();?>"><?php echo$uneTaches->nom();?></h2>
                    </div>
                    <div class="col-2">
                        <a class="lien_jquery-nom" href="#"><i class="fas fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="list-info-tache" id="list-info-tache">
                <h5><?php echo$uneTaches->detail();?></h5>
<?php if($uneTaches->IamSimple()){ ?>
                <h3><?php echo$uneTaches->limite();?></h3>
<?php }else{ ?>
                <h5><?php echo "repe_jour : ".$uneTaches->repe_jour();?></h5>
<?php } ?>
                <p><?php echo$uneTaches->types(); ?></p>
                <div class="box-lien">
                    <div class="row">
                        <div class="col-12 text-center">
<?php if($uneTaches->IamSimple()){ ?>
                          <a class="lien-edit" href="#"><i class="far fa-edit"></i></a>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }} ?>
  </div>
</div>       
</body>
</html>