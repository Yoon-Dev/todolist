<div class="container text-center">

    <!-- °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° -->
    <!-- FORMULAIRE EDIT TACHE SIMPLE -->
    <!-- °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° -->
    <?php 
 if(!empty($t_edit)){
 ?>
    <div class="col-12 form-style">
        <form action="" method="post">
            <fieldset>
                <legend class="ml-3">Edit la tache <?php echo$_GET['edit']; ?></legend><br>
                <div class="row">
                    <div class="col-xl-3 text-center">
                        <label for="nom"><span>Nom</span><span class="required">*</span><br><input type="text"
                                class="input-form input-field" name="nom" id=""
                                value="<?php echo $t_edit->nom(); ?>"></label>
                    </div>
                    <div class="col-xl-3 text-center">
                        <label for="detail"><span>Detail</span><br><input type="text" class="input-form input-field"
                                name="detail" id="" value="<?php echo $t_edit->detail(); ?>"></label>
                    </div>
                    <div class="col-xl-3 text-center">
                        <label for="limite"><span>Limite</span><span class="required">*</span><br><input type="date"
                                name="limite" id="" value="<?php echo $t_edit->limite(); ?>"></label>
                    </div>
                    <div class="col-xl-3 text-center">
                        <label for="types"><span>Type</span><span class="required">*</span><br><select name="types"
                                class="input-form select-field" id="">
                                <?php
switch (true){
case $t_edit->types() == "etude":
?>
                                <option value="etude">ETUDE</option>
                                <option value="general">GENERAL</option>
                                <option value="devellopement">DEVELLOPEMENT</option>
                                <?php
break;
case $t_edit->types() == "general":
?>
                                <option value="general">GENERAL</option>
                                <option value="etude">ETUDE</option>
                                <option value="devellopement">DEVELLOPEMENT</option>
                                <?php
break;
case $t_edit->types() == "devellopement":
?>
                                <option value="devellopement">DEVELLOPEMENT</option>
                                <option value="general">GENERAL</option>
                                <option value="etude">ETUDE</option>
                                <?php
break;
// fin SWITCH
} 
?>
                            </select></label>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-12 text-center">
                        <label for="tache_edit"><input type="submit" value="submit" name="tache_edit"></label>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <!-- fin CONTAINER -->
</div>
<!-- °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° -->
<!-- FORMULAIRE EDIT REPE -->
<!-- °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°° -->
<?php
// fin form TACHE EDIT
 }
 if(!empty($r_edit)){
?>
<div class="col-12 form-style">
    <form action="" method="post">
        <fieldset>
            <legend class="ml-3">Ajouter une tache répétitive</legend><br>
            <div class="row">
                <div class="col-xl-3 text-center">
                    <label for="nom_repe"><span>Nom</span><span class="required">*</span><br><input type="text"
                            name="nom_repe" class="input-form input-field" id="" value="<?php echo $r_edit->nom();?>"></label>
                </div>
                <div class="col-xl-3 text-center">
                    <label for="detail_repe"><span>Detail</span><br><input type="text" name="detail_repe" class="input-form input-field" id=""
                            value="<?php echo $r_edit->detail();?>"></label>
                </div>
                <div class="col-xl-3 text-center">
                    <label for="types_repe"><span>Type</span><span class="required">*</span><br><select name="types_repe"
                            id="" class="input-form select-field" >
                            <?php
switch (true){
case $r_edit->types() == "etude":
?>
                            <option value="etude">ETUDE</option>
                            <option value="general">GENERAL</option>
                            <option value="devellopement">DEVELLOPEMENT</option>
                            <?php
break;
case $r_edit->types() == "general":
?>
                            <option value="general">GENERAL</option>
                            <option value="etude">ETUDE</option>
                            <option value="devellopement">DEVELLOPEMENT</option>
                            <?php
break;
case $r_edit->types() == "devellopement":
?>
                            <option value="devellopement">DEVELLOPEMENT</option>
                            <option value="general">GENERAL</option>
                            <option value="etude">ETUDE</option>
                            <?php
break;
// fin SWITCH
}
?>
                        </select></label>
                        </div>
                <div class="col-xl-3 text-center">
                    <label repe_jour"><span>Jour</span><span class="required">*</span><br>
                        <select name="repe_jour" id="" class="input-form select-field">
                            <?php
switch (true){
case $r_edit->repe_jour() == "Mon":
?>
                            <option value="Mon">Mon</option>
                            <option value="Tue">Tue</option>
                            <option value="Wed">Wed</option>
                            <option value="Thu">Thu</option>
                            <option value="Fri">Fri</option>
                            <option value="Sat">Sat</option>
                            <option value="Sun">Sun</option>
                            <?php
break;
case $r_edit->repe_jour() == "Tue":
?>
                            <option value="Tue">Tue</option>
                            <option value="Mon">Mon</option>
                            <option value="Wed">Wed</option>
                            <option value="Thu">Thu</option>
                            <option value="Fri">Fri</option>
                            <option value="Sat">Sat</option>
                            <option value="Sun">Sun</option>
                            <?php
break;
case $r_edit->repe_jour() == "Wed":
?>
                            <option value="Wed">Wed</option>
                            <option value="Mon">Mon</option>
                            <option value="Tue">Tue</option>
                            <option value="Thu">Thu</option>
                            <option value="Fri">Fri</option>
                            <option value="Sat">Sat</option>
                            <option value="Sun">Sun</option>
                            <?php
break;
case $r_edit->repe_jour() == "Thu":
?>
                            <option value="Thu">Thu</option>
                            <option value="Mon">Mon</option>
                            <option value="Tue">Tue</option>
                            <option value="Wed">Wed</option>
                            <option value="Fri">Fri</option>
                            <option value="Sat">Sat</option>
                            <option value="Sun">Sun</option>
                            <?php
break;
case $r_edit->repe_jour() == "Fri":
?>
                            <option value="Fri">Fri</option>
                            <option value="Mon">Mon</option>
                            <option value="Tue">Tue</option>
                            <option value="Wed">Wed</option>
                            <option value="Thu">Thu</option>
                            <option value="Sat">Sat</option>
                            <option value="Sun">Sun</option>
                            <?php
break;
case $r_edit->repe_jour() == "Sat":
?>
                            <option value="Sat">Sat</option>
                            <option value="Mon">Mon</option>
                            <option value="Tue">Tue</option>
                            <option value="Wed">Wed</option>
                            <option value="Thu">Thu</option>
                            <option value="Fri">Fri</option>
                            <option value="Sun">Sun</option>
                            <?php
break;
case $r_edit->repe_jour() == "Sun":
?>
                            <option value="Sun">Sun</option>
                            <option value="Mon">Mon</option>
                            <option value="Tue">Tue</option>
                            <option value="Wed">Wed</option>
                            <option value="Thu">Thu</option>
                            <option value="Fri">Fri</option>
                            <option value="Sat">Sat</option>
                            <?php
break;
// fin SWITCH
}
?>
                        </select></label>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <label for="repe_edit"><input type="submit" name="repe_edit" value="submit_repe"></label>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</div>
<?php
// fin form REPE EDIT
}
?>

