<?php
$redirection = 0;
require '.././fake_module/connection_bdd.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $getid = $_GET['id'];
    $query = "DELETE from `tache` WHERE tache_id = '$getid'";
    $result = $conn->query($query);
    if (!$result) {
        die("Failedaccess: " . $conn->error);
        $redirection = 1;
    }
    $redirection = 2;
    $conn->close();
}
// redirection
switch ($redirection) {
    case 0:
    ?>
        <div style="text-align: center; margin-top: 25%;">
            <p>ERREUR SUR LA VARIABLES $_GET(surement vide ou non declaré)</p>
            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
        </div>
    <?php
        break;
    case 1:
    ?>
            <div style="text-align: center; margin-top: 25%;">
                <p>ERREUR LORS de l'INSERTION SQL</p>
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Retour</a>
            </div>
    <?php
        break;
    case 2:
        header("Status: 301 Moved Permanently", false, 301);
        header("Location: http://localhost/todolist/");
        exit;
        break;
// fin du SWITCH
}
?>
