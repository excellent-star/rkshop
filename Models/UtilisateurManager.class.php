<?php 




//Class Manager permettant de manipuler la classe Utilisateur
class UtilisateurManager{
    use db;
    //l'instance de la connexion à la base de donnees
    private $bdd;
    
    //Constructeur avec un seul parametre: l'objet de la bdd
    public function __construct($bdd){
    $this->setBdd($bdd);
    }
    
    
    //Fonction enregistrer permettant d'enregistrer ou d'ajouter une ligne.
    //Le parametre est forcement un objet de la classe Utilisateur, generalement, c'est le $_POST, c'est un tableau a clef valeur qui est d'abord passer par la classe Utilisateur
    //Exemple: $MU=new ManagerUtilisateur($bdd)
    //Exemple: $U=new Utilisateur(array('userName'=>$valeur, 'userPrenom'=>$valeur, 'userMiddleName'=>$valeur, 'userPassword'=>$valeur, 'userEmail'=>$valeur, 'userCreatedDate'=>$valeur, 'userUpdatedDate'=>$valeur, 'userMobile'=>$valeur, 'userLastLogin'=>$valeur, 'userIntro'=>$valeur, 'userProfile'=>$valeur, 'userField'=>$valeur, 'userVideo'=>$valeur, 'userWebsite'=>$valeur, 'userSkeype'=>$valeur, 'userAddress'=>$valeur, 'userCv'=>$valeur, 'userLocationMap'=>$valeur, 'userCoverImage'=>$valeur, 'userRole'=>$valeur ))
    //Exemple: $U=$MU->Enregistrer($U)
    public function Enregistrer(Utilisateur $utilisateur){
    $array=array(trim($utilisateur->getUserName()),trim($utilisateur->getUserPrenom()),trim($utilisateur->getUserMiddleName()),trim($utilisateur->getUserPassword()),trim($utilisateur->getUserEmail()),trim($utilisateur->getUserCreatedDate()),trim($utilisateur->getUserUpdatedDate()),trim($utilisateur->getUserMobile()),trim($utilisateur->getUserLastLogin()),trim($utilisateur->getUserIntro()),trim($utilisateur->getUserProfile()),trim($utilisateur->getUserField()),trim($utilisateur->getUserVideo()),trim($utilisateur->getUserWebsite()),trim($utilisateur->getUserSkeype()),trim($utilisateur->getUserAddress()),trim($utilisateur->getUserCv()),trim($utilisateur->getUserLocationMap()),trim($utilisateur->getUserCoverImage()),trim($utilisateur->getUserRole()));
    $sql="SELECT * FROM utilisateur WHERE userName=? AND userPrenom=? AND userMiddleName=? AND userPassword=? AND userEmail=? AND userCreatedDate=? AND userUpdatedDate=? AND userMobile=? AND userLastLogin=? AND userIntro=? AND userProfile=? AND userField=? AND userVideo=? AND userWebsite=? AND userSkeype=? AND userAddress=? AND userCv=? AND userLocationMap=? AND userCoverImage=? AND userRole=?";
    $Q1=$this->bdd->prepare($sql);
    $Q1->execute($array);
    $donnees=$Q1->fetch(PDO::FETCH_ASSOC);
    $retour=!empty($donnees)?-1:0;
    //Verifier si les donnees existent deja sinon, il enregistre.
    if(empty($donnees)){
    $sql="INSERT INTO utilisateur SET userName=?, userPrenom=?, userMiddleName=?, userPassword=?, userEmail=?, userCreatedDate=?, userUpdatedDate=?, userMobile=?, userLastLogin=?, userIntro=?, userProfile=?, userField=?, userVideo=?, userWebsite=?, userSkeype=?, userAddress=?, userCv=?, userLocationMap=?, userCoverImage=?, userRole=?";
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
    $sql="SELECT * FROM utilisateur";
    else
    $sql="SELECT * FROM utilisateur WHERE userId=?";
    $array=array($id);
    $Q=$this->bdd->prepare($sql);
    $Q->execute($array);
    if(!empty($id)){
    $donnees=$Q->fetch(PDO::FETCH_ASSOC);
    $utilisateur =!empty($donnees)?new Utilisateur($donnees):array();
    }
    else
    while($donnees=$Q->fetch(PDO::FETCH_ASSOC))
    $utilisateur[] = !empty($donnees)?new Utilisateur($donnees):array();
    return !empty($utilisateur)?$utilisateur:[];
    }
    
    
    public function Supprimer($id){
    $sql="DELETE FROM utilisateur WHERE userId=?";
    $array=array($id);
    $Q=$this->bdd->prepare($sql);
    $Q->execute($array);
    return $Q->rowCount();
    }
    
    
    public function Modifier(Utilisateur $utilisateur){
    $array=array(trim($utilisateur->getUserName()),trim($utilisateur->getUserPrenom()),trim($utilisateur->getUserMiddleName()),trim($utilisateur->getUserPassword()),trim($utilisateur->getUserEmail()),trim($utilisateur->getUserCreatedDate()),trim($utilisateur->getUserUpdatedDate()),trim($utilisateur->getUserMobile()),trim($utilisateur->getUserLastLogin()),trim($utilisateur->getUserIntro()),trim($utilisateur->getUserProfile()),trim($utilisateur->getUserField()),trim($utilisateur->getUserVideo()),trim($utilisateur->getUserWebsite()),trim($utilisateur->getUserSkeype()),trim($utilisateur->getUserAddress()),trim($utilisateur->getUserCv()),trim($utilisateur->getUserLocationMap()),trim($utilisateur->getUserCoverImage()),trim($utilisateur->getUserRole()) ,$utilisateur->getUserId());
    $sql="UPDATE utilisateur SET userName=?, userPrenom=?, userMiddleName=?, userPassword=?, userEmail=?, userCreatedDate=?, userUpdatedDate=?, userMobile=?, userLastLogin=?, userIntro=?, userProfile=?, userField=?, userVideo=?, userWebsite=?, userSkeype=?, userAddress=?, userCv=?, userLocationMap=?, userCoverImage=?, userRole=? WHERE userId=?";
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
    <strong>Succès!</strong>utilisateur enregistre avec succès.</div>';
    }else if($valeur==-1){
    $alert='<div class="alert alert-danger alert-dismissible"></span>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Echec!</strong>Ces informations existent déjà!!.</div>';
    }else{
    $alert='<div class="alert alert-danger alert-dismissible"></span>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Echec!</strong>Erreur,utilisateur non enregistre.</div>';
    }
    return $alert;
    }
    
    
    public function AlertSupprimer($valeur){
    $alert='';
    if($valeur>=1){
    $alert='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Succès! </strong>utilisateur supprimée avec succès.</div>';
    }else{
    $alert='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Echec!</strong>utilisateur non supprimee.</div>';
    }
    return $alert;
    }
    
    
    public function AlertModifier($valeur){
    $alert='';
    if($valeur>=1){
    $alert='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Succès!utilisateur modifiee avec succès.</div>';
    }else{
    $alert='<div class="alert alert-danger alert-dismissible"></span>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Echec!</strong>Aucune modification apportée.</div>';
    }
    return $alert;
    }
    
    
    public function getRow($query, $params=array()){
    return $this->get_row($this->bdd,$query, $params);
    }
    
