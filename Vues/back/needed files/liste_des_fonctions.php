<?php
function getVisIpAddr() {
     
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

function statusCommande($status){
$retour='';
if($status=='0')
$retour="Envoyée";
else if($status=='1')
$retour="En cours";
else if($status=='2')
$retour="Livrée";
else if($status=='3')
$retour="Annulée";

return $retour;
}
function label($status){
$retour='';
if($status=='0')
$retour="class='label label-primary'";
else if($status=='1')
$retour="class='label label-info'";
else if($status=='2')
$retour="class='label label-success'";
else if($status=='3')
$retour="class='label label-danger'";

return $retour;
}

function code($val){
    $retour='';
    if(!empty($val)){
        $val=strval($val);
        if(strlen($val)==1)
            $retour="AD-C00000".$val;
        else if(strlen($val)==2)
            $retour="AD-C0000".$val;
        else if(strlen($val)==3)
            $retour="AD-C000".$val;
        else if(strlen($val)==4)
            $retour="AD-C00".$val;
        else if(strlen($val)==5)
            $retour="AD-C0".$val;
        else
            $retour="AD-C".$val;
    }
    return $retour;  
}

function activer($p){
$retour='';
if(!empty($_GET['p'])){
if($_GET['p']==$p)
$retour='active';
}
return $retour;
}

function checked($libelle,$tableau){
$retour='';
// var_dump($tableau);
$libelle=str_replace(' ', '_', $libelle);
if(in_array($libelle, $tableau))
$retour='checked=""';
return $retour;

}

function value($libelle,$tableau1){
$retour='';
if(!empty($tableau1)){
foreach ($tableau1 as $key => $value) {
$v=explode(':', $value);
$v[0]=str_replace('_', ' ', $v[0]);
$libelle=str_replace('_', ' ', $libelle);
if(!empty($v[1])){
if($v[0]==$libelle){
$retour=$v[1];
}
}
}
}
return $retour;
}
 function valueCouleur($taille,$couleur,$tableau1){
$retour='';
if(!empty($tableau1)){
foreach ($tableau1 as $key => $value) {
$v=explode(':', $value);
$v[0]=str_replace('_', ' ', $v[0]);
$v[1]=str_replace('_', ' ', $v[1]);
$couleur=str_replace('_', ' ', $couleur);
$taille=str_replace('_', ' ', $taille);
if(!empty($v[2])){
if($v[1]==$couleur && $taille==$v[0]){
$retour=$v[2];
}
}
}
}
return $retour;
}

 function checkedCouleur($taille,$couleur,$tableau1){
$retour='';
if(!empty($tableau1)){
foreach ($tableau1 as $key => $value) {
$v=explode(':', $value);
$v[0]=str_replace('_', ' ', $v[0]);
$v[1]=str_replace('_', ' ', $v[1]);
$couleur=str_replace('_', ' ', $couleur);
$taille=str_replace('_', ' ', $taille);
if(!empty($v[2])){
if($v[1]==$couleur && $taille==$v[0]){
$retour='checked=""';
}
}
}
}
return $retour;
}

function connected_client(){
$retour=false;
if(!empty($_SESSION)){
if(!empty($_SESSION['nom']) && !empty($_SESSION['email']) && !empty($_SESSION['id'])){
if($_SESSION['profil']=='0' && !empty($_SESSION['app']))
if($_SESSION['app']=='atouts_de_dames')
$retour=true;
}
}
return $retour;
}

function connected_user(){
$retour=false;
if(!empty($_SESSION)){
if(!empty($_SESSION['nom']) && !empty($_SESSION['email']) && !empty($_SESSION['id']) && !empty($_SESSION['app'])){
if(!empty($_SESSION['profil']) && $_SESSION['app']=='atouts_de_dames')
$retour=true;
}
}
return $retour;
}

function recherche($elt,$tableau,$qte){
$tableau_key=array_keys($tableau);
$t='';
if(in_array($elt, $tableau_key)){
if(!empty($tableau[$elt])){
$sepate=explode(':', $tableau[$elt]);
$quantite=!empty($sepate[1])?$sepate[1]:0;
$quantite=intval($qte)+intval($quantite);
$t=$elt.':'.$quantite;
}else
$t=$elt.':'.$qte;
}else
$t=$elt.':'.$qte;
return $t;
}

function rechercheCouleur($taille){
global $couleurTailleSession;
$couleur_qte=array();
if(!empty($couleurTailleSession)){
foreach ($couleurTailleSession as $key => $value) {
if($taille==$value[0])
$couleur_qte[$key]=$value[0].':'.$value[2].':'.$value[1];
}
}
return $couleur_qte;
}

function client($valeur){
global $informations_client;
$retour='';
if(!empty($informations_client)){
$funct='getClient_'.$valeur;
if(!empty($informations_client->$funct())){
$retour=$informations_client->$funct();
}
}
return $retour;
}

function livraison($valeur){
global $liste_livraison;
$retour='';
if(!empty($liste_livraison)){
$funct='getLivraison_'.$valeur;
if(!empty($liste_livraison->$funct())){
$retour=$liste_livraison->$funct();
}
}
return $retour;
}

function roue($valeur){
global $liste_roue;
$retour='';
if(!empty($liste_roue)){
$funct='getRoue_'.$valeur;
if(!empty($liste_roue->$funct())){
$retour=$liste_roue->$funct();
}
}
return $retour;
}
function temoignage($valeur){
global $liste_temoignage;
$retour='';
if(!empty($liste_temoignage)){
$funct='getTemoignage_'.$valeur;
if(!empty($liste_temoignage->$funct())){
$retour=$liste_temoignage->$funct();
}
}
return $retour;
}

function user($valeur){
global $liste_user;
$retour='';
if(!empty($liste_user)){
$funct='getUser_'.$valeur;
if(!empty($liste_user->$funct())){
$retour=$liste_user->$funct();
}
}
return $retour;
}
function publicite($valeur){
global $liste_publicite;
$retour='';
if(!empty($liste_publicite)){
$funct='getPublicite_'.$valeur;
if(!empty($liste_publicite->$funct())){
$retour=$liste_publicite->$funct();
}
}
return $retour;
}
function apropos($valeur){
global $liste_apropos;
$retour='';
if(!empty($liste_apropos)){
$funct='getApropos_'.$valeur;
if(!empty($liste_apropos->$funct())){
$retour=$liste_apropos->$funct();
}
}
return $retour;
}

function premier($lettre){
    return '<span class="dropcaps drop-primary drop-circle">'.strtoupper($lettre).'</span>';
}

function premiereLettre($content){
    $first=strip_tags($content)[0];
    $val=strpos($content, '>'.$first);
    $str=substr_replace($content,premier($first),$val+1,1);
    return $str;
}
function cuttexte($contenu, $pos){
$str='';
// var_dump(trim($contenu));
if (!empty($contenu) && !empty(trim($contenu))){
if(strlen(strip_tags($contenu))>intval($pos))
$str=substr(strip_tags($contenu), 0,$pos).'...';
else
$str=substr(strip_tags($contenu), 0,$pos);
// $first=strip_tags($contenu)[0];
// $val=strpos($contenu, '>'.$first);
// $str=substr_replace($str,premier($first),$val+1,1);
}

return $str;
}
function limitLettre($content,$pos){
$str='';

if(!empty($content)){
    $first=strip_tags($content)[0];
    $val=strpos($content, '>'.$first);
    // $str=substr_replace($content,premier($first),$val+1,1);
    $str=substr_replace($content,$str,0,$pos);
    }
    return $str;
}

function isVideo($name){
    $retour=false;
    $array=array("mp4","mov","3gp","mpeg");
    if(!empty($name)){
        $extension=explode('.', $name);
        $ext=end($extension);
        $ext=strtolower($ext);
        if(in_array($ext, $array))
            $retour=true;
    }
    return $retour;
}
function isImage($name){
    $retour=false;
    $array=array("gif","tif","jpg","jpeg","png");
    if(!empty($name)){
        $extension=explode('.', $name);
        $ext=end($extension);
        $ext=strtolower($ext);
        if(in_array($ext, $array))
            $retour=true;
    }
    return $retour;
}

function isChecked($libelle,$tableau){
$retour='';
if(in_array($libelle, $tableau))
$retour='checked=""';
return $retour;

}

function lien($lien){
    $retour='style="display: none;"';
    global $les_droits;
    if(!empty($les_droits)){
    foreach ($les_droits as $key => $value) {
        if($lien==$value){
            $retour='';
        }
    }
    }
    return $retour;
}

function active($libelle){
$retour="";
global $active;
// $array=array("tableaudebord","commandes","monpanier","detailcompte","deconnexion");
// foreach ($array as $key => $value) {
if($active==$libelle)
$retour="active";
// }
return $retour;
}

function limit_texte($texte,$limit=125){
    $str='';
    $trouve=false;
    if(!empty($texte)){
    $i=intval($limit)-5;
    while ($i<=130 and !$trouve){
    if(!empty($texte[$i])){
    if($texte[$i]==' '){
    $trouve=true;
    }
    }
    $i++;
    }
    if(strlen($texte)>$limit)
        $str=substr_replace($texte, '<b>...</b>',$i);
        else
        $str=$texte;
    }
    return $str;
}
 
function rating($val){
    $str='';
    if(empty($val))
    $val=0;
    $val=floatval($val);
    // if(!empty($val)){
        for($i=0;$i<intval($val);$i++){
            $str.='<i class="fa fa-star"></i>';
        }
        if($val>intval($val)){
        $str.='<i class="fa fa-star-half-o"></i>';
        if(intval($val)+1<5){
            for($i=intval($val)+1;$i<5;$i++){
                $str.='<i class="fa fa-star-o"></i>';
           }
       }
   }
   else{
        if(intval($val)<5){
           for($i=intval($val);$i<5;$i++){
               $str.='<i class="fa fa-star-o"></i>';
           }
        }
       }
       
    // }
    return $str;
}


 ?>