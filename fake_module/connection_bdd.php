<?php
// CONNECTIO BDD
$conn = new mysqli('localhost', 'mo_high999', 'meepmeeP', 'to_do_list');
if ($conn->connect_error) {
    die($conn->connect_error);

}

?>