    public function getRows($query, $params=array()){
    return $this->get_rows($this->bdd,$query, $params);
    }
    
    public function insertRow($query, $params){
    return $this->insert_row($this->bdd,$query, $params);
    }
    
    public function updateRow($query, $params){
    return $this->insertRow($query, $params);
    }
    
    public function updateRow1($query, $params){
    return $this->update_row($this->bdd,$query, $params);
    }
    
    public function deleteRow($query, $params){
    return $this->insertRow($query, $params);
    }
    
    function getDataRequest($table=array(),$data_array=array(),$limit=array(),$order_by='',$group_by='', $plusieurs_lignes=true,$add_condition='',$attributs_select='' ,$order_by_f=false,$group_by_f=false){
    $values=jointure($table,$data_array,$limit,$order_by,$group_by, $plusieurs_lignes,$add_condition,$attributs_select,$this->bdd ,$order_by_f,$group_by_f);
    if($plusieurs_lignes==true)
    $getrows=$this->getRows($values['sql'],$values['array_values']);
    else
    $getrows=$this->getRow($values['sql'],$values['array_values']);
    $getrow['sql']=$values['sql'];
    $getrow['values']=$values['array_values'];
    $getrow['data']=$getrows;
    return $getrow;
    }



     // ******************** My own Methods *************************











    
    }// end of class


?>