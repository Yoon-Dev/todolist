<?php
require '../utils/init.php';
chargerclass($c_tache, "../C/");
chargerclass($c_manager, "../C/");

$nom_repe = strval($_GET['nom_repe']);
$detail_repe = strval($_GET['detail_repe']);
$type_repe = strval($_GET['type_repe']);
$repe_jour = strval($_GET['repe_jour']);

$manager = new ManagerTaches($conn);

$tache = new Taches(['nom' => $nom_repe, 'detail' => $detail_repe, 'repe_jour' => $repe_jour, 'types' => $type_repe]);
$manager->addRepe($tache);
