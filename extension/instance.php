<?php

session_start();
$adresse = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"];
$taches;
// instance qui serve au bon fonctionnement de l'application
$jour = date("D");
$today = date("Y-m-d");
$c_tache = "Taches";
$c_manager = "ManagerTaches";
$conn = new PDO('mysql:host=localhost;dbname=to_do_list', 'mo_high999', 'meepmeeP');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échouéconn
function chargerclass($classname){
    require "./C/".$classname.".php";
}
?>