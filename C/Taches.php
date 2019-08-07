<?php
class Taches{
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // caratéristique
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected   $_id,
                $_nom,
                $_detail,
                $_limite,
                $_types,
                $_etat,
                $_etat_repe,
                $_repe_jour,
                $_repe_confirme;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // CONSTRUCT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function __construct(Array $data){
        $this->hydrate($data);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // HYDRATE
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function hydrate(Array $data){
        foreach ($data as $key => $value){
            $method='set'.ucfirst($key);
    // convertit les str censée etre des int en int
            if($key == "id" || $key == "etat_repe" || $key == "repe_confirme"){
                $value = intval($value);
            }
            if (method_exists($this, $method)){
                $this->$method($value);
            }
            }
        }
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // fonctionnalité
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // GETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function id(){return$this->_id;}
    public function nom(){return$this->_nom;}
    public function detail(){return$this->_detail;}
    public function limite(){return$this->_limite;}
    public function types(){return$this->_types;}
    public function etat(){return$this->_etat;}
    public function etat_repe(){return$this->_etat_repe;}
    public function repe_jour(){return$this->_repe_jour;}
    public function repe_confirme(){return$this->_repe_confirme;}
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setId($id){if(is_int($id)){$this->_id = $id;}}
    public function setNom($nom){if(is_string($nom)){$this->_nom = $nom;}}
    public function setDetail($detail){if(!empty($detail) && is_string($detail)){$this->_detail = $detail;}}
    public function setLimite($limite){if(!empty($limite) && is_string($limite)){$this->_limite = $limite;}}
    public function setTypes($types){if(is_string($types)){$this->_types = $types;}}
    public function setEtat($etat){if(is_string($etat)){$this->_etat = $etat;}}
    public function setEtat_repe($etat_repe){if(!empty($etat_repe) && is_int($etat_repe)){$this->_etat_repe = $etat_repe;}}
    public function setRepe_jour($repe_jour){if(!empty($repe_jour) && is_string($repe_jour)){$this->_repe_jour = $repe_jour;}}
    public function setRepe_confirme($repe_confirme){if(!empty($repe_confirme) && is_int($repe_confirme)){$this->_repe_confirme = $repe_confirme;}}
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// fin CLASSE
}

?>