<!--INSERTION SQL UPDATE §§TACHE SIMPLE§§-->
<?php
// echo "nom : ".$_POST['nom']." detail : ".$_POST['detail']." limite : ".$_POST['limite']." types : ".$_POST['types']." sub : ";
// back UPDATE une tache
if(isset($_POST['tache_edit']) && isset($_POST['nom']) && isset($_POST['detail']) && isset($_POST['limite']) && isset($_POST['types'])){
  echo "je suis dans le 1er IF";
    if(!empty($_POST['nom'])){
        echo "je suis dans le 2eme IF";
        $edit = new Taches(['id' => $t_edit->id(), 'nom' => $_POST['nom'], 'detail' => $_POST['detail'], 'limite' => $_POST['limite'], 'types' => $_POST['types']]);
        $manager->editTachesimple($edit);
        echo $redirection;
        // redirection
        // °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        switch($redirection){
            case "logo":
            header("Status: 301 Moved Permanently", false, 301);
            header("Location: http://localhost/todolist/");
                exit(); 
            case "etude":
                header("Status: 301 Moved Permanently", false, 301);
                header("Location: http://localhost/todolist/?types=etude");
                    exit();
            case "general":
                header("Status: 301 Moved Permanently", false, 301);
                header("Location: http://localhost/todolist/?types=general");
                    exit();  
            case "devellopement":
                header("Status: 301 Moved Permanently", false, 301);
                header("Location: http://localhost/todolist/?types=devellopement");
                    exit(); 
            case "date":
                header("Status: 301 Moved Permanently", false, 301);
                header("Location: http://localhost/todolist/?date=today ");
                    exit();
// fin SWITCH redirection
}  
}           
}
?>
<!--INSERTION SQL UPDATE §§REPE§§-->
<?php
// echo "nom : ".$_POST['nom_repe']." detail : ".$_POST['detail_repe']." jour : ".$_POST['repe_jour']." types : ".$_POST['types_repe']." sub : ";
// back UPDATE une repe
if(isset($_POST['repe_edit']) && isset($_POST['nom_repe']) && isset($_POST['detail_repe']) && isset($_POST['repe_jour']) && isset($_POST['types_repe'])){
    // echo "je suis dans le 1er IF";
    if(!empty($_POST['nom_repe'])){
        // echo "je suis dans le 2eme IF";
        $edit = new Taches(['id' => $r_edit->id(), 'nom' => $_POST['nom_repe'], 'detail' => $_POST['detail_repe'], 'repe_jour' => $_POST['repe_jour'], 'types' => $_POST['types_repe']]);
        $manager->editTachesimple($edit);
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°  
    // redirection vers BACKOFFICE
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°  
         header("Status: 301 Moved Permanently", false, 301);
         header("Location:http://localhost/todolist/?repe=true");
             exit();
    }
}