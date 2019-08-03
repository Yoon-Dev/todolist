<?php
$query = "SELECT * FROM `tache` ORDER by RAND()";
$result = $conn->query($query);
if (!$result) {
    die($conn->error);
}

$rows = $result->num_rows;
