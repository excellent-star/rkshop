
<?php 


$_FILES=$fonction->extractArrays($_FILES,array("files"));

$taille=array();
$qte_taille=0;
if(!empty($_POST['taille_id'])){
foreach ($_POST['taille_id'] as $key => $value) {
if(in_array($value, array_keys($_POST))){
if(!empty($_POST[$value])){
array_push($taille, $value.':'.$_POST[$value]);
$qte_taille+=intval($_POST[$value]);
}
}
}
}

$_POST['produit_quantite']=$qte_taille;

$POST['taille_id']=$_POST['taille_id'];
$POST['couleur_id']=$_POST['couleur_id'];

$_POST=$fonction->extractArrays($_POST,array("taille_id","couleur_id"));
$art=new atout_produit($_POST);
$Mart=new atout_produitManager($db);
$reponse=$Mart->Modifier($art);


$Mcouleur_taille=new atout_taille_couleur_qteManager($db);
$_id_=$Mcouleur_taille->getDataRequest(array("atout_taille_couleur_qte"),array("produit_id"=>$_POST['produit_id']))['data'];
$id_nouveau=array();
if(!empty($POST['taille_id'])){
foreach ($POST['taille_id'] as $cle => $valeur) {
$tailleQte=$valeur.':'.$_POST[$valeur];
foreach ($POST['couleur_id'] as $key => $value) {
if(!empty($value)){
$value=str_replace(' ', '_', $value);
$nouveau=explode('|', $value);
$nouveau0=!empty($nouveau[0])?$nouveau[0]:'';
$nouveau1=!empty($nouveau[1])?$nouveau[1]:'';
$donnees=array();
if($valeur==$nouveau[0]){
$donnees['atcq_taille']=$valeur;
$donnees['atcq_qte']=$_POST[$value];
$donnees['atcq_couleur']=$nouveau[1];
$donnees['produit_id']=$_POST['produit_id'];

$Mcouleur_taille=new atout_taille_couleur_qteManager($db);
$_id=$Mcouleur_taille->getDataRequest(array("atout_taille_couleur_qte"),$donnees,array(),"","",false)['data'];

if(!empty($_id->atcq_id)){

$donnees['atcq_id']=$_id->atcq_id;
array_push($id_nouveau, $_id->atcq_id);
$couleur_taille=new atout_taille_couleur_qte($donnees);
$rep=$Mcouleur_taille->Modifier($couleur_taille);

}else{
if(!empty($donnees['atcq_taille']) && !empty($donnees['atcq_qte'])&& !empty($donnees['atcq_couleur'])){
$couleur_taille=new atout_taille_couleur_qte($donnees);
$rep=$Mcouleur_taille->Enregistrer($couleur_taille);
array_push($id_nouveau, $rep);
}
}

}
}
}

}

if(!empty($_id_)){
foreach ($_id_ as $key => $v) {
if(!in_array($v->atcq_id, $id_nouveau))
$rep=$Mcouleur_taille->Supprimer($v->atcq_id);
}
}

}

$produit_id=!empty($_POST['produit_id'])?$_POST['produit_id']:'';

$_POST_=array();
if(!empty($_FILES['image_libelle']['name']))
$_POST_=$fonction->treatMultipleFile("atout_images",$_FILES,'images');

// var_dump($_POST_);die();
$Mimg=new atout_imageManager($db);
if(!empty($_POST_)){
foreach ($_POST_ as $key => $image_libelle) {
$img=new atout_image(array("image_libelle"=>$image_libelle,"produit_id"=>$produit_id,"image_etat"=>0));
$reponse_img=$Mimg->Enregistrer($img);
}
}
