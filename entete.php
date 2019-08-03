
<!DOCTYPE html>
<?php
$adresse = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOLIST</title>
    <script src="./js/plugin/jquery/jquery-3.4.0.js"></script>
    <script src="./js/date.js"></script>

</head>

<body>
    <ul>
        <li><a href="http://localhost/todolist/?type=<?="etude" ?>">ETU</a></li>
        <li><a href="http://localhost/todolist/">LOGO</a></li>
        <li><a href="http://localhost/todolist/?type=<?="developpement" ?>">DEV</a></li>
        <li><a href="http://localhost/todolist/?day=<?="everyday" ?>">ALL</a></li>
    </ul>
    <a href="http://localhost/todolist/add.php">add</a>
</body>

</html>