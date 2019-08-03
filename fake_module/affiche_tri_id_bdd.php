<?php

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $getid = $_GET['id'];
$query = "SELECT * FROM `tache` WHERE tache_id = '$getid'";
$result = $conn->query($query);
if (!$result) {
    die($conn->error);
}

$rows = $result->num_rows;
}


    