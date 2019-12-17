<?php
class ManagerTaches{
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // caratéristique
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected $_conn;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // CONSTRUCT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function __construct($conn){$this->setDb($conn);}    
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// fonctionnalité
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    public function RetardSimple($today)
    {
    // Marque les tache simple en retard
        $today = str_split ($today, 1);
        $today = $today[0].$today[1].$today[2].$today[3].$today[5].$today[6].$today[8].$today[9];
        $today = intval($today);
        $q = $this->_conn->prepare('SELECT `id`, `limite` FROM `tache` WHERE `repe_jour` IS NULL');
        $q->execute();
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
        $test = $donnees['limite'];
        $test = $test[0].$test[1].$test[2].$test[3].$test[5].$test[6].$test[8].$test[9];
        $test = intval($test);
        if($today > $test){
            $where = $donnees['id'];
            $query = $this->_conn->prepare('UPDATE `tache` SET etat = "mauvais" WHERE id = :id');
            $query->execute([':id' => $where]);
        }else{
            $where = $donnees['id'];
            $query = $this->_conn->prepare('UPDATE `tache` SET etat = "bon" WHERE id = :id');
            $query->execute([':id' => $where]);   
        }
    }
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function InitRepe($jour)
    {
    // Initialise les REPE qui ne sont pas en retard
        $q = $this->_conn->prepare('UPDATE `tache` SET etat_repe = 1 WHERE repe_jour != :jour AND etat_repe = 2 AND repe_confirme = 1');
        $q->execute([':jour' => $jour]);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function add(Taches $tache){
        // ajoute une tache simple dans la bdd
        $q = $this->_conn->prepare('INSERT INTO tache(nom, detail, limite, types, etat, etat_repe, repe_jour, repe_confirme) VALUES(:nom, :detail, :limite, :types, "bon", NULL, NULL, NULL)');
        $q->bindValue(':nom', $tache->nom());
        $q->bindValue(':detail', $tache->detail());
        $q->bindValue(':limite', $tache->u_limite());
        $q->bindValue(':types', $tache->types());
        $q->execute();
        
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function addRepe(Taches $tache){
        // ajoute une tache REPE dans la bdd
        $q = $this->_conn->prepare('INSERT INTO tache(nom, detail, limite, types, etat, etat_repe, repe_jour, repe_confirme) VALUES(:nom, :detail, NULL, :types, "bon", 1, :repe_jour, 1)');
        $q->bindValue(':nom', $tache->nom());
        $q->bindValue(':detail', $tache->detail());
        $q->bindValue(':types', $tache->types());
        $q->bindValue(':repe_jour', $tache->repe_jour());
        
        $q->execute();
        
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function edit(Taches $edit){
// EDIT une tache simple
        $q = $this->_conn->prepare('UPDATE `tache`SET nom = :nom, detail = :detail, limite = :limite, types = :types WHERE id = :id');
        $q->bindValue(':id', $edit->id());
        $q->bindValue(':nom', $edit->nom());
        $q->bindValue(':detail', $edit->detail());
        $q->bindValue(':limite', $edit->u_limite());
        $q->bindValue(':types', $edit->types());
        $q->execute();
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function editRepe(Taches $edit){
        // EDIT une REPE
        $q = $this->_conn->prepare('UPDATE `tache`SET nom = :nom, detail = :detail, repe_jour = :repe_jour, types = :types WHERE id = :id');
        $q->bindValue(':id', $edit->id());
        $q->bindValue(':nom', $edit->nom());
        $q->bindValue(':detail', $edit->detail());
        $q->bindValue(':repe_jour', $edit->repe_jour());
        $q->bindValue(':types', $edit->types());
        $q->execute();    
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°

    public function del(int $id)
    {
    // supprime une tache simple
        $q = $this->_conn->prepare('DELETE FROM `tache` WHERE id = :id');
        $q->execute(['id' => $id]);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°

    public function delRepe(int $id)
    {
    // Supprime pour de faut une tache repe
        $q = $this->_conn->prepare('UPDATE `tache` SET etat_repe = 2 WHERE id = :id');
        $q->execute(['id' => $id]);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // Supprime !!VRAIMENT!! une REPE
    public function supRepe($repe_sup){
        $q = $this->_conn->prepare('DELETE FROM `tache` WHERE id = :id');
        $q->execute(['id' => $repe_sup]);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getList($jour){
        // recupere toute les taches dans la bdd
        // si elle sont de type "normal" ou si repe_jour est egal a jour
    $taches = [];

    $q = $this->_conn->prepare('SELECT * FROM `tache` WHERE repe_jour is null OR repe_jour = :jour AND etat_repe = 1 OR repe_confirme = 2');
    $q->execute([':jour' => $jour]);
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {

      $taches[] = new Taches($donnees);

    }

    return $taches;

    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getTypes($gettype){
    // affiche les tache selon leur type
    // n'affiche pas les repe
    $taches = [];
    
    $q = $this->_conn->prepare('SELECT * FROM `tache` WHERE repe_jour is null AND types = :gettype');
    

    $q->bindValue(':gettype', $gettype, PDO::PARAM_STR);
    $q->execute();
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $taches[] = new Taches($donnees);
    }
    
    return $taches;
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getRepe(){
        // recupere toute les repe dans la bdd
        // n'affiche pas les taches "normals"
    $taches = [];

    $q = $this->_conn->prepare('SELECT * FROM `tache` WHERE limite is null');
    $q->execute();
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
    $taches[] = new Taches($donnees);
    }

    return $taches;
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getToday($jour, $today){
        // recupere toute les taches dans la bdd
        // si elle sont de type "normal" ou si repe_jour est egal a jour
    $taches = [];

    $q = $this->_conn->prepare('SELECT * FROM `tache` WHERE repe_jour = :jour AND etat_repe = 1 OR limite = :today OR etat = "mauvais"');
    $q->bindValue(':jour', $jour, PDO::PARAM_STR);
    $q->bindValue(':today', $today, PDO::PARAM_STR);
    $q->execute();
    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
    $taches[] = new Taches($donnees);
    }

    return $taches;
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
//  selectionne une ligne de la bdd en fonction d'un id 
    public function getId($edit){
        $q = $this->_conn->prepare('SELECT * FROM `tache` WHERE id = :id');
        $q->execute(['id' => $edit]);
        $data = $q->fetch(PDO::FETCH_ASSOC);

        $tache_e = new Taches($data);
        return $tache_e;
 
    }
// Toggle le mode vacances
    public function toggleVac(){
        $q = $this->_conn->prepare('SELECT `state` FROM `state` WHERE id = :id');
        $q->execute(['id' => 1]);
        $data = $q->fetch(PDO::FETCH_ASSOC);
        if($data['state'] == "false"){
            $q = $this->_conn->prepare('UPDATE `state` SET `state`= "true"  WHERE id = :id');
            $q->execute(['id' => 1]);
        }else{
            $q = $this->_conn->prepare('UPDATE `state` SET `state`= "false"  WHERE id = :id');
            $q->execute(['id' => 1]);
        }
    }
    public function getVacState(){
        $q = $this->_conn->prepare('SELECT `state` FROM `state` WHERE id = :id');
        $q->execute(['id' => 1]);
        $data = $q->fetch(PDO::FETCH_ASSOC);

        return $data['state'];
    }
    public function notEmpty(string $empty)
    {
        if($empty != 'true'){
            return true;
        }else{
            return false;
        }

    }

    
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setDb(PDO $conn){$this->_conn = $conn;}

// fin C
}
?>