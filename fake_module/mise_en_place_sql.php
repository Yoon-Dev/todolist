<?php
// enleve les ' des variable pour les requetes sql
$array = array("_nom","_detail", "_date");
    for($i = 0; $i<3; $i++){
    $var = $_POST['tache' . $array[$i]];
    $var = str_split($var, 1);
    foreach ($var as &$value) {
        if($value == "'"){
            $value = "`";
        }
    }
    $var = implode($var);
    $_POST['tache' . $array[$i]] = $var;
    }

?>