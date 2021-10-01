<?php 
class fonctions{


public function is_nombre($nombre){
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

public function montant_xaf($montant){
    if(!empty($montant)){
        if($this->is_nombre($montant)){
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

function isDate($date){
    if(strtotime($date)==false){
        if(CheckFormatDate($date)!=false) 
            $date=CheckFormatDate($date);
        }else{
        $date=DateBdd($date);
    }
    return $date;
}

function reformatDate($date){
    $tableau=explode('-', $date);
    return $tableau[2].'/'.$tableau[1].'/'.$tableau[0];
}

function dateFrancais($laDate){
  if(!empty($laDate)){
    $date=explode('-',$laDate);
    $d=!empty($date[2])?$date[2]:"00";
    $m=!empty($date[1])?$date[1]:"00";
    $y=!empty($date[0])?$date[0]:"0000";
    $dmy=$d."/".$m."/".$y;
  }else
  $dmy="";
    return $dmy;
}

function DateBdd($date){
    $tableau=explode('-', $date);
    return $tableau[2].'-'.$tableau[1].'-'.$tableau[0];
}
function formatDate($date){
    $date_array=explode('/', $date);
    return $date_array['2'].'-'.$date_array['1'].'-'.$date_array['0'];
}
function CheckFormatDate($date){
    if(strpos(htmlentities(trim($date)),"/")>1){
       $date_array=explode('/', $date);
       return $date_array['2'].'-'.$date_array['1'].'-'.$date_array['0'];
    }
    else 
        return false;
    
}

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

// public function getIdOfTable($table){
//     $i=columnnames($table);
//     $id=$i[0];
//     return $id;
// }
public function uncrypt_data($val){
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


public function uncryptGET($get){
    $_G=array();
    foreach ($get as $key => $value) {
        $k=$this->uncrypt_data($key);
        $v=$this->uncrypt_data($value);
        $_G[$k]=$v;
    }
    return $_G;
}
public function doubleUncryptGET($get){
    $_G=array();
    foreach ($get as $key => $value) {
        $k=$key;
        $v=$this->double_decryptage($value);
        $_G[$k]=$v;
    }
    return $_G;
}
public function uncryptPOST($post){
    $_P=array();
    foreach ($post as $key => $value) {
        $k=$this->uncrypt_data($key);
        $v=$this->uncrypt_data($value);
        $_P[$k]=$v;
    }
    return $_P;
}

public function doubleUncryptPOST($post){
    $_P=array();
    foreach ($post as $key => $value) {
        $k=$this->double_decryptage($key);
        $v=$this->double_decryptage($value);
        $_P[$k]=$v;
    }
    return $_P;
}

public function array_isomorphe_complexe(){
    $array=range(0, 66);
    $alphabet=range("a", "z");
    $ALPHABET=range("A", "Z");
    $digit=array('0','1','2','3','4','5','6','7', '8','9');
    $array_letters=array_merge(array(" ","_","-","*"),$alphabet,$ALPHABET,$digit);
    $arr['ensemble']=$array;
    $arr['iso']=$array_letters;
    return $arr;
}
public function array_isomorphe(){
    $array=range(0, 55);
    $alphabet=range("a", "z");
    $ALPHABET=range("A", "Z");
    $array_letters=array_merge(array("_","-","*"),$alphabet,$ALPHABET);
    $arr['ensemble']=$array;
    $arr['iso']=$array_letters;
    return $arr;
}
//le chiffrement de Pascal//
public function crypt_data($val){
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

function double_cryptage($val){
    return $this->crypt_data($this->crypt_data($val));
}

function double_decryptage($val){
    return $this->uncrypt_data($this->uncrypt_data($val));
}

function mille($m){
    $m=strval($m);
    $m=strrev($m);
    $montant='';
    if(strlen($m)>3){
        for($i=0;$i<strlen($m);$i++){
            if($i<=2)
                $montant.="0";
            else
                $montant.=$m[$i];
        }
    }
    $montant=empty($montant)?$m:$montant;
    $montant=strrev($montant);
    return floatval($montant);
}

// Traiter les fichiers images, peut importe le nombre de fichiers d'un formulaire
public function treatFile($dossier,$files){
			foreach ($files as $key => $value) {
				$nom=$key;
			}
			$files=$files[$nom];
	        if($files['error']==0){
	        	$temp_name=$files['tmp_name'];
	        	$infoImg=pathinfo($files['name']);
	        	$extension=$infoImg['extension'];
	        	$array=array("jpeg","png","jpg","JPG","pdf","PDF","doc","txt","mp4","MP4");
        		$ch=date("Ymdhis");
        		$image_value=$ch.".".$extension;
        		if(in_array(strtolower($extension), $array)){
        			if(!file_exists("downloaded_images")){
        				mkdir("downloaded_images");
        		}
            	$dossier='downloaded_images/'.$dossier;
        		$dossier2='downloaded_images/'.$dossier;
        		if(!file_exists($dossier)){
        			mkdir($dossier);
        		}
        		move_uploaded_file($temp_name,$dossier."/".$image_value);
       		}
       		else{
        		echo "Mauvaise extension";
       		}
     
        	$image=$dossier."/".$image_value;
        	}
        	else
            	$image='';
        	return $image;
        }

        function remove_empty_in_array($array){
            $_array=[];
            if(!empty($array)){
                foreach ($array as $key => $value) {
                    if(!empty($value))
                        array_push($_array, $value);
                }
            }
            return $_array;
        }

        function treatMultipleFile($dossier,$files,$dir=""){
        $d=$dossier;
        if(!empty($dir))
            $dossier=$dir;
                $image=array();
        $dossier1=$dossier;
        $i=0;
        foreach ($files as $key => $value) {
        $i++;
        $j=0;
        foreach ($value as $key =>$v) {
            // var_dump(count($value['name']));
        if($j<count($value['name'])){
        if($value['error'][$j]==0){
        $temp_name=$value['tmp_name'][$j];
        $infoImg=pathinfo($value['name'][$j]);
        $extension=$infoImg['extension']; 
        // var_dump($extension);
        $array=array("jpeg","png","jpg","pdf","doc","txt");
   
        $ch=str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
        $ch=str_shuffle(substr($ch, 49));
        $date=date("Ymdhis");
        $image_value=$date.$ch.".".$extension;
        // var_dump($image_value);
        $image[$j]=$image_value;
        if(in_array(strtolower($extension), $array)){
            if(!file_exists("downloaded_files")){
                mkdir("downloaded_files");
            }
            $dossier='downloaded_files/'.$dossier1;
            $dossier2='downloaded_files/'.$dossier1;
            if(!file_exists($dossier)){
                mkdir($dossier);
            }
            move_uploaded_file($temp_name,$dossier."/".$image_value);
       }
       else{
        echo "Mauvaise extension";
       }
        
        $image_value='';
        if($i==1)
        $image[$j]=$dossier2.'/'.$image[$j];
            }
        }
        else
            $image[$j]='';
        $j++;
        }
        }

        $image=$this->remove_empty_in_array($image);
        return $image;
        }

        public function dateFrancais1($laDate){
  if(!empty($laDate)){
    $date=explode('-',$laDate);
    $d=!empty($date[2])?$date[2]:"00";
    $m=!empty($date[1])?$date[1]:"00";
    $y=!empty($date[0])?$date[0]:"0000";
    $heure=explode(' ', $d);
    $d=!empty($heure[0])?$heure[0]:$d;
    $heure=!empty($heure[1])?", ".$heure[1]:"";
    $heure='';
    $dmy=$d."/".$m."/".$y.$heure;
  }else
  $dmy="";
    return $dmy;
}  

public function dateFrancaisDBB($laDate){
  if(!empty($laDate)){
    $date=explode('-',$laDate);
    $d=!empty($date[2])?$date[2]:"00";
    $m=!empty($date[1])?$date[1]:"00";
    $y=!empty($date[0])?$date[0]:"0000";
    $heure=explode(' ', $d);
    $d=!empty($heure[0])?$heure[0]:$d;
    $heure=!empty($heure[1])?", ".$heure[1]:"";
    $heure='';
    $dmy=$y."-".$m."-".$d.$heure;
  }else
  $dmy="";
    return $dmy;
}

public function pagination_php($count_elements,$current_page=""){
        $perPage=16;
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

public function extractArrays($array1,$array2=array()){
            $array3=array();
            foreach ($array1 as $key => $value) {
                if(!in_array($key, $array2))
                    $array3[$key]=$value;
                }
            return $array3;
        }

}










 ?>
