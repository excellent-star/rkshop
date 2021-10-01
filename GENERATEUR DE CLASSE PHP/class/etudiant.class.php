<?php 
class Etudiant{
private $id_etu;
private $nom_etu;
private $age_etu;
private $id_cla;

public function __construct(array $donnees){
$this->hydrate($donnees);
}

public function hydrate(array $donnees){
foreach($donnees as $key => $value){
$method = 'set'.ucfirst($key);
var_dump($method);
if(method_exists($this, $method))
{
$this->$method($value);
}
}
}

public function getId_etu(){
return $this->id_etu;
}

public function getNom_etu(){
return $this->nom_etu;
}

public function getAge_etu(){
return $this->age_etu;
}

public function getId_cla(){
return $this->id_cla;
}


public function setId_etu($id_etu){
$this->id_etu=$id_etu;
}

public function setNom_etu($nom_etu){
$this->nom_etu=$nom_etu;
}

public function setAge_etu($age_etu){
$this->age_etu=$age_etu;
}

public function setId_cla($id_cla){
$this->id_cla=$id_cla;
}

}
 ?>