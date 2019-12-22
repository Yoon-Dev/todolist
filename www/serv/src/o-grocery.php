<?php
chargerclass("Cooking", "./serv/C/");
chargerclass("ManagerCooking", "./serv/C/");

$manager = new ManagerCooking($conn);

$recettes = $manager->getAll();


