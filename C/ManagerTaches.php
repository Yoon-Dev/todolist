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
    public function addTachesimple(Taches $tache){
        // ajoute une tache simple dans la bdd
        // echo"je suis dans la methode";
        // echo "nom : ".$tache->nom()." detail : ".$tache->detail()." limite : ".$tache->limite()." types : ".$tache->types();
        $q = $this->_conn->prepare('INSERT INTO tache(nom, detail, limite, types, etat, etat_repe, repe_jour, repe_confirme) VALUES(:nom, :detail, :limite, :types, "bon", NULL, NULL, NULL)');
        $q->bindValue(':nom', $tache->nom());
        $q->bindValue(':detail', $tache->detail());
        $q->bindValue(':limite', $tache->limite());
        $q->bindValue(':types', $tache->types());
        $q->execute();
        
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function addTachesrepe(Taches $tache){
        // ajoute une tache simple dans la bdd
        // echo"je suis dans la methode";
        // echo "nom : ".$tache->nom()." detail : ".$tache->detail()." limite : ".$tache->limite()." types : ".$tache->types();
        $q = $this->_conn->prepare('INSERT INTO tache(nom, detail, limite, types, etat, etat_repe, repe_jour, repe_confirme) VALUES(:nom, :detail, NULL, :types, "bon", 1, :repe_jour, 1)');
        $q->bindValue(':nom', $tache->nom());
        $q->bindValue(':detail', $tache->detail());
        $q->bindValue(':types', $tache->types());
        $q->bindValue(':repe_jour', $tache->repe_jour());
        
        $q->execute();
        
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function editTachesimple(Taches $edit){
        // EDIT une tache simple
        // echo "je suis dans la methode";
        // echo "nom : ".$edit->nom()." detail : ".$edit->detail()." limite : ".$edit->limite()." types : ".$edit->types();
        $q = $this->_conn->prepare('UPDATE `tache`SET nom = :nom, detail = :detail, limite = :limite, types = :types WHERE id = :id');
        $q->bindValue(':id', $edit->id());
        $q->bindValue(':nom', $edit->nom());
        $q->bindValue(':detail', $edit->detail());
        $q->bindValue(':limite', $edit->limite());
        $q->bindValue(':types', $edit->types());
        $q->execute();
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function editRepe(Taches $edit){
        // EDIT une REPE
        echo "je suis dans la methode";
        echo "nom : ".$edit->nom()." detail : ".$edit->detail()." jour : ".$edit->repe_jour()." types : ".$edit->types();
        $q = $this->_conn->prepare('UPDATE `tache`SET nom = :nom, detail = :detail, repe_jour = :repe_jour, types = :types WHERE id = :id');
        $q->bindValue(':id', $edit->id());
        $q->bindValue(':nom', $edit->nom());
        $q->bindValue(':detail', $edit->detail());
        $q->bindValue(':repe_jour', $edit->repe_jour());
        $q->bindValue(':types', $edit->types());
        $q->execute();    
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// supprime une tache simple
    public function del($tache_del){
        $q = $this->_conn->prepare('DELETE FROM `tache` WHERE id = :id');
        $q->execute(['id' => $tache_del]);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // Supprime pour de faut une tache repe
    public function delrepe($tache_repe){
        $q = $this->_conn->prepare('UPDATE `tache` SET etat_repe = 2 WHERE id = :id');
        $q->execute(['id' => $tache_repe]);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function getList($jour){
        // recupere toute les taches dans la bdd
        // si elle sont de type "normal" ou si repe_jour est egal a jour
    $taches = [];

    $q = $this->_conn->prepare('SELECT * FROM `tache` WHERE repe_jour is null OR repe_jour = :jour AND etat_repe = 1');
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

    $q = $this->_conn->prepare('SELECT * FROM `tache` WHERE repe_jour = :jour AND etat_repe = 1 OR limite = :today');
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

    
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setDb(PDO $conn){$this->_conn = $conn;}

// fin C
}
?>