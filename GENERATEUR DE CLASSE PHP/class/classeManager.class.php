<?php 
   /******* 
   @ Debut Class Manager
   
    ********/
   class ClasseManager{
	
	
	private $_db;
	public function __construct($db){ $this->setDb($db);}
	// Fonction permettant de creer des fonction
   
   public function AddClasse(Classe $Classe){
   // Prepare  la requete
   	$sql="INSERT INTO classe SET libelle_cla=?";
   	$array=array($Classe->getLibelle_cla());
   	$Q=$this->_db->prepare($sql);
    $Q->execute($array);
    // return $stmt->rowCount();
    $Classe->hydrate(array('id_cla' => $this->_db->lastInsertId()));    
   }
	
   // function qui affiche toutes les classes enregistrées
	public function AfficherClasse(){
	$classe=array();
	$array=array();
	$sql="SELECT * FROM classe";
	$Q=$this->_db->prepare($sql);
    $Q->execute($array);
	$donnees=$Q->fetch(PDO::FETCH_ASSOC);
	
		while($donnees=$Q->fetch(PDO::FETCH_ASSOC))
		{
			 $classe[] = new Classe($donnees); 
		}
		return $classe;
		
	}	
	  
	 //Fonction qui renvoie toutes les informations liées à la fonction d'un employe

    public function getInfoClasse($id_cla){
	
	$Q=$this->_db->query('SELECT * FROM classe WHERE id_cla="'.$id_cla.'"');
	//$Q->bindValue(':Id_fonction',$Fonction->getId_fonction(), PDO::PARAM_INT);	
	$Donnees=$Q->fetch(PDO::FETCH_ASSOC);
    return new Classe($Donnees);	
	}	 
	
	// Fonction permettant de modifier les fonctions
	
	public function UpdateClasse(Classe $Classe){
	$Q=$this->_db->prepare("UPDATE classe SET libelle_cla=:libelle_cla WHERE id_cla=:id_cla");		
	$Q->bindValue(':id_cla',$Classe->getId_cla(),PDO::PARAM_STR);
	$Q->bindValue(':libelle_cla',$Classe->getLibelle_cla(),PDO::PARAM_STR);
	$Q->execute();
	}
	
	// Fonction permettant de supprimer les  Classe
	
	public function Deleteclasse(Classe $Classe){
	$Q->$this->_db->prepare("UPDATE classe SET etat_cla='1' WHERE id_cla=:id_cla");		
	$Q->bindValue(':id_cla',$Classe->getId_cla(),PDO::PARAM_INT);
	$Q->execute();	
	}
	public function setDb(PDO $db){ $this->_db = $db;}   
     
	 }




?> 