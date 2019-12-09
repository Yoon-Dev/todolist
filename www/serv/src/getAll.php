<?php
session_start();
require './serv/utils/init.php';
chargerclass($c_tache);
chargerclass($c_manager);
$manager = new ManagerTaches($conn);

$manager->InitRepe($jour);
$manager->RetardSimple($today);
$state = $manager->getVacState();
if($state == 'true'){
    echo "vacance  !  vacance";
    $empty = true;
}else{
    $empty = false;
    $taches = $manager->getList($jour);
}
?>
