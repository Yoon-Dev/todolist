<?php require './serv/src/getAll.php'; ?>
<div class="contairer" id="task-list">
  <div class="row">
<?php if($manager->notEmpty($empty)){foreach($taches as $tache){ ?>
    <div id="<?php echo$tache->id();?>" class="tache col-12 col-md-6 col-xl-4 text-center my-5" data-type="<?php echo$tache->types();?>" data-istoday="<?php echo$tache->isToday();?>">
        <div class="box">
            <div class="box-lien">
                <div class="row">
                    <div class="col-2 icone-box">
                      <a class="del" href="#" data-id="<?php echo$tache->id();?>" data-simple="<?php echo$tache->IamSimple();?>" data-backoffice="non"><i class="fas fa-minus"></i>D</a>
                    </div>
                    <div class="col-8">
                        <h2 class="nom-contenant <?php echo$tache->etat();?>"><?php echo$tache->nom();?></h2>
                    </div>
                    <div class="col-2">
                        <a class="lien_jquery-nom" href="#"><i class="fas fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="list-info-tache" id="list-info-tache">
                <h5><?php echo$tache->detail();?></h5>
<?php if($tache->IamSimple()){ ?>
                <h3><?php echo$tache->limite();?></h3>
<?php }else{ ?>
                <h5><?php echo "repe_jour : ".$tache->repe_jour();?></h5>
<?php } ?>
                <p><?php echo$tache->types(); ?></p>
                <div class="box-lien">
                    <div class="row">
                        <div class="col-12 text-center">
<?php if($tache->IamSimple()){ ?>
                          <a class="edit" href="#"
                          data-id="<?php echo$tache->id();?>"
                          data-nom="<?php echo$tache->nom();?>"
                          data-detail="<?php echo$tache->detail();?>"
                          data-type="<?php echo$tache->types();?>"
                          data-date="<?php echo$tache->u_limite();?>"
                          ><i class="far fa-edit"></i>E</a>
<?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }} ?>
  </div>
  <div class="col-12">
    <a class="add" href="#">Add</a>
  </div>
</div>