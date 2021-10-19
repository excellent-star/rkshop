<?php 





//Class Manager permettant de manipuler la classe Ec_option_parametre
class Ec_option_parametreManager{
    use db;
    //l'instance de la connexion à la base de donnees
    private $bdd;
    
    //Constructeur avec un seul parametre: l'objet de la bdd
    public function __construct($bdd){
    $this->setBdd($bdd);
    }
    
    
    //Fonction enregistrer permettant d'enregistrer ou d'ajouter une ligne.
    //Le parametre est forcement un objet de la classe Ec_option_parametre, generalement, c'est le $_POST, c'est un tableau a clef valeur qui est d'abord passer par la classe Ec_option_parametre
    //Exemple: $ME=new ManagerEc_option_parametre($bdd)
    //Exemple: $E=new Ec_option_parametre(array('option_parametre_parametre'=>$valeur, 'option_parametre_libelle'=>$valeur, 'article_id'=>$valeur ))
    //Exemple: $E=$ME->Enregistrer($E)
    public function Enregistrer(Ec_option_parametre $ec_option_parametre){
    $array=array(trim($ec_option_parametre->getOption_parametre_parametre()),trim($ec_option_parametre->getOption_parametre_libelle()),trim($ec_option_parametre->getArticle_id()));
    $sql="SELECT * FROM ec_option_parametre WHERE option_parametre_parametre=? AND option_parametre_libelle=? AND article_id=?";
    $Q1=$this->bdd->prepare($sql);
    $Q1->execute($array);
    $donnees=$Q1->fetch(PDO::FETCH_ASSOC);
    $retour=!empty($donnees)?-1:0;
    //Verifier si les donnees existent deja sinon, il enregistre.
    if(empty($donnees)){
    $sql="INSERT INTO ec_option_parametre SET option_parametre_parametre=?, option_parametre_libelle=?, article_id=?";
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
    $sql="SELECT * FROM ec_option_parametre";
    else
    $sql="SELECT * FROM ec_option_parametre WHERE option_parametre_id=?";
    $array=array($id);
    $Q=$this->bdd->prepare($sql);
    $Q->execute($array);
    if(!empty($id)){
    $donnees=$Q->fetch(PDO::FETCH_ASSOC);
    $ec_option_parametre =!empty($donnees)?new Ec_option_parametre($donnees):array();
    }
    else
    while($donnees=$Q->fetch(PDO::FETCH_ASSOC))
    $ec_option_parametre[] = !empty($donnees)?new Ec_option_parametre($donnees):array();
    return !empty($ec_option_parametre)?$ec_option_parametre:[];
    }
    
    
    public function Supprimer($id){
    $sql="DELETE FROM ec_option_parametre WHERE option_parametre_id=?";
    $array=array($id);
    $Q=$this->bdd->prepare($sql);
    $Q->execute($array);
    return $Q->rowCount();
    }
    
    
    public function Modifier(Ec_option_parametre $ec_option_parametre){
    $array=array(trim($ec_option_parametre->getOption_parametre_parametre()),trim($ec_option_parametre->getOption_parametre_libelle()),trim($ec_option_parametre->getArticle_id()) ,$ec_option_parametre->getOption_parametre_id());
    $sql="UPDATE ec_option_parametre SET option_parametre_parametre=?, option_parametre_libelle=?, article_id=? WHERE option_parametre_id=?";
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
    <strong>Succès!</strong>ec_option_parametre enregistre avec succès.</div>';
    }else if($valeur==-1){
    $alert='<div class="alert alert-danger alert-dismissible"></span>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Echec!</strong>Ces informations existent déjà!!.</div>';
    }else{
    $alert='<div class="alert alert-danger alert-dismissible"></span>
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Echec!</strong>Erreur,ec_option_parametre non enregistre.</div>';
    }
    return $alert;
    }
    
    
    public function AlertSupprimer($valeur){
    $alert='';
    if($valeur>=1){
    $alert='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Succès! </strong>ec_option_parametre supprimée avec succès.</div>';
    }else{
    $alert='<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Echec!</strong>ec_option_parametre non supprimee.</div>';
    }
    return $alert;
    }
    
    
    public function AlertModifier($valeur){
    $alert='';
    if($valeur>=1){
    $alert='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Succès!ec_option_parametre modifiee avec succès.</div>';
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
    
    }



























?>