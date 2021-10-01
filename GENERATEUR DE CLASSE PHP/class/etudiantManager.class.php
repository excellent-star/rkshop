<?php 
   /******* 
   @ Debut Class Manager
   
    ********/
   class EtudiantManager{
	
	
	private $_db;
	public function __construct($db){ 
		$this->setDb($db);
	}
	// Fonction permettant de creer des fonction
   
   public function AddEtudiant(Etudiant $Etudiant){
   // Prepare  la requete
   	$sql="INSERT INTO etudiant SET nom_etu=?, age_etu=?, id_cla=?";
   	$array=array($Etudiant->getNom_etu(),$Etudiant->getAge_etu(),$Etudiant->getId_cla());
   	$Q=$this->_db->insertRow($sql,$array);
   	
   	// $Q=$this->_db->prepare($sql);
    // $Q->execute($array);
    // return $stmt->rowCount();
    // $Etudiant->hydrate(array('id_etu' => $this->_db->lastInsertId()));    
   }
	
   // function qui affiche toutes les classes enregistrées
	public function AfficherEtudiant(){
	$etudiant=array();
	$array=array();
	$sql="SELECT * FROM etudiant";
	$Q=$this->_db->getRows($sql);
		return $Q;
		
	}	
	  
	 //Fonction qui renvoie toutes les informations liées à la fonction d'un employe

 //    public function getInfoClasse($id_etu){
	
	// $Q=$this->_db->query('SELECT * FROM etudiant WHERE id_etu="'.$id_etu.'"');
	// //$Q->bindValue(':Id_fonction',$Fonction->getId_fonction(), PDO::PARAM_INT);	
	// $Donnees=$Q->fetch(PDO::FETCH_ASSOC);
 //    return new Etudiant($Donnees);	
	// }	 
	
	// Fonction permettant de modifier les fonctions
	
	// public function UpdateClasse(Etudiant $Etudiant){
	// $Q=$this->_db->prepare("UPDATE etudiant SET libelle_cla=:libelle_cla WHERE id_cla=:id_cla");		
	// $Q->bindValue(':id_cla',$Classe->getId_cla(),PDO::PARAM_STR);
	// $Q->bindValue(':libelle_cla',$Classe->getLibelle_cla(),PDO::PARAM_STR);
	// $Q->execute();
	// }
	
	// // Fonction permettant de supprimer les  Classe
	
	// public function Deleteclasse(Classe $Classe){
	// $Q->$this->_db->prepare("UPDATE etudiant SET etat_cla='1' WHERE id_cla=:id_cla");		
	// $Q->bindValue(':id_cla',$Classe->getId_cla(),PDO::PARAM_INT);
	// $Q->execute();	
	// }
	public function setDb($db){ $this->_db = $db;}   
     
	 }




?> 