<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container text-center">
    <div class="col-12">
<!-- CHOIX du formulaire -->
            <fieldset>
                <legend style="display: contents;">Ajouter une tâche</legend>
                <br>
<!-- lien de choix de formulaire -->
                <a href="#tache" id="lien_tache_simple">tache</a>
                <a href="#repe" id="lien_tache_repe">repe</a>

            </fieldset>
    </div>
<!-- TACHE SIMPLE -->
<div class="col-12">
    <div id="tache_simple">
        <form action="" method="post">
            <fieldset>
                <legend style="display: contents;">Ajouter une tache simple</legend><br>
                    <label for="nom"><span>Nom</span><span class="required">*</span><input type="text" name="nom" id=""></label>
                    <label for="detail"><span>Detail</span><input type="text" name="detail" id=""></label>
                    <label for="limite"><span>Limite</span><span class="required">*</span><input type="date" name="limite" id="" value="<?php echo date("Y-m-d"); ?>"></label>
                    <label for="types"><span>Type</span><span class="required">*</span><select name="types" id="">
                        <option value="etude">ETUDE</option>
                        <option value="general">GENERAL</option>
                        <option value="devellopement">DEVELLOPEMENT</option>
                    </select></label>
                    <label for="tache_simple"><input type="submit" value="submit" name="tache_simple"></label>
            </fieldset>
        </form>
    </div>
</div>
<!-- TACHE REPE -->
<div class="col-12">
    <div id="tache_repe">  
        <form action="" method="post">
            <fieldset>
                <legend style="display: contents;">Ajouter une tache répétitive</legend><br>
                    <label for="nom_repe"><span>Nom</span><span class="required">*</span><input type="text" name="nom_repe" id=""></label>
                    <label for="detail_repe"><span>Detail</span><input type="text" name="detail_repe" id=""></label>
                    <label for="types_repe"><span>Type</span><span class="required">*</span><select name="types_repe" id="">
                        <option value="etude">ETUDE</option>
                        <option value="general">GENERAL</option>
                        <option value="devellopement">DEVELLOPEMENT</option>
                    </select></label>
                    <label repe_jour"><span>Jour</span><span class="required">*</span><select name="repe_jour" id="">
                        <option value="Mon">Mon</option>
                        <option value="Tue">Tue</option>
                        <option value="Wed">Wed</option>
                        <option value="Thu">Thu</option>
                        <option value="Fri">Fri</option>
                        <option value="Sat">Sat</option>
                        <option value="Sun">Sun</option>
                    </select></label>
                    <label for="tache_repe"><input type="submit" name="tache_repe" value="submit_repe"></label>
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
</body>
</html>