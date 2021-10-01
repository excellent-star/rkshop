<?php
//Class Manager permettant de manipuler la classe Participant 
class ManagerParticipant{ 
//l'instance de la connexion à la base de donnees 
private $bdd;

//Constructeur avec un seul parametre: l'objet de la bdd 
public function __construct($bdd){ 
$this->setBdd($bdd); 
}


//Fonction enregistrer permettant d'enregistrer ou d'ajouter une ligne. 
//Le parametre est forcement un objet de la classe Participant, generalement, c'est le $_POST, c'est un tableau a clef valeur qui est d'abord passer par la classe Participant 
//Exemple: $MP=new ManagerParticipant($bdd) 
//Exemple: $P=new Participant(array('nom_par'=>$valeur, 'prenom_par'=>$valeur, 'date_de_naissance_par'=>$valeur, 'pays_par'=>$valeur, 'passeport_par'=>$valeur, 'organisme_par'=>$valeur, 'fonction_par'=>$valeur, 'tel_par'=>$valeur, 'email_par'=>$valeur, 'adresse_par'=>$valeur, 'photo_par'=>$valeur, 'sexe_par'=>$valeur, 'date_cree_par'=>$valeur, 'date_update_par'=>$valeur, 'statut_par'=>$valeur, 'etat_par'=>$valeur, 'password_par'=>$valeur, 'id_ut'=>$valeur )) 
//Exemple: $P=$MP->Enregistrer($P) 
public function Enregistrer(Participant $participant){
$array=array(trim($participant->getNom_par()),trim($participant->getPrenom_par()),trim($participant->getDate_de_naissance_par()),trim($participant->getPays_par()),trim($participant->getPasseport_par()),trim($participant->getOrganisme_par()),trim($participant->getFonction_par()),trim($participant->getTel_par()),trim($participant->getEmail_par()),trim($participant->getAdresse_par()),trim($participant->getPhoto_par()),trim($participant->getSexe_par()),trim($participant->getDate_cree_par()),trim($participant->getDate_update_par()),trim($participant->getStatut_par()),trim($participant->getEtat_par()),trim($participant->getPassword_par()),trim($participant->getId_ut()));
$sql="SELECT * FROM participant WHERE nom_par=? AND prenom_par=? AND date_de_naissance_par=? AND pays_par=? AND passeport_par=? AND organisme_par=? AND fonction_par=? AND tel_par=? AND email_par=? AND adresse_par=? AND photo_par=? AND sexe_par=? AND date_cree_par=? AND date_update_par=? AND statut_par=? AND etat_par=? AND password_par=? AND id_ut=?";
$Q1=$this->bdd->prepare($sql);
$Q1->execute($array);
$donnees=$Q1->fetch(PDO::FETCH_ASSOC);
$retour=!empty($donnees)?-1:0;
//Verifier si les donnees existent deja sinon, il enregistre. 
if(empty($donnees)){
$sql="INSERT INTO participant SET nom_par=?, prenom_par=?, date_de_naissance_par=?, pays_par=?, passeport_par=?, organisme_par=?, fonction_par=?, tel_par=?, email_par=?, adresse_par=?, photo_par=?, sexe_par=?, date_cree_par=?, date_update_par=?, statut_par=?, etat_par=?, password_par=?, id_ut=?";
$Q=$this->bdd->prepare($sql);
$Q->execute($array);
$retour=$this->bdd->lastInsertId();
}
//Ainsi cette fonction retourne -1 si les donnees existent deja dans la bdd, sinon s'il retourne -1, alors une ligne a ete inseree sinon (c-a-d 0 ) si la ligne nest pas inseree. 
return $retour;
}


//Afficher() toutes les lignes de la bdd, les resultats sont renvoyes en forme de plusieurs tableaux; 
//Afficher($id=2) Renvoie une ligne specifiee par son identifiant en parametre; le resultat renvoye est un tableau. 
public function Afficher($id=""){
if(empty($id))
$sql="SELECT * FROM participant";
else
$sql="SELECT * FROM classe WHERE id_par=?";
$array=array($id);
$Q=$this->bdd->prepare($sql);
$Q->execute($array);
if(!empty($id)){
$donnees=$Q->fetch(PDO::FETCH_ASSOC);
$participant =!empty($donnees)?new Participant($donnees):array();
}
else
while($donnees=$Q->fetch(PDO::FETCH_ASSOC))
$participant[] = !empty($donnees)?new Participant($donnees):array();
return !empty($participant)?$participant:[];
}


//Contrairement a la fonction Afficher() qui affiche toutes les lignes sans tenir compte des clefs etrangeres, cette fonction (AfficherEtranger()) n'affiche que les lignes dans la table mere existe... 
//AfficherEtranger(), toutes les lignes de la bdd, les resultats sont renvoyes en forme de plusieurs tableaux; 
//Afficher($id=2) Renvoie une ligne specifiee par son identifiant en parametre; le resultat renvoye est un tableau. 
public function AfficherEtranger($id=""){
if(empty($id))
$sql="SELECT * FROM participant WHERE id_art IN (SELECT id_art FROM article) AND id_ev IN (SELECT id_ev FROM evenement) AND id_mes IN (SELECT id_mes FROM message)";
else
$sql="SELECT * FROM classe WHERE id_par=? AND id_art IN (SELECT id_art FROM article) AND id_ev IN (SELECT id_ev FROM evenement) AND id_mes IN (SELECT id_mes FROM message)";
$array=array($id);
$Q=$this->bdd->prepare($sql);
$Q->execute($array);
if(!empty($id)){
$donnees=$Q->fetch(PDO::FETCH_ASSOC);
$participant =!empty($donnees)?new Participant($donnees):array();
}
else
while($donnees=$Q->fetch(PDO::FETCH_ASSOC))
$participant[] =!empty($donnees)?new Participant($donnees):array();
return !empty($participant)?$participant:[];
}


//Contrairement a la fonction Afficher() et AfficherEtranger() qui renvoie les attributs privees, aux quels on ne peut y acceder que par des accesseurs ou getter, cette fonction (AfficherTous()) renvoie les attributs ou proprietes publiques... 
public function AfficherTous($id=""){
if(empty($id))
$sql="SELECT * FROM participant , utilisateur, ,article,evenement,message WHERE participant.id_art=article.id_art AND evenement.id_ev=participant.id_ev AND message.id_mes=participant.id_mes AND participant.id_ut=utilisateur.id_ut ";
else
$sql="SELECT * FROM participant , utilisateur, ,article,evenement,message WHERE participant.id_art=article.id_art AND evenement.id_ev=participant.id_ev AND message.id_mes=participant.id_mes AND participant.id_ut=utilisateur.id_ut AND id_par=?";
$array=array($id);
$Q=$this->bdd->prepare($sql);
$Q->execute($array);
if(!empty($id))
$donnees=$Q->fetch(PDO::FETCH_OBJ);
else
$donnees=$Q->fetchAll(PDO::FETCH_OBJ);
return $donnees;
}


public function Supprimer($id){
$sql="DELETE FROM participant WHERE id_par=?";
$array=array($id);
$Q=$this->bdd->prepare($sql);
$Q->execute($array);
return $Q->rowCount();
}


public function Modifier(Participant $participant){
$array=array(trim($participant->getNom_par()),trim($participant->getPrenom_par()),trim($participant->getDate_de_naissance_par()),trim($participant->getPays_par()),trim($participant->getPasseport_par()),trim($participant->getOrganisme_par()),trim($participant->getFonction_par()),trim($participant->getTel_par()),trim($participant->getEmail_par()),trim($participant->getAdresse_par()),trim($participant->getPhoto_par()),trim($participant->getSexe_par()),trim($participant->getDate_cree_par()),trim($participant->getDate_update_par()),trim($participant->getStatut_par()),trim($participant->getEtat_par()),trim($participant->getPassword_par()),trim($participant->getId_ut()) ,$participant->getId_par());
$sql="UPDATE participant SET nom_par=?, prenom_par=?, date_de_naissance_par=?, pays_par=?, passeport_par=?, organisme_par=?, fonction_par=?, tel_par=?, email_par=?, adresse_par=?, photo_par=?, sexe_par=?, date_cree_par=?, date_update_par=?, statut_par=?, etat_par=?, password_par=?, id_ut=? WHERE id_par=?";
$Q=$this->bdd->prepare($sql);
$Q->execute($array);
return $Q->rowCount();
}


public function setBdd(PDO $bdd){
$this->bdd=$bdd;
}

public function AlertEnregistrer($valeur){
$alert='';
if($valeur>=1){
$alert='<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Succès!</strong>participant enregistre avec succès.</div>';
}else if($valeur==-1){
$alert='<div class="alert alert-danger alert-dismissible"></span>
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Echec!</strong>Ces informations existent déjà!!.</div>';
}else{
$alert='<div class="alert alert-danger alert-dismissible"></span>
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Echec!</strong>Erreur,participant non enregistre.</div>';
}
return $alert;
}


public function AlertSupprimer($valeur){
$alert='';
if($valeur>=1){
$alert='<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Succès! </strong>participant supprimée avec succès.</div>';
}else{
$alert='<div class="alert alert-danger alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Echec!</strong>participant non supprimee.</div>';
}
return $alert;
}


public function AlertModifier($valeur){
$alert='';
if($valeur>=1){
$alert='<div class="alert alert-success alert-dismissible">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
Succès!participant modifiee avec succès.</div>';
}else{
$alert='<div class="alert alert-danger alert-dismissible"></span>
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>Echec!</strong>Aucune modification apportée.</div>';
}
return $alert;
}


}
 ?>