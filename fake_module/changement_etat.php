<?php
$peremption = false;
// recuperation en nombre du detail de la date limite
$test_etat = str_split($row['tache_date'],1);
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
$test_etat = $test_etat[0].$test_etat[1].$test_etat[2].$test_etat[3].$test_etat[5].$test_etat[6].$test_etat[8].$test_etat[9];
$test_etat = intval($test_etat);

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// recuperation en nombre du detail de la date du jour
$date_aujourdhui = date("Y-m-d");
$date_aujourdhui = str_split($date_aujourdhui,1);

$date_aujourdhui = $date_aujourdhui[0].$date_aujourdhui[1].$date_aujourdhui[2].$date_aujourdhui[3].$date_aujourdhui[5].$date_aujourdhui[6].$date_aujourdhui[8].$date_aujourdhui[9];
$date_aujourdhui = intval($date_aujourdhui);


if($test_etat < $date_aujourdhui){
    $tache_id = $row['tache_id'];
    $query = "UPDATE tache SET tache_etat = 'mauvais' WHERE tache_id = '$tache_id'";
            $result = $conn->query($query);
            if (!$result) {
                die($conn->error);
            }
}

?>