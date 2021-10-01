<?php 
/**
 * 
 */
class Connexion
{
	private $bdd;
	public function __construct($bdd){ 
		$this->setBdd($bdd);
	}

	public function connexion($email,$password){
		$sql="SELECT client_nom as nom,client_prenom as prenom,client_image as photo,client_adresseMail as email,client_password as mot_passe,(@pro) as profil,client_id as id FROM atout_client,(SELECT @pro:=0) as T WHERE client_adresseMail=? AND client_password=? 
			UNION 
			(SELECT user_nom as nom,user_prenom as prenom,user_image as photo,user_email as email,user_password as mot_passe,profil_id as profil,user_id as id FROM atout_user WHERE user_email=? AND user_password=?)";
		$array=array($email,$password,$email,$password);
		$Q=$this->bdd->prepare($sql);
		$Q->execute($array);
		if(!empty($email) && !empty($password)){
			$donnees=$Q->fetch(PDO::FETCH_OBJ);
		}
		return !empty($donnees)?$donnees:[];
	}
	public function setBdd(PDO $bdd){
		$this->bdd=$bdd;
	}
	public function AlertConnexion(){
		$alert='';
		
		$alert='<div class="alert alert-danger alert-dismissible"></span>
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Echec!</strong>Mot de passe ou email incorrect.</div>';

		return $alert;
	}
}
 ?>