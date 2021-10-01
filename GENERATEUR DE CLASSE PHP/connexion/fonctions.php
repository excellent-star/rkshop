<?php

//Date en francais ex: 10-10-2019
function isDate($date){
    if(strtotime($date)==false){
        if(CheckFormatDate($date)!=false) 
            $date=CheckFormatDate($date);
        }else{
        $date=DateBdd($date);
    }
    return $date;
}

//Date à afficher en francais
//Date en francais ex: 10/10/2019
function reformatDate($date){
    $tableau=explode('-', $date);
    return $tableau[2].'/'.$tableau[1].'/'.$tableau[0];
}

function DateBdd($date){
    $tableau=explode('-', $date);
    return $tableau[2].'-'.$tableau[1].'-'.$tableau[0];
}
//Date à enregistrer dans la BDD
function formatDate($date){
    $date_array=explode('/', $date);
    return $date_array['2'].'-'.$date_array['1'].'-'.$date_array['0'];
}
//Verifier si c'est une date
function CheckFormatDate($date){
    if(strpos(htmlentities(trim($date)),"/")>1){
       $date_array=explode('/', $date);
       return $date_array['2'].'-'.$date_array['1'].'-'.$date_array['0'];
    }
    else 
        return false;
    
}

//retourne le nombre d'annees par rapport à une date (passée en parametre) 
function getYear($date){
    $diff = abs(strtotime($date) - strtotime(date('Y-m-d')));
    $years = floor($diff / (365*60*60*24));
    return $years;
}

// Le nombre d'annees de mois et de jours entre deux dates
function difference_between_two_dates($date1,$date2)
{
    $diff = abs(strtotime($date2) - strtotime($date1));
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    if ($days==0 and $months!=0 and $years!=0)
        printf("%d mois, %d années", $months, $years);
    else if ($days==0 and $months==0 and $years!=0)
        if ($years==1)
            printf("%d année", $years);
        else
            printf("%d années", $years);
        else if ($days==0 and $months!=0 and $years==0)
            printf("%d mois ", $months);
        else if ($days!=0 and $months!=0 and $years!=0)
            printf("%d jours, %d mois, %d années",$days, $months, $years);
        else if ($days!=0 and $months==0 and $years==0)
        {
            if($days==1)
                printf("%d jour", $days);
            else
                printf("%d jours", $days);
        }
        else if ($days!=0 and $months!=0 and $years==0)
            printf("%d jours, %d mois ",$days, $months);
        else if ($days!=0 and $months==0 and $years!=0)
            printf("%d jours, %d années ",$days, $years);
        else if($days==0 and $months==0 and $years==0)
            printf("0");
}
 function is_nombre($nombre){
    $nombre=strval($nombre);
    $array=array("0","1","2","3","4","5","6","7","8","9",".",",");
    $i=0;
    $trouve=true;
    while ($i<strlen($nombre) && $trouve==true){
      if(!in_array($nombre[$i], $array))
        $trouve=false;
      $i++;
    }
    return $trouve;
 }

 

// public function getIdOfTable($table){
//     $i=columnnames($table);
//     $id=$i[0];
//     return $id;
// }
function uncryptGET($get){
    $_G=array();
    foreach ($get as $key => $value) {
        $k=$this->uncrypt_data($key);
        $v=$this->uncrypt_data($value);
        $_G[$k]=$v;
    }
    return $_G;
}
function uncryptPOST($post){
    $_P=array();
    foreach ($post as $key => $value) {
        $k=$this->uncrypt_data($key);
        $v=$this->uncrypt_data($value);
        $_P[$k]=$v;
    }
    return $_P;
}
function array_isomorphe_complexe(){
    $array=range(0, 66);
    $alphabet=range("a", "z");
    $ALPHABET=range("A", "Z");
    $digit=array('0','1','2','3','4','5','6','7', '8','9');
    $array_letters=array_merge(array(" ","_","-","*"),$alphabet,$ALPHABET,$digit);
    $arr['ensemble']=$array;
    $arr['iso']=$array_letters;
    return $arr;
}
function array_isomorphe(){
    $array=range(0, 55);
    $alphabet=range("a", "z");
    $ALPHABET=range("A", "Z");
    $array_letters=array_merge(array("_","-","*"),$alphabet,$ALPHABET);
    $arr['ensemble']=$array;
    $arr['iso']=$array_letters;
    return $arr;
}
//le chiffrement de Pascal//
function crypt_data($val){
    $array_letters=$this->array_isomorphe_complexe()['iso'];
    $array=$this->array_isomorphe_complexe()['ensemble'];
    $char='';
    $j=0;
    $crypt=array();
    $ch=str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
    $ch=str_shuffle(substr($ch, 45));
    $val.=$ch;
    for($i=0;$i<strlen($val);$i++) {
        foreach ($array_letters as $key => $value) {
            if($val[$i]==$value){
               $mod=intval($key)-(strlen($val)+$j);
               if(intval($mod)<0)
                $mod=count($array_letters)+intval($mod);
               if(intval($mod)<0)
                $mod=count($array_letters)+intval($mod);
               array_push($crypt, $mod);
               $j++;
            }
        }
    }
    foreach ($crypt as $k => $v){
        foreach ($array_letters as $key => $value) {
            if($v==$key){
               $char.="".$value; 
            }
        }
    }
    return $char;
}
function uncrypt_data($val){
    $array_letters=$this->array_isomorphe_complexe()['iso'];
    $array=$this->array_isomorphe_complexe()['ensemble'];
    $char='';
    $j=0;
    $crypt=array();
    for($i=0;$i<strlen($val);$i++) {
        foreach ($array_letters as $key => $value) {
            if($val[$i]==$value){
               $mod=intval($key)+(strlen($val)+$j);
               if($mod>count($array_letters))
                $mod=$mod-count($array_letters);
               if($mod>count($array_letters))
                $mod=$mod-count($array_letters);
               if($mod==count($array_letters))
                $mod=0;
               array_push($crypt, $mod);
               $j++;
            }
        }
    }
    foreach ($crypt as $k => $v){
        foreach ($array_letters as $key => $value) {
            if($v==$key){
               $char.=$value;
            }
        }
    }
    $ch=substr($char, strlen($char)-7);
    $char=str_replace($ch, "", $char);
    return $char;
}

