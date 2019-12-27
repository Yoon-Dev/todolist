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
    <link rel="stylesheet" href="./css/add-btn.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    
<title>TODOLIST</title>
</head>

<body data-master="list" id="body">
<div id="content" class="container-fluid">
    <div class="row">
        <div class="col-12 p-0 fixed-nav">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <a class="navbar-brand istoday" href="#"><h1 class="today-logo mb-0"><?php echo date("m-d"); ?></h1></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-state="on">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link home list" href="#">tâches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filtre="etude" href="#">etu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filtre="general" href="#">général</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-filtre="developpement"href="#">dev</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link backoffice" href="#">backoffice</a>
                    </li>
                    <!-- <li class="nav-item">
                        <input type="text" name="search" id="search" data-view="#list">
                    </li> -->
                    </ul>
                </div>
            </nav>
        </div>
    </div>
