<?php
require './serv/utils/init.php';
chargerclass($c_tache, "./serv/C/");
chargerclass($c_manager, "./serv/C/");
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
