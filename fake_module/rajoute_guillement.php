<?php
// RAJOUTE les ' des variable pour les afficher
$array = array("_nom","_detail");
for($i = 0; $i<2; $i++){
    $var = $row['tache' . $array[$i]];
    $var = str_split($var, 1);
    foreach ($var as &$value) {
        if($value == "`"){
            $value = "'";
        }
    }
    $var = implode($var);
    $row['tache' . $array[$i]] = $var;
    }
?>