<?php
$redirection = 0;
// connection bdd
require '.././fake_module/connection_bdd.php';
// test variable
if (isset($_POST['tache_nom']) && !empty($_POST['tache_nom']) && isset($_POST['tache_date']) && !empty($_POST['tache_date']) && isset($_POST['tache_type']) && !empty($_POST['tache_type'])) {
// enleve les ' des requete sql
require '.././fake_module/mise_en_place_sql.php';
// verifie si tache_detail est remplis
    if (isset($_POST['tache_detail']) && !empty($_POST['tache_detail'])) {
// remplissage de variable
        $tache_nom = $_POST['tache_nom'];
        $tache_detail = $_POST['tache_detail'];
        $tache_date = $_POST['tache_date'];
        $tache_type = $_POST['tache_type'];
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        // insertion SQL
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        $query = "INSERT into `tache`
    VALUE(NULL, '$tache_nom', '$tache_detail', '$tache_date', '$tache_type', 'bon')";
        $result = $conn->query($query);
        if (!$result) {
            die("Failedaccess: " . $conn->error);
            $redirection = 1;
        }
        $redirection = 2;
        $conn->close();

    } else {
        // remplissage de variable
        $tache_nom = $_POST['tache_nom'];
        $tache_date = $_POST['tache_date'];
        $tache_type = $_POST['tache_type'];
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        // insertion SQL
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
        $query = "INSERT into `tache`
    VALUE(NULL, '$tache_nom', NULL, '$tache_date', '$tache_type', 'bon')";
        $result = $conn->query($query);
        if (!$result) {
            die("Failedaccess: " . $conn->error);
            $redirection = 1;
        }
        $redirection = 2;
        $conn->close();
    }

}
// redirection
switch ($redirection) {
    case 0:
?>
    <div style="text-align: center; margin-top: 25%;">
        <p>ERREUR SUR LES VARIABLES $_POST(surement vide ou non declaré)</p>
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
// fin du SWITCH de redirection
}
?>