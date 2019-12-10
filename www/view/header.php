<!DOCTYPE html>
<html lang="en" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">  
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <link rel="manifest" href="/favicon/site.webmanifest">
    <link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <!-- tmp -->
    <link rel="stylesheet" href="./css/tmp.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/extension.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    
<title>TODOLIST</title>
</head>

<script>
function hideLoader(){
    document.getElementById("loader").style.display = "none";
    document.getElementById("content").style.display = "block";
}
</script>


<body onload="hideLoader()">
<img id="loader" src="./SVG-Loaders-master/svg-loaders/puff.svg" alt="loader">
<div id="content" style ="display: none;">
    <div class="container-fluid text-center header-nav">
        <div class="row mt-2">
            <div class="col-12">
                <ul class="filtre_sencondaire">
                    <li>
                        <h4><a class="home" href="#">TÂCHES</a></h4>
                    </li>
                    <li class="mx-2">
                        <h4><a class="lien-navigation-entente" href="#"><i class="fas fa-arrow-up"></i></a></h4>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="navigation_entete mb-4">
            <div class="ml-0 row justify-content-md-center" style="min-width: 100%;">
                <div class="col-4  margin-nav-res">
                    <li><a class="filter" data-filtre="etude" href="#">etu</a></li>
                </div>
                <div class="col-4 margin-nav-res">
                    <li><a class="filter" data-filtre="general" href="#">général</a></li>
                </div>
                <div class="col-4  margin-nav-res">
                    <li><a class="filter" data-filtre="developpement"href="#">dev</a></li>
                </div>
            </div>
        </ul>
        <div class="row">
            <div class="col-12">
                <h1 class="today-logo">
                <a class="istoday" href="#"><?php echo date("m-d"); ?></a></h1>
            </div>
        </div>
    </div>