
    <div class="text-center marg-contain">
        <div class="col-12">
            <!-- CHOIX du formulaire -->
            <fieldset>
                <br>
                <!-- lien de choix de formulaire -->
                <a class="lien-select-form" href="#tache" id="lien_tache_simple">tache</a>
            </fieldset>
        </div>
        <!-- TACHE SIMPLE -->
        <div class="col-12 form-style">
            <div id="tache_simple">
                <form action="" method="post">
                    <fieldset>
                        <div class="row">
                            <div class="col-xl-3 text-center">
                                <label for="nom"><span>Nom</span><span class="required">*</span><br><input class="input-form input-field" type="text" name="nom" alt="name" id=""></label>
                            </div>
                            <div class="col-xl-3 text-center">
                                <label for="detail"><span>Detail</span><br><textarea class="input-form textarea-field" name="detail" id="" alt="detail"></textarea></label>
                            </div>
                            <div class="col-xl-3 text-center">
                                <label for="limite"><span>Limite</span><span class="required">*</span><br><input class="input-form" type="date" name="limite" id="" value="<?php echo date("Y-m-d"); ?>" alt="date"></label>
                            </div>
                            <div class="col-xl-3 text-center">
                                <label for="types"><span>Type</span><span class="required">*</span><br>
                                    <select class="input-form select-field" name="types" id="" alt="type">
                                        <option value="etude">ETUDE</option>
                                        <option value="general">GENERAL</option>
                                        <option value="devellopement">DEVELLOPEMENT</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-xl-12 text-center">
                                <label for="tache_simple"><input type="submit" value="submit" name="tache_simple" alt="sub"></label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    <?php
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // insertion TACHE SIMPLE
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// echo "nom : ".$_POST['nom']." detail : ".$_POST['detail']." limite : ".$_POST['limite']." types : ".$_POST['types']." sub : ";
// back ajouter une tache
if(isset($_POST['tache_simple']) && isset($_POST['nom']) && isset($_POST['detail']) && isset($_POST['limite']) && isset($_POST['types'])){

    if(!empty($_POST['nom'])){

    $tache = new Taches(['nom' => $_POST['nom'], 'detail' => $_POST['detail'], 'limite' => $_POST['limite'], 'types' => $_POST['types']]);
    }

    $manager->addTachesimple($tache);
}
?>