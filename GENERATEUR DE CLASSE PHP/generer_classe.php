<?php 
// $return='<a href="index.php">RETOUR</a><br><br>';
// echo $return;
include 'connexion/init.php';
echo '<a href="index">RETOUR</a></br>';
if(!empty($_POST['type']) && $_POST['type']=="1"){

$classe_name=!empty($_POST['classe_name'])?$_POST['classe_name']:"";
$table_fille=!empty($_POST['table_fille'])?$_POST['table_fille']:"";
$field=columnnames($classe_name);
$classe=' class '.ucfirst($classe_name).'{ <br>';
  foreach ($field as $key => $val) {
    $classe.='<span style="margin-left: 15px;"> private $'.$val.';</span><br>';
  }
  $classe.='<br>';
  $classe.='<span style="margin-left: 25px;">public function __construct(array $donnees){ </span><br>';
  $classe.='<span style="margin-left: 25px;">$this->hydrate($donnees); </span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<br>';
  $classe.='<span style="margin-left: 25px;">public function hydrate(array $donnees){</span><br>';
  $classe.='<span style="margin-left: 35px;">foreach($donnees as $key => $value){</span><br>';
  $classe.='<span style="margin-left: 45px;">$method = \'set\'.ucfirst($key);</span><br>';
  $classe.='<span style="margin-left: 45px;">if(method_exists($this, $method))</span><br>';
  $classe.='<span style="margin-left: 45px;">{</span><br>';
  $classe.='<span style="margin-left: 45px;">$this->$method($value);</span></span><br>';
  $classe.='<span style="margin-left: 45px;">}</span><br>';
  $classe.='<span style="margin-left: 35px;">}</span><br>';
  $classe.='<span style="margin-left: 25px;">}</span><br>';
  $classe.='<br>';
  foreach ($field as $key => $val) {
    $classe.='<span style="margin-left: 25px;">public function get'.ucfirst($val).'(){ </span><br>';
    $classe.='<span style="margin-left: 35px;">return $this->'.$val.';</span><br>';
    $classe.='<span style="margin-left: 25px;">}</span><br>';
    $classe.='<br>';
  }
  $classe.='<br>';
  foreach ($field as $key => $val) {
    $classe.='<span style="margin-left: 25px;">public function set'.ucfirst($val).'($'.$val.'){ </span><br>';
    $classe.='<span style="margin-left: 35px;"> $this->'.$val.'=$'.$val.';</span><br>';
    $classe.='<span style="margin-left: 25px;">}</span><br>';
    $classe.='<br>';
  }
$classe.='}';
echo $classe;
}else{
  header("location:generer_ManagerClass?classe_name=".$_POST['classe_name']."&table_etranger=".$_POST['table_etranger']."&table_fille=".$_POST['table_fille']);
}
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