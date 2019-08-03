<?php
// var redirection
$redirection = 0;

// connection bdd
require '.././fake_module/connection_bdd.php';
// test variable id
if (isset($_POST['tache_id']) && !empty($_POST['tache_id'])) {
    $tache_id = $_POST['tache_id'];
// test des autres var

    if (isset($_POST['tache_nom']) && !empty($_POST['tache_nom']) || isset($_POST['tache_detail']) && !empty($_POST['tache_detail']) || isset($_POST['tache_date']) && !empty($_POST['tache_date'])) {
  
        // enleve les ' des variables
        require '.././fake_module/mise_en_place_sql.php';
        // selection BDD de la tache a edit
        $query = "SELECT * FROM `tache` WHERE tache_id = '$tache_id'";
        $result = $conn->query($query);
        if (!$result) {
            die($conn->error);
        }
        $row = $result->fetch_array(MYSQLI_ASSOC);
        // debut des UPDATE
        // NOM
        switch (true) {
        case $_POST['tache_nom'] != $row['tache_nom']:
            $tache_nom = $_POST['tache_nom'];
            // REQUETTE UPDATE
            $query = "UPDATE tache SET tache_nom = '$tache_nom' WHERE tache_id = '$tache_id'";
            $result = $conn->query($query);
            if (!$result) {
                die($conn->error);
                $redirection = 1;
            }
            $redirection = 2;
        // DETAIL
        case $_POST['tache_detail'] != $row['tache_detail']:
            $tache_detail = $_POST['tache_detail'];
            // REQUETTE UPDATE
            $query = "UPDATE tache SET tache_detail = '$tache_detail' WHERE tache_id = '$tache_id'";
            $result = $conn->query($query);
            if (!$result) {
                die($conn->error);
                $redirection = 1;
            }
            $redirection = 2;
        // DATE
        case $_POST['tache_date'] != $row['tache_date']:
            $tache_date = $_POST['tache_date'];
            // REQUETTE UPDATE
            $query = "UPDATE tache SET tache_date = '$tache_date' WHERE tache_id = '$tache_id'";
            $result = $conn->query($query);
            if (!$result) {
                die($conn->error);
                $redirection = 1;
            }
            $redirection = 2;
        // TYPE
        case $_POST['tache_type'] != $row['tache_type']:
            $tache_type = $_POST['tache_type'];
            // REQUETTE UPDATE
            $query = "UPDATE tache SET tache_type = '$tache_type' WHERE tache_id = '$tache_id'";
            $result = $conn->query($query);
            if (!$result) {
                die($conn->error);
                $redirection = 1;
            }
            $redirection = 2;

// fin du switch
        }
// fin test var
    }
// fin test IF id
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