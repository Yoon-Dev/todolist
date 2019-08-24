<!DOCTYPE html>
<?php
$adresse = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
// echo $adresse;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <script src="./js/plugin/jquery/jquery-3.4.0.js"></script>
    <script src="./js/display.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>TODOLIST</title>
</head>

<body>
    <div class="container-fluid text-center header-nav">
    <div class="row mt-2">
            <div class="col-12">
                <ul class="filtre_sencondaire">
                    <li><h4><a href="http://localhost/todolist/">ALL</a></h4></li>
                    <li class="mx-2"><h4><a class="lien-navigation-entente" href="#"><i class="fas fa-arrow-up"></i></a></h4></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm6 my-2">
                <nav class="cl-effect-7">
                    <ul class="navigation_entete">
                        <li><a href="http://localhost/todolist/?types=<?="etude" ?>">étude</a></li>
                        <li><a href="http://localhost/todolist/?types=<?="general" ?>">général</a></li>
                        <li><a href="http://localhost/todolist/?types=<?="devellopement" ?>">développement</a></li>
                        <li><a href="http://localhost/todolist/?repe=<?="true" ?>">backoffice</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h1 class="today-logo"><a href="http://localhost/todolist/?date=<?="today" ?>"><?php echo date("m-d"); ?></a></h1>
            </div>
        </div>
    </div>