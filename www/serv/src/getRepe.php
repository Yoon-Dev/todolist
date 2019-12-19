<?php
$manager = new ManagerTaches($conn);

$manager->InitRepe($jour);
$manager->RetardSimple($today);
if($state == 'true'){
    echo "vacance  !  vacance";
    $empty = true;
}else{
    $empty = false;
    $taches = $manager->getRepe();
}
?>