function double_cryptage($val){
    return crypt_data(crypt_data($val));
}

function double_decryptage($val){
    return uncrypt_data(uncrypt_data($val));
}
// Traiter les fichiers images, peut importe le nombre de fichiers d'un formulaire
function treatFile($dossier,$files){
			foreach ($files as $key => $value) {
				$nom=$key;
			}
			$files=$files[$nom];
	        if($files['error']==0){
	        	$temp_name=$files['tmp_name'];
	        	$infoImg=pathinfo($files['name']);
	        	$extension=$infoImg['extension'];
	        	$array=array("jpeg","png","jpg","pdf","doc","txt");
        		$ch=date("Ymdhis");
        		$image_value=$ch.".".$extension;
        		if(in_array(strtolower($extension), $array)){
        			if(!file_exists("../downloaded_images")){
        				mkdir("../downloaded_images");
        		}
            	$dossier='../downloaded_images/'.$dossier;
        		$dossier2='downloaded_images/'.$dossier;
        		if(!file_exists($dossier)){
        			mkdir($dossier);
        		}
        		move_uploaded_file($temp_name,$dossier."/".$image_value);
       		}
       		else{
        		echo "Mauvaise extension";
       		}
        	$image=$image_value;
        	}
        	else
            	$image='';
        	return $image;
        }
//il s'agit d'extraire les données existant dans le tableau1;
// exemple $get=extractArrays(array("A","B","C"),array("A"));
// $get=array("A","B");
function extractArrays($array1,$array2=array()){
            $array3=array();
            foreach ($array1 as $key => $value) {
                if(!in_array($key, $array2))
                    $array3[$key]=$value;
                }
            return $array3;
        }

function montant_xaf($montant){
    if(!empty($montant)){
        if(is_nombre($montant)){
            $montant=strval($montant);
            $montant=strrev($montant);
            $montant_xaf="";
            for($i=0;$i<strlen($montant);$i++){
                $montant_xaf.=$montant[$i];
                if(($i+1)%3==0 && isset($montant[$i+1])){
                    $montant_xaf.=".";
                }
            }
            $montant_xaf=strrev($montant_xaf);
        }else
            $montant_xaf=$montant;
    }else
        $montant_xaf="";
    return $montant_xaf;
}

function montant_xaf_space($montant){
    if(!empty($montant)){
        if(is_nombre($montant)){
            $montant=strval($montant);
            $montant=strrev($montant);
            $montant_xaf="";
            for($i=0;$i<strlen($montant);$i++){
                $montant_xaf.=$montant[$i];
                if(($i+1)%3==0 && isset($montant[$i+1])){
                    $montant_xaf.=" ";
                }
            }
            $montant_xaf=strrev($montant_xaf);
        }else
            $montant_xaf=$montant;
    }else
        $montant_xaf="";
    return $montant_xaf;
}

function montantRemoveSpace($montant){
    $montant_xaf=0;
    if(!empty($montant)){
        $montant=explode(' ', $montant);
        $montant=implode('', $montant);
        $montant_xaf=floatval($montant);
    }
    return $montant_xaf;
}

//fonction de pagination
function pagination_php($count_elements,$current_page=""){
        $perPage=6;
        $npage=ceil($count_elements/$perPage);
        if(isset($current_page) and !empty($current_page) and ctype_digit($current_page)==1){
            if($current_page>$npage){
                $current=$npage;
            }else
                $current=$current_page;

        }else{
            $current=1;
        }
        $firstPage=($current-1)*$perPage;
        $result['firstPage']=$firstPage;
        $result['current']=$current;
        $result['npage']=$npage;
        $result['perPage']=$perPage;
        return $result;
}

//Converti une chaine de caractère en un nombre à virgule (float)
function convertFloatVal($val){
    if(strpos(htmlentities(trim($val)),",")==1)
        $val=str_replace(",", ".", $val);
    $val=floatval($val);
    return $val;
}
// class A
// {
// 	use fonctions;
// }
// $a=new A();
// $date=date("Ymdhis",time());
// var_dump($a->uncrypt_data($val='pascal'));
// $date=date("Ymdhis");
// var_dump($date);
// if(!empty($_FILES)){
// 	// var_dump($_FILES);
// 	var_dump($a->treatFile($dossier='etudiant',$_FILES));
// }
 ?>
<!--  <form enctype="multipart/form-data" method="POST" action="">
 	<input type="file" name="fichier">
 	<button type="submit">VALIDER</button>
 </form> -->