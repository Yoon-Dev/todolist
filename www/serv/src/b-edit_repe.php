<?php
require '../utils/init.php';
chargerclass($c_tache, "../C/");
chargerclass($c_manager, "../C/");

$id = intval($_GET['id']);
$nom_repe = strval($_GET['nom_repe']);
$detail_repe = strval($_GET['detail_repe']);
$repe_jour = strval($_GET['repe_jour']);
$type_repe = strval($_GET['type_repe']);

$manager = new ManagerTaches($conn);

$tache = new Taches(['id' => $id, 'nom' => $nom_repe, 'detail' => $detail_repe, 'repe_jour' => $repe_jour, 'types' => $type_repe]);
$manager->editRepe($tache);
