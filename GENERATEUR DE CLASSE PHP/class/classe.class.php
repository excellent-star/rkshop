<?php
class Classe{
private $id_cla;
private $libelle_cla;
private $etat_cla;

public function __construct(array $donnees){
$this->hydrate($donnees);
// var_dump($donnees);
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

public function getId_cla(){
return $this->id_cla;
}

public function getLibelle_cla(){
return $this->libelle_cla;
}
public function etat_cla(){
return $this->etat_cla;
}


public function setId_cla($id_cla){
$this->id_cla=$id_cla;
}
public function setEtat_cla($etat_cla){
$this->etat_cla=$etat_cla;
}

public function setLibelle_cla($libelle_cla){
$this->libelle_cla=$libelle_cla;
} 

}
?>