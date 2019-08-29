<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./bootstrap-4.3.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/form.css">
    <script type="text/javascript" src="./js/plugin/jquery/jquery-3.4.0.js"></script>
    <script type="text/javascript" src="./js/display.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>TODOLIST</title>
</head>
<body>
    <div class="container-fluid text-center header-nav">
        <div class="row mt-2">
            <div class="col-12">
                <ul class="filtre_sencondaire">
                    <li>
                        <h4><a href="http://mo-todolist.webou.net/todolist/">TÂCHES</a></h4>
                    </li>
                    <li class="mx-2">
                        <h4><a class="lien-navigation-entente" href="#"><i class="fas fa-arrow-up"></i></a></h4>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="navigation_entete mb-4">
            <div class="row " style="min-width: 100%;">
                <div class="col-3 col-xs-nav margin-nav-res">
                    <li><a href="http://mo-todolist.webou.net/todolist/?types=<?="etude"?>">étude</a></li>
                </div>
                <div class="col-3 col-xs-nav margin-nav-res">
                    <li><a href="http://mo-todolist.webou.net/todolist/?types=<?="general"?>">général</a></li>
                </div>
                <div class="col-3 col-xs-nav margin-nav-res">
                    <li><a href="http://mo-todolist.webou.net/todolist/?types=<?="devellopement"?>">développement</a></li>
                </div>
                <div class="col-3 col-xs-nav margin-nav-res">
                    <li><a href="http://mo-todolist.webou.net/todolist/?repe=<?="true"?>">backoffice</a></li>
                </div>
            </div>
        </ul>
        <div class="row">
            <div class="col-12">
                <h1 class="today-logo">
                <a href="http://mo-todolist.webou.net/todolist/?date=<?="today"?>"><?php echo date("m-d"); ?></a></h1>
            </div>
        </div>
    </div>