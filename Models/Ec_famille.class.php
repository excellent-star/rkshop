<?php 



class Ec_famille{
    private $famille_id;
    private $famille_libelle;
    private $famille_description;
    private $famille_image;
    private $famille_created_at;
    private $famille_etat;
    
    public function __construct(array $donnees){
    $this->hydrate($donnees);
    }
    
    public function hydrate(array $donnees){
    foreach($donnees as $key => $value){
    $method = 'set'.ucfirst($key);
    if(method_exists($this, $method))
    {
    $this->$method($value);
    }
    }
    }
    
    public function getFamille_id(){
    return $this->famille_id;
    }
    
    public function getFamille_libelle(){
    return $this->famille_libelle;
    }
    
    public function getFamille_description(){
    return $this->famille_description;
    }
    
    public function getFamille_image(){
    return $this->famille_image;
    }
    
    public function getFamille_created_at(){
    return $this->famille_created_at;
    }
    
    public function getFamille_etat(){
    return $this->famille_etat;
    }
    
    
    public function setFamille_id($famille_id){
    $this->famille_id=$famille_id;
    }
    
    public function setFamille_libelle($famille_libelle){
    $this->famille_libelle=$famille_libelle;
    }
    
    public function setFamille_description($famille_description){
    $this->famille_description=$famille_description;
    }
    
    public function setFamille_image($famille_image){
    $this->famille_image=$famille_image;
    }
    
    public function setFamille_created_at($famille_created_at){
    $this->famille_created_at=$famille_created_at;
    }
    
    public function setFamille_etat($famille_etat){
    $this->famille_etat=$famille_etat;
    }
    
    }







?>