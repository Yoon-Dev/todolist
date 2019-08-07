<!DOCTYPE html>
<?php
$adresse = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
echo $adresse;
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>TODOLIST</title>
</head>

<body>
    <div class="container text-center">
        <div class="col-12 ">
            <a href="http://localhost/todolist/">LOGO</a>
        </div>
        <div class="col-12 my-2">
            <ul class="navigation_entete">
                <li><a href="http://localhost/todolist/?types=<?="etude" ?>">ETUDE</a></li>
                <li><a href="http://localhost/todolist/?types=<?="general" ?>">GENERAL</a></li>
                <li><a href="http://localhost/todolist/?types=<?="devellopement" ?>">DEVELLOPEMENT</a></li>
            </ul>
        </div>
        <div class="col-12">
        <ul class="filtre_sencondaire">
                <li><a href="http://localhost/todolist/?date=<?="today" ?>">Today</a></li>
                <li><a href="http://localhost/todolist/?repe=<?="true" ?>">BACKOFFICE</a></li>
            </ul>
        </div>
        <div class="col-12">
            <h1><?php echo date("m-d"); ?></h1>
        </div>
        


        
    </div>
</body>

</html>