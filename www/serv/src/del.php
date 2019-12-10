<?php
require '../utils/init.php';
chargerclass($c_tache, "../C/");
chargerclass($c_manager, "../C/");

$id = intval($_GET['id']);
$is_simple = strval($_GET['is_simple']);

$manager = new ManagerTaches($conn);

if($is_simple === "1" ){
    $manager->del($id);
}else{
    $manager->delRepe($id);
}

