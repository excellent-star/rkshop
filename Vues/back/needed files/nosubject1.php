<?php 



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

if(!empty($_POST['couleur_id'])){
foreach ($_POST['couleur_id'] as $key => $value) {

}
}

$couleur=array();
$qte_couleur=0;



if(!empty($taille))
$_POST['produit_taille']=implode(',', $taille);
else
$_POST['produit_taille']='';

if(!empty($couleur))
$_POST['produit_couleur']=implode(',', $couleur);
else
$_POST['produit_couleur']='';


$_POST['produit_quantite']=$qte_taille;
$POST['taille_id']=$_POST['taille_id'];
$POST['couleur_id']=$_POST['couleur_id'];
$_POST=$fonction->extractArrays($_POST,array("taille_id","couleur_id"));
$art=new atout_produit($_POST);
$Mart=new atout_produitManager($db);
$reponse=$Mart->Enregistrer($art);

$order=new atout_ordrearticle(array("produit_id"=>$reponse));


$Morder=new atout_ordrearticleManager($db);
$re=$Morder->Enregistrer($order);



$donnees=array();
if(!empty($POST['taille_id'])){
foreach ($POST['taille_id'] as $cle => $valeur) {
$tailleQte=$valeur.':'.$_POST[$valeur];
foreach ($POST['couleur_id'] as $key => $value) {
if(!empty($value)){
$value=str_replace(' ', '_', $value);
$nouveau=explode('|', $value);
$nouveau0=!empty($nouveau[0])?$nouveau[0]:'';
$nouveau1=!empty($nouveau[1])?$nouveau[1]:'';
if($valeur==$nouveau[0]){
$donnees['atcq_taille']=$valeur;
$donnees['atcq_qte']=$_POST[$value];
$donnees['atcq_couleur']=$nouveau[1];
$donnees['produit_id']=$reponse;
$couleur_taille=new atout_taille_couleur_qte($donnees);
$Mcouleur_taille=new atout_taille_couleur_qteManager($db);
$rep=$Mcouleur_taille->Enregistrer($couleur_taille);
}
}
}

}
}

$_POST_=array();

$removed_images_str=!empty($_POST['removed_images_str'])?$_POST['removed_images_str']:'';
$_POST_=$fonction->treatMultipleFilePascal("Produits",$_FILES,$removed_images_str);


$Mimg=new atout_imageManager($db);
if(!empty($reponse)){
if(!empty($_POST_)){
foreach ($_POST_ as $key => $image_libelle) {
$img=new atout_image(array("image_libelle"=>$image_libelle,"produit_id"=>$reponse,"image_etat"=>0));
$reponse_img=$Mimg->Enregistrer($img);
}
}
}

echo $reponse;
// header("location:?p=".$fonction->double_cryptage('admin_articles')."&reponse=".$fonction->double_cryptage($reponse));
break;