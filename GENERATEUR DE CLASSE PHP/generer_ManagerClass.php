<?php 
include 'connexion/init.php';
$return='<a href="index.php">RETOUR</a><br><br>';
// echo $return;
$classe_name=$_GET['classe_name'];
$tables=allTables();


$field=columnnames($classe_name);

$getField1=array();
foreach ($field as $key => $value) {
  if($key>0)
    array_push($getField1, "$".$classe_name."->trim(get".ucfirst($value)."())");
}

$getField2=array();
foreach ($field as $key => $value) {
  if($key>0)
    array_push($getField2, "trim($".$classe_name."->get".ucfirst($value)."())");
}
$Field1=array();
foreach ($field as $key => $v) {
  if($key>0)
    array_push($Field1, $v);
}
$Field2=array();
foreach ($field as $key => $v) {
  if($key>0)
    array_push($Field2, "'".$v."'");
}
// var_dump();
$postExemple=implode('=>$valeur, ', $Field2).'=>$valeur ';
$getField=array();
foreach ($field as $key => $value) {
  array_push($getField, "$".$classe_name."->trim(get".ucfirst($value)."())");
}

$str='';
$strAll='';
$classes='';
// var_dump($_GET['table_fille']);
if(!empty($_GET['table_fille'])){
  $str=array();
  $strAll=array();
  $conditions=$classe_name;
  $table_etranger=$_GET['table_fille'];
  $arr=explode(',', $table_etranger);
  foreach ($arr as $key => $value) {
     $fieldE=columnnames($value)[0];
     $classes.=','.$value;
     if($key>0)
      $conditions.=' AND '.$value.'.'.$fieldE.'='.$classe_name.'.'.$fieldE.' ';
    else
      $conditions.='.'.$fieldE.'='.$value.'.'.$fieldE.' ';
     array_push($str, !empty($fieldE)?" AND ".$fieldE." IN (SELECT ".$fieldE." FROM ".$value.")":"");
     array_push($strAll, !empty($fieldE)?" ".$fieldE." IN (SELECT ".$fieldE." FROM ".$value.")":"");
   } 
   $str=implode(' ', $str); 
   $strAll=" WHERE ".implode(' AND ', $strAll); 
   $classes=" ".$classes." WHERE ".$conditions;
}

$str1='';
$strAll1='';
$classes1='';
if(!empty($_GET['table_etranger'])){
  $str1=array();
  $strAll1=array();
  $conditions1=$classe_name;
  $table_etranger1=$_GET['table_etranger'];
  $arr1=explode(',', $table_etranger1);
  foreach ($arr1 as $key1 => $value1) {
    $champs=columnnames($value1);
    if(!empty($champs)){
     $fieldE1=$champs[0];
     $classes1.=','.$value1;
     if($key1>0)
      $conditions1.=' AND '.$value1.'.'.$fieldE1.'='.$classe_name.'.'.$fieldE1.' ';
    else
      $conditions1.='.'.$fieldE1.'='.$value1.'.'.$fieldE1.' ';
     array_push($str1, !empty($fieldE1)?" AND ".$fieldE1." IN (SELECT ".$fieldE1." FROM ".$value1.")":"");
     array_push($strAll1, !empty($fieldE1)?" ".$fieldE1." IN (SELECT ".$fieldE1." FROM ".$value1.")":"");
   }
   } 
   $str1=implode(' ', $str1); 
   $strAll1=" WHERE ".implode(' AND ', $strAll1); 
   $classes1=" ".$classes1." WHERE ".$conditions1;

}
// var_dump($str1);
// $str2=!empty($str1)&&empty($str)?$str1:$str;
// var_dump($str2);
if(!empty($str1) && !empty($str)){
	// var_dump($str1);
	// var_dump($str);
	$str2=$str;
	// var_dump($strAll1);
	// var_dump($strAll);
	// var_dump($classes);
	// var_dump($classes1);
	$classes2=", ".$table_etranger1.$classes." AND ".$conditions1;
	// var_dump($classes2);
}

  $retourner='!empty($'.$classe_name.')?$'.$classe_name.':[]';
