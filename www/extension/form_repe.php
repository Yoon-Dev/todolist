<div class="container text-center marg-contain" id="form_repe">
    <div class="row">
        <div class="col-12">
            <!-- CHOIX du formulaire -->
            <fieldset>
                <br>
                <!-- lien de choix de formulaire -->
                <a class="lien-select-form" href="#repe" id="lien_tache_repe">add</a>
            </fieldset>
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
                                <label for="detail_repe"><span>Detail</span><br><textarea name="detail_repe" class="input-form textarea-field" id=""></textarea></label>
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
</div>
<?php
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // insertion TACHE REPE
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
if(isset($_POST['tache_repe']) && isset($_POST['nom_repe']) && isset($_POST['detail_repe'])  && isset($_POST['types_repe']) && isset($_POST['repe_jour'])){

    if(!empty($_POST['nom_repe'])){

    $tache = new Taches(['nom' => $_POST['nom_repe'], 'detail' => $_POST['detail_repe'], 'types' => $_POST['types_repe'], 'repe_jour' => $_POST['repe_jour']]);
    }

    $manager->addTachesrepe($tache);
?>
<script>
document.location.href = "./backoffice.php"
</script>
<?php
}
?>