<?php require './serv/src/getRepe.php';?>
<div class="contairer" id="task-list">
  <div class="row backoffice-container" id="tmp">
<?php if($manager->notEmpty($empty)){foreach($taches as $tache){ ?>
    <div id="<?php echo$tache->id();?>" class="tache col-12 col-md-6 col-xl-4 text-center my-5" data-type="<?php echo$tache->types();?>">
        <div class="box">
            <div class="box-lien">
                <div class="row">
                    <div class="col-2 pr-0 icone-box d-flex justify-content-end">
                      <a class="del" href="#" data-id="<?php echo$tache->id();?>" data-simple="<?php echo$tache->IamSimple();?>" data-backoffice="oui"><i class="fas fa-minus"></i></a>
                    </div>
                    <div class="col-8">
                        <h2 class="nom-contenant <?php echo$tache->etat();?>"><?php echo$tache->nom();?></h2>
                    </div>
                    <div class="col-2 icone-box d-flex justify-content-start pr-0">
                        <a class="detail" href="#"><i class="fas fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
            <div class="list-info-tache" id="list-info-tache">
                <h5><?php echo$tache->detail();?></h5>
                <h5><?php echo "repe_jour : ".$tache->repe_jour();?></h5>
                <p><?php echo$tache->types(); ?></p>
                <div class="box-lien">
                    <div class="row">
                        <div class="col-12 text-center">
                          <a class="edit_repe" href="#"
                          data-id="<?php echo$tache->id();?>"
                          data-nom="<?php echo$tache->nom();?>"
                          data-detail="<?php echo$tache->detail();?>"
                          data-type="<?php echo$tache->types();?>"
                          data-jour="<?php echo$tache->repe_jour();?>"
                          ><i class="far fa-edit"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }} ?>
  </div>
  <div class="d-flex justify-content-start add-btn mb-2 left">
        <a class="show-search" href="#"><img src="./img/icone/search-btn.svg" alt=""></a>
    </div>
    <div class="col-6 d-flex justify-content-end add-btn mb-2 right">
        <a class="add_repe" href="#"><img src="./img/icone/add-btn.svg" alt=""></a>
    </div>
    <div class="col-12 add-btn search-area">
        <input class="search" placeholder="search" type="text" class="search" name="search" data-view="#backoffice">
        <div class="">
            <a class="rm-search-area" href="#"><img class="mr-0 mt-5 rm-search-area" src="./img/icone/rm-search-area.svg" alt=""></a>
        </div>
  </div>
</div>