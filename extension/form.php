
    <div class="container text-center marg-contain">
        <div class="col-12">
            <!-- CHOIX du formulaire -->
            <fieldset>
                <br>
                <!-- lien de choix de formulaire -->
                <a class="lien-select-form" href="#tache" id="lien_tache_simple">tache</a>
                <a class="lien-select-form" href="#repe" id="lien_tache_repe">repe</a>

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
                                <label for="detail"><span>Detail</span><br><input class="input-form input-field" type="text" name="detail" id="" alt="detail"></label>
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
        <!-- TACHE REPE -->
        <div class="col-12 form-style">
            <div id="tache_repe">
                <form action="" method="post">
                    <fieldset>
                        <div class="row">
                            <div class="col-xl-3 text-center">
                                <label for="nom_repe"><span>Nom</span><span class="required">*</span><br><input type="text" class="input-form input-field" name="nom_repe" id=""></label>
                            </div>
                            <div class="col-xl-3 text-center">
                                <label for="detail_repe"><span>Detail</span><br><input type="text" name="detail_repe" class="input-form input-field" id=""></label>
                            </div>
                            <div class="col-xl-3 text-center">
                                <label for="types_repe"><span>Type</span><span class="required">*</span><br>
                                    <select class="input-form select-field" name="types_repe" id="">
                                        <option value="etude">ETUDE</option>
                                        <option value="general">GENERAL</option>
                                        <option value="devellopement">DEVELLOPEMENT</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-xl-3 text-center">
                                <label repe_jour"><span>Jour</span><span class="required">*</span><br>
                                    <select class="input-form select-field" name="repe_jour" id="">
                                        <option value="Mon">Mon</option>
                                        <option value="Tue">Tue</option>
                                        <option value="Wed">Wed</option>
                                        <option value="Thu">Thu</option>
                                        <option value="Fri">Fri</option>
                                        <option value="Sat">Sat</option>
                                        <option value="Sun">Sun</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12 text-center">
                                <label for="tache_repe"><input type="submit" name="tache_repe" value="submit"></label>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
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
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // insertion TACHE REPE
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
if(isset($_POST['tache_repe']) && isset($_POST['nom_repe']) && isset($_POST['detail_repe'])  && isset($_POST['types_repe']) && isset($_POST['repe_jour'])){

    if(!empty($_POST['nom_repe'])){

    $tache = new Taches(['nom' => $_POST['nom_repe'], 'detail' => $_POST['detail_repe'], 'types' => $_POST['types_repe'], 'repe_jour' => $_POST['repe_jour']]);
    }

    $manager->addTachesrepe($tache);
}
?>