// var_dump($classes);
// var_dump($conditions);
  $classe= '//Class Manager permettant de manipuler la classe '.ucfirst($classe_name).' </br>';
  $classe.=' class '.ucfirst($classe_name).'Manager{ <br>';
  $classe.='<span style="margin-left: 15px;"> use db;</span><br>';
  $classe.= '//l\'instance de la connexion à la base de donnees  </br>';
  
  $classe.='<span style="margin-left: 15px;"> private $bdd;</span><br>';

  $classe.='<br>';
  $classe.= '//Constructeur avec un seul parametre: l\'objet de la bdd </br>';

  $classe.='<span style="margin-left: 15px;">public function __construct($bdd){ </span><br>';
  $classe.='<span style="margin-left: 25px;">$this->setBdd($bdd); </span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';
  $classe.='<br>';

  $classe.= '//Fonction enregistrer permettant d\'enregistrer ou d\'ajouter une ligne.   </br>';
  $classe.= '//Le parametre est forcement un objet de la classe '.ucfirst($classe_name).', generalement, c\'est le $_POST, c\'est un tableau a clef valeur qui est d\'abord passer par la classe  '.ucfirst($classe_name).'  </br>';
  $classe.= '//Exemple: $M'.ucfirst($classe_name)[0].'=new Manager'.ucfirst($classe_name).'($bdd)   </br>';
  $classe.= '//Exemple: $'.ucfirst($classe_name)[0].'=new '.ucfirst($classe_name).'(array('.$postExemple.'))   </br>';
  $classe.= '//Exemple: $'.ucfirst($classe_name)[0].'=$M'.ucfirst($classe_name)[0].'->Enregistrer($'.ucfirst($classe_name)[0].')   </br>';
  $classe.='<span style="margin-left: 15px;"> public function Enregistrer('.ucfirst($classe_name).' $'.$classe_name.'){</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array(</span>';
  $classe.='<span>'.implode(',', $getField2).');</span><br>';
  $classe.='<span style="margin-left: 25px;">$sql="SELECT * FROM '.$classe_name.' WHERE '.implode('=? AND ', $Field1).'=?";</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q1=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q1->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">$donnees=$Q1->fetch(PDO::FETCH_ASSOC);</span><br>';
  $classe.='<span style="margin-left: 25px;">$retour=!empty($donnees)?-1:0;</span><br>';
  $classe.= '//Verifier si les donnees existent deja sinon, il enregistre.  </br>';
  $classe.='<span style="margin-left: 25px;">if(empty($donnees)){</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="INSERT INTO '.$classe_name.' SET '.implode('=?, ', $Field1).'=?";</span><br>';
  $classe.='<span style="margin-left: 35px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 35px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 35px;">$retour=$this->bdd->lastInsertId();</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.= '//Ainsi cette fonction retourne -1 si les donnees existent deja dans la bdd, sinon s\'il retourne -1, alors une ligne a ete inseree sinon (c-a-d 0 ) si la ligne nest pas inseree.  </br>';
  $classe.='<span style="margin-left: 25px;">return $retour;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br></br>';

  $classe.= '//Afficher() toutes les lignes de la bdd, les resultats sont renvoyes en forme de plusieurs tableaux;   </br>';
  $classe.= '//Afficher($id=2) Renvoie une ligne specifiee par son identifiant en parametre; le resultat renvoye est un tableau.   </br>';
  $classe.='<span style="margin-left: 15px;"> public function Afficher($id=""){</span><br>';
  $classe.='<span style="margin-left: 25px;">if(empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.' WHERE '.$field[0].'=?";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">if(!empty($id)){</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetch(PDO::FETCH_ASSOC);</span><br>';
  $classe.='<span style="margin-left: 35px;">$'.$classe_name.' =!empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">while($donnees=$Q->fetch(PDO::FETCH_ASSOC))</span><br>';
  $classe.='<span style="margin-left: 45px;">$'.$classe_name.'[] = !empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">return '.$retourner.';</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';
  if(!empty($str) && empty($str1)):
  $classe.= '//Contrairement a la fonction Afficher() qui affiche toutes les lignes sans tenir compte des clefs etrangeres, cette fonction (AfficherEtranger()) n\'affiche que les lignes dans la table mere existe...   </br>';
  $classe.= '//AfficherEtranger(),  toutes les lignes de la bdd, les resultats sont renvoyes en forme de plusieurs tableaux;   </br>';
  $classe.= '//Afficher($id=2) Renvoie une ligne specifiee par son identifiant en parametre; le resultat renvoye est un tableau.   </br>';
  $classe.='<span style="margin-left: 15px;"> public function AfficherEtranger($id=""){</span><br>';
  $classe.='<span style="margin-left: 25px;">if(empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.$strAll.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM classe WHERE '.$field[0].'=? '.$str.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">if(!empty($id)){</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetch(PDO::FETCH_ASSOC);</span><br>';
  $classe.='<span style="margin-left: 35px;">$'.$classe_name.' =!empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">while($donnees=$Q->fetch(PDO::FETCH_ASSOC))</span><br>';
  $classe.='<span style="margin-left: 45px;">$'.$classe_name.'[] =!empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">return '.$retourner.';</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';

  $classe.= '//Contrairement a la fonction Afficher() et AfficherEtranger() qui renvoie les attributs privees, aux quels on ne peut y acceder que par des accesseurs ou getter, cette fonction (AfficherTous()) renvoie les attributs ou proprietes publiques...   </br>';

  $classe.='<span style="margin-left: 15px;"> public function AfficherTous($id=""){</span><br>';
  $classe.='<span style="margin-left: 25px;">if(empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.' '.$classes.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.' '.$classes.' AND '.$field[0].'=?";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">if(!empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetch(PDO::FETCH_OBJ);</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetchAll(PDO::FETCH_OBJ);</span><br>';
  $classe.='<span style="margin-left: 25px;">return $donnees;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';
  endif;
  if(!empty($str) && !empty($str1)):
  $classe.= '//Contrairement a la fonction Afficher() qui affiche toutes les lignes sans tenir compte des clefs etrangeres, cette fonction (AfficherEtranger()) n\'affiche que les lignes dans la table mere existe...   </br>';
  $classe.= '//AfficherEtranger(),  toutes les lignes de la bdd, les resultats sont renvoyes en forme de plusieurs tableaux;   </br>';
  $classe.= '//Afficher($id=2) Renvoie une ligne specifiee par son identifiant en parametre; le resultat renvoye est un tableau.   </br>';
  $classe.='<span style="margin-left: 15px;"> public function AfficherEtranger($id=""){</span><br>';
  $classe.='<span style="margin-left: 25px;">if(empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.$strAll.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM classe WHERE '.$field[0].'=? '.$str.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">if(!empty($id)){</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetch(PDO::FETCH_ASSOC);</span><br>';
  $classe.='<span style="margin-left: 35px;">$'.$classe_name.' =!empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">while($donnees=$Q->fetch(PDO::FETCH_ASSOC))</span><br>';
  $classe.='<span style="margin-left: 45px;">$'.$classe_name.'[] =!empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">return '.$retourner.';</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';

  $classe.= '//Contrairement a la fonction Afficher() et AfficherEtranger() qui renvoie les attributs privees, aux quels on ne peut y acceder que par des accesseurs ou getter, cette fonction (AfficherTous()) renvoie les attributs ou proprietes publiques...   </br>';

  $classe.='<span style="margin-left: 15px;"> public function AfficherTous($id=""){</span><br>';
  $classe.='<span style="margin-left: 25px;">if(empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.' '.$classes2.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.' '.$classes2.' AND '.$field[0].'=?";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">if(!empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetch(PDO::FETCH_OBJ);</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetchAll(PDO::FETCH_OBJ);</span><br>';
  $classe.='<span style="margin-left: 25px;">return $donnees;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';
  endif;
  if(!empty($str1) && empty($str)):
  	$strAll1='';
  	$str1='';
  	$classe.= '//Contrairement a la fonction Afficher() qui affiche toutes les lignes sans tenir compte des clefs etrangeres, cette fonction (AfficherEtranger()) n\'affiche que les lignes dans la table mere existe...   </br>';
  $classe.= '//AfficherEtranger(),  toutes les lignes de la bdd, les resultats sont renvoyes en forme de plusieurs tableaux;   </br>';
  $classe.= '//Afficher($id=2) Renvoie une ligne specifiee par son identifiant en parametre; le resultat renvoye est un tableau.   </br>';
  $classe.='<span style="margin-left: 15px;"> public function AfficherEtranger($id=""){</span><br>';
  $classe.='<span style="margin-left: 25px;">if(empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.$strAll1.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM classe WHERE '.$field[0].'=? '.$str1.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">if(!empty($id)){</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetch(PDO::FETCH_ASSOC);</span><br>';
  $classe.='<span style="margin-left: 35px;">$'.$classe_name.' =!empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">while($donnees=$Q->fetch(PDO::FETCH_ASSOC))</span><br>';
  $classe.='<span style="margin-left: 45px;">$'.$classe_name.'[] =!empty($donnees)?new '.ucfirst($classe_name).'($donnees):array();</span><br>';
  $classe.='<span style="margin-left: 25px;">return '.$retourner.';</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';

  $classe.= '//Contrairement a la fonction Afficher() et AfficherEtranger() qui renvoie les attributs privees, aux quels on ne peut y acceder que par des accesseurs ou getter, cette fonction (AfficherTous()) renvoie les attributs ou proprietes publiques...   </br>';

  $classe.='<span style="margin-left: 15px;"> public function AfficherTous($id=""){</span><br>';
  $classe.='<span style="margin-left: 25px;">if(empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.' '.$classes1.'";</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$sql="SELECT * FROM '.$classe_name.' '.$classes1.' AND '.$field[0].'=?";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">if(!empty($id))</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetch(PDO::FETCH_OBJ);</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$donnees=$Q->fetchAll(PDO::FETCH_OBJ);</span><br>';
  $classe.='<span style="margin-left: 25px;">return $donnees;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';
endif;
  $classe.='<span style="margin-left: 15px;"> public function Supprimer($id){</span><br>';
  $classe.='<span style="margin-left: 25px;">$sql="DELETE  FROM '.$classe_name.' WHERE '.$field[0].'=?";</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array($id);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">return $Q->rowCount();</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='</br>';
  $classe.='</br>';

// var_dump($getField1);

  $classe.='<span style="margin-left: 15px;"> public function Modifier('.ucfirst($classe_name).' $'.$classe_name.'){</span><br>';
  $classe.='<span style="margin-left: 25px;">$array=array(</span>';
  $classe.='<span>'.implode(',', $getField2).' ,$'.$classe_name.'->get'.ucfirst($field[0]).'());</span><br>';
  $classe.='<span style="margin-left: 25px;">$sql="UPDATE '.$classe_name.' SET '.implode('=?, ', $Field1).'=? WHERE '.$field[0].'=?";</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q=$this->bdd->prepare($sql);</span><br>';
  $classe.='<span style="margin-left: 25px;">$Q->execute($array);</span><br>';
  $classe.='<span style="margin-left: 25px;">return $Q->rowCount();</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';
  $classe.='<br>';
  
  $classe.='<span style="margin-left: 15px;"> public function setBdd(PDO $bdd){</span><br>';
  $classe.='<span style="margin-left: 25px;">$this->bdd=$bdd;</span></br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';

  $classe.='<span style="margin-left: 15px;"> public function AlertEnregistrer($valeur){</span><br>';
  $classe.='<span style="margin-left: 25px;">$alert=\'\';</span><br>';
  $classe.='<span style="margin-left: 25px;">if($valeur>=1){</span><br>';
  $classe.='<span style="margin-left: 35px;">$alert=\'&lt;div class="alert alert-success alert-dismissible"></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;a href="#" class="close" data-dismiss="alert" aria-label="close">'.htmlspecialchars("&times;").'&lt;/a></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;strong>Succès!&lt;/strong>'.$classe_name.' enregistre avec succès.&lt;/div>\';</span><br>';
  $classe.='<span style="margin-left: 25px;">}else if($valeur==-1){</span><br>';
  $classe.='<span style="margin-left: 35px;">$alert=\'&lt;div class="alert alert-danger alert-dismissible">&lt;/span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;a href="#" class="close" data-dismiss="alert" aria-label="close">'.htmlspecialchars("&times;").'&lt;/a></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;strong>Echec!&lt;/strong>Ces informations existent déjà!!.&lt;/div>\';</span><br>';
  $classe.='<span style="margin-left: 25px;">}else{</span><br>';
  $classe.='<span style="margin-left: 35px;">$alert=\'&lt;div class="alert alert-danger alert-dismissible">&lt;/span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;a href="#" class="close" data-dismiss="alert" aria-label="close">'.htmlspecialchars("&times;").'&lt;/a></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;strong>Echec!&lt;/strong>Erreur,'.$classe_name.' non enregistre.&lt;/div>\';</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">return $alert;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';
  $classe.='<br>';


  $classe.='<span style="margin-left: 15px;"> public function AlertSupprimer($valeur){</span><br>';
  $classe.='<span style="margin-left: 25px;">$alert=\'\';</span><br>';
  $classe.='<span style="margin-left: 25px;">if($valeur>=1){</span><br>';
  $classe.='<span style="margin-left: 35px;">$alert=\'&lt;div class="alert alert-success alert-dismissible"></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;a href="#" class="close" data-dismiss="alert" aria-label="close">'.htmlspecialchars("&times;").'&lt;/a></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;strong>Succès! &lt;/strong>'.$classe_name.' supprimée avec succès.&lt;/div>\';</span><br>';
  $classe.='<span style="margin-left: 25px;">}else{</span><br>';
  $classe.='<span style="margin-left: 35px;">$alert=\'&lt;div class="alert alert-danger alert-dismissible"></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;a href="#" class="close" data-dismiss="alert" aria-label="close">'.htmlspecialchars("&times;").'&lt;/a></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;strong>Echec!&lt;/strong>'.$classe_name.' non supprimee.&lt;/div>\';</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">return $alert;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';
  $classe.='<br>';
  

  $classe.='<span style="margin-left: 15px;"> public function AlertModifier($valeur){</span><br>';
  $classe.='<span style="margin-left: 25px;">$alert=\'\';</span><br>';
  $classe.='<span style="margin-left: 25px;">if($valeur>=1){</span><br>';
  $classe.='<span style="margin-left: 35px;">$alert=\'&lt;div class="alert alert-success alert-dismissible"></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;a href="#" class="close" data-dismiss="alert" aria-label="close">'.htmlspecialchars("&times;").'&lt;/a></span><br>';
  $classe.='<span style="margin-left: 35px;"><strong>Succès!</strong>'.$classe_name.' modifiee avec succès.&lt;/div>\';</span><br>';
  $classe.='<span style="margin-left: 25px;">}else{</span><br>';
  $classe.='<span style="margin-left: 35px;">$alert=\'&lt;div class="alert alert-danger alert-dismissible">&lt;/span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;a href="#" class="close" data-dismiss="alert" aria-label="close">'.htmlspecialchars("&times;").'&lt;/a></span><br>';
  $classe.='<span style="margin-left: 35px;">&lt;strong>Echec!&lt;/strong>Aucune modification apportée.&lt;/div>\';</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">return $alert;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';
  $classe.='<br>';
  $classe.='<span style="margin-left: 15px;">public function getRow($query, $params=array()){</span><br>';
  $classe.='<span style="margin-left: 25px;">return $this->get_row($this->bdd,$query, $params);</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';

  $classe.='<span style="margin-left: 15px;">public function getRows($query, $params=array()){</span><br>';
  $classe.='<span style="margin-left: 25px;">return $this->get_rows($this->bdd,$query, $params);</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';

  $classe.='<span style="margin-left: 15px;">public function insertRow($query, $params){</span><br>';
  $classe.='<span style="margin-left: 25px;">return $this->insert_row($this->bdd,$query, $params);</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';

  $classe.='<span style="margin-left: 15px;">public function updateRow($query, $params){</span><br>';
  $classe.='<span style="margin-left: 25px;">return $this->insertRow($query, $params);</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';

  $classe.='<span style="margin-left: 15px;">public function updateRow1($query, $params){</span><br>';
  $classe.='<span style="margin-left: 25px;">return $this->update_row($this->bdd,$query, $params);</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';

  $classe.='<span style="margin-left: 15px;">public function deleteRow($query, $params){</span><br>';
  $classe.='<span style="margin-left: 25px;">return $this->insertRow($query, $params);</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';

  $classe.='<span style="margin-left: 15px;">function getDataRequest($table=array(),$data_array=array(),$limit=array(),$order_by=\'\',$group_by=\'\', $plusieurs_lignes=true,$add_condition=\'\',$attributs_select=\'\' ,$order_by_f=false,$group_by_f=false){</span><br>';
  $classe.='<span style="margin-left: 25px;">$values=jointure($table,$data_array,$limit,$order_by,$group_by, $plusieurs_lignes,$add_condition,$attributs_select,$this->bdd ,$order_by_f,$group_by_f);</span><br>';
  $classe.='<span style="margin-left: 25px;">if($plusieurs_lignes==true)</span><br>';
  $classe.='<span style="margin-left: 35px;">$getrows=$this->getRows($values[\'sql\'],$values[\'array_values\']);</span><br>';
  $classe.='<span style="margin-left: 25px;">else</span><br>';
  $classe.='<span style="margin-left: 35px;">$getrows=$this->getRow($values[\'sql\'],$values[\'array_values\']);</span><br>';
  $classe.='<span style="margin-left: 25px;">$getrow[\'sql\']=$values[\'sql\'];</span><br>';
  $classe.='<span style="margin-left: 25px;">$getrow[\'values\']=$values[\'array_values\'];</span><br>';
  $classe.='<span style="margin-left: 25px;">$getrow[\'data\']=$getrows;</span><br>';
  $classe.='<span style="margin-left: 25px;">return $getrow;</span><br>';
  $classe.='<span style="margin-left: 15px;">}</span><br>';
  $classe.='<br>';
  

  $classe.='}';
echo $classe;

// $filename = $classe_name.'.class.php';
//  header("Cache-Control: public");
//  header("Content-Description: File Transfer");
//  header("Content-Disposition: attachment; filename=$filename");
//  header("Content-Type: application/octet-stream; ");
//  header("Content-Transfer-Encoding: binary");
// $myFile = "filename.php"; // or .php   
// $fh = fopen($myFile, 'w'); // or die("error");  
// $stringData = $classe;   
// fwrite($fh, $stringData);
// fclose($fh);
 ?>