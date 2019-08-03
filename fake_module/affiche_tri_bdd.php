<?php
if (isset($_GET['type']) && !empty($_GET['type'])) {
    $gettype = $_GET['type'];
$query = "SELECT * FROM `tache` WHERE tache_type = '$gettype' ORDER by RAND()";
$result = $conn->query($query);
if (!$result) {
    die($conn->error);
}

$rows = $result->num_rows;
}

    