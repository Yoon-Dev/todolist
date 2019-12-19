<?php
class Cooking{
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    // caratéristique
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    protected 
    $_id,
    $_titre,
    $_ingredient,
    $_instruction,
    $_type,
    $_img;
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // CONSTRUCT
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function __construct(Array $data)
    {
        $this->hydrate($data);
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // HYDRATE
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function hydrate(Array $data)
    {
        foreach ($data as $key => $value){
            $method='set'.ucfirst($key);
            // convertit les str censée etre des int en int
            if($key == "id"){
                $value = intval($value);
            }
            if (method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // GETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function id(){return$this->_id;}
    public function titre(){return$this->_titre;}
    public function ingredient(){return$this->_ingredient;}
    public function instruction(){return$this->_instruction;}
    public function type(){return$this->_type;}
    public function img(){return$this->_img;}
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    // SETTER
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
    public function setId($id){if(is_int($id)){$this->_id = $id;}}
    public function setTitre($titre){if(is_string($titre)){$this->_titre = $titre;}}
    public function setIngredient($ingredient){if(!empty($ingredient) && is_string($ingredient)){$this->_ingredient = $ingredient;}}
    public function setInstruction($instruction){if(!empty($instruction) && is_string($instruction)){$this->_instruction = $instruction;}}
    public function setType($type){if(!empty($type) && is_string($type)){$this->_type = $type;}}
    public function setImg($img){if(is_string($img)){$this->_img = $img;}}
// °°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°°
// end
}
