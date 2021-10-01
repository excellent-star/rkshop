<?php 

$Mart=new atout_produitManager($db);
$Mimg=new atout_imageManager($db);
$liste_article=$Mart->getDataRequest(array("atout_image","atout_produit","atout_categorie"),array("produit_id"=>$_GET['id']),array(),"","",false)['data'];

$liste_articles=$Mart->getDataRequest(array("atout_image","atout_produit","atout_categorie"),array("produit_id"=>$_GET['id']),array(),"","",true)['data'];

$liste_images=$Mimg->AfficherProduit_id($_GET['id']);

$Mcat=new atout_categorieManager($db);
$liste_categorie=$Mcat->Afficher();

$Mcat=new atout_tailleManager($db);
$liste_taille=$Mcat->Afficher();

$Mcoul=new atout_couleurManager($db);
$liste_couleur=$Mcoul->Afficher();

// $couleur_taille=new atout_taille_couleur_qte($donnees);
$Mcouleur_taille=new atout_taille_couleur_qteManager($db);
$taille_simple=$Mcouleur_taille->getDataRequest(array("atout_taille_couleur_qte"),array("produit_id"=>$_GET['id']),array(),"","atcq_taille",true,"","sum(atcq_qte) as qte,atcq_taille")['data'];
$taille_seul=array();
$taille_enregistree=array();
foreach ($taille_simple as $key => $value) {
array_push($taille_seul, $value->atcq_taille);
array_push($taille_enregistree, $value->atcq_taille.':'.$value->qte);
}

$couleur_simple=$Mcouleur_taille->getDataRequest(array("atout_taille_couleur_qte"),array("produit_id"=>$_GET['id']),array(),"","atcq_couleur",true,"","sum(atcq_qte) as qte,atcq_couleur")['data'];
$couleur_seul=array();
$couleur_enregistree=array();
foreach ($couleur_simple as $key => $value) {
array_push($couleur_seul, $value->atcq_couleur);
array_push($couleur_enregistree, $value->atcq_couleur.':'.$value->qte);
}

$couleur_simple_qte=$Mcouleur_taille->getDataRequest(array("atout_taille_couleur_qte"),array("produit_id"=>$_GET['id']),array())['data'];
$couleur_qte=array();
if(!empty($couleur_simple_qte)){
foreach ($couleur_simple_qte as $key => $value) {
$couleur_qte[$key]=$value->atcq_taille.':'.$value->atcq_couleur.':'.$value->atcq_qte;
}
}
