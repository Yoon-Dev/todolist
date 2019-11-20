<?php
session_start();
$adresse = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER["REQUEST_URI"];
$taches;
// instance qui serve au bon fonctionnement de l'application
$jour = date("D");
$today = date("Y-m-d");
$c_tache = "Taches";
$c_user = "User";
$c_manager = "ManagerTaches";
$conn = new PDO('mysql:host=serveur;dbname=db-name', 'username', 'top-secret');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // On émet une alerte à chaque fois qu'une requête a échouéconn
function chargerclass($classname){
    if($classname == "ManagerTaches" || $classname == "Taches"){
    require "./C/".$classname.".php";
    }else{
    require "./tache/C/".$classname.".php";    
    }
}

?>
