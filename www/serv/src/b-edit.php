<?php
require '../utils/init.php';
chargerclass($c_tache, "../C/");
chargerclass($c_manager, "../C/");

$id = intval($_GET['id']);
$nom = strval($_GET['nom']);
$detail = strval($_GET['detail']);
$limite = strval($_GET['limite']);
$type = strval($_GET['type']);

$manager = new ManagerTaches($conn);

$tache = new Taches(['id' => $id, 'nom' => $nom, 'detail' => $detail, 'limite' => $limite, 'types' => $type]);
$manager->edit($tache);