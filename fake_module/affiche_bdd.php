<?php
$date = date("Y-m-d");
echo $date;

$query = "SELECT * FROM `tache` WHERE tache_date = '$date' or tache_etat = 'mauvais' ORDER by RAND()";
$result = $conn->query($query);
if (!$result) {
    die($conn->error);
}

$rows = $result->num_rows;



    