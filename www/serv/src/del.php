<?php
require '../utils/init.php';
chargerclass($c_tache, "../C/");
chargerclass($c_manager, "../C/");

$id = intval($_GET['id']);
$is_simple = strval($_GET['is_simple']);
$backoffice = strval($_GET['backoffice']);

$manager = new ManagerTaches($conn);

if($is_simple === "1" && $backoffice === "non"){
    $manager->del($id);
}
if($is_simple != "1" &&$backoffice === "non"){
    $manager->delRepe($id);
}else{
    $manager->supRepe($id);
}

