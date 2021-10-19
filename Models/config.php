<?php 
trait db{

    function get_rows($that,$query, $params){
    try{ 
        $stmt = $that->prepare($query); 
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_OBJ);       
        }catch(PDOException $e){
        throw new Exception($e->getMessage());
    } 
}

function get_row($that,$query, $params){
    try{ 
        $stmt = $that->prepare($query); 
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_OBJ);       
        }catch(PDOException $e){
        throw new Exception($e->getMessage());
    } 
}

function insert_row($that,$query, $params){
    try{ 
        $stmt = $that->prepare($query); 
        $stmt->execute($params);
        return $stmt->rowCount();
    }catch(PDOException $e){
    throw new Exception($e->getMessage());
    }  
}

function insert_rowchrishede1($that,$query, $params){
    try{ 
        $stmt = $that->prepare($query); 
        $stmt->execute($params);
        return $that->lastInsertId();
    }catch(PDOException $e){
    throw new Exception($e->getMessage());
    }  
}

function update_row($that,$query, $params){
    try{ 
        $stmt = $that->prepare($query); 
        $stat = $stmt->execute($params);
        return $stat;
        }catch(PDOException $e){
        throw new Exception($e->getMessage());
    } 
}
}

function columnnames($table,$db){
  
        global $db;
        $Q=$db->prepare("SHOW COLUMNS FROM ".$table);
        $Q->execute();
        $stmt=$Q->fetchAll(PDO::FETCH_ASSOC);

        $i=0;
        $field=array();
        foreach ($stmt as $key => $value) {
            $field[$i]=$value['Field'];
            $i++;
        }
    return $field;
}
   
    function getIds($table,$db){
    $k=0;
    for ($i=0 ;$i<count($table); $i++) {
        for($j=1 ;$j<count($table); $j++) {
            if($i!=$j){
                $conditions[$k]=array_intersect(columnnames($table[$i],$db), columnnames($table[$j],$db));
                $k++;
            }
        }
    }
    $a=0;
    foreach ($conditions as $key => $value) {
        if(!empty($value)){
            foreach ($value as $key => $valu) {
                $val[$a]=$valu;
                $a++;
            }
        }
    }
    if(!empty($val))
       $val=array_unique($val);
    else
        $val=array();
    // var_dump($val);
    return $val;
}

function where_condition($table,$db){
    $char="";
    $compt=1;
        $conds=getIds($table,$db);
        $c=0;
        foreach ($conds as $key => $v1) {
            $tab=array();
            foreach ($table as $key => $v2) {
                if(in_array($v1, columnnames($v2,$db))){
                    array_push($tab, $v2);
                    $end=end($table);
                }
                
            }
            foreach ($tab as $key => $valeur) {
                if(count($table)==2){
                    $c++;
                    if(end($tab)!=$valeur){
                       $char.=$valeur.".".$v1."=";
                    }else if($valeur!=$end){
                        $char.=$valeur.".".$v1." AND ";
                    }else if(count($conds)>=2 && $c!=2*count($conds)){
                    $char.=$valeur.".".$v1." AND ";
                    }else {
                        $char.=$valeur.".".$v1." ";
                    }
                }else{
                    foreach ($tab as $key => $valeur2) {
                       if($valeur2!==$valeur){

                    if($compt==1){
                        $char.=$valeur2.".".$v1."=";
                    }else
                    if($compt%2==0){
                        $char.=$valeur2.".".$v1;
                    }else{
                        $char.=" AND ".$valeur2.".".$v1."=";
                    }
                            $compt++;
                            

                       }


                    }

                }
            }

        }
        return $char;
}

function alias($data,$table,$value){
        global $db;
        if(strripos(htmlentities(trim($value)), " ")!=false){
            $v=explode(' ',htmlentities(trim($value)) );
            $value=$v[0];
        }
        if(is_array($table)){
        foreach ($table as $k => $vale) {
            if(in_array($value, columnnames($vale,$db)))
                $alias_=$vale;
        }
       }else
          $alias_=$table;

    return $alias_;

}

function jointure($table=array(),$data=array(),$limit=array(),$order_by='',$group_by='', $plusieurs_lignes=true,$add_condition='',$attributs='',$db){
    $array_values=array();
    $table_array=$table;
    $j=0;
    $sql="";
    $sql_="";
    $array_values=array();
    $p=0;
    if($attributs=='')
        $attributs='*';

    foreach ($data as $key => $value) {
        $array_values[$p]=htmlentities(trim($value));
        $p++;
        foreach ($table as $k => $vale) {
            if(in_array($key, columnnames($vale,$db)))
                $alias_=$vale;
        }
        if(count($data)!=$p){
            $sql_.=$alias_.".".$key."=? AND ";
        }
        else{
            $sql_.=$alias_.".".$key."=?";
        }
    }

    if(count($table)==1){
        $table=$table[0];
        if(empty($group_by))
          $sql="SELECT ".$attributs." FROM ".$table;
        else
          $sql="SELECT ".$attributs.",count(*) as nombreElementParGroup FROM ".$table;
        if(!empty($data)){
            $sql.=" WHERE ".$sql_;
            if($add_condition!=''){
                $sql.=" AND ".$add_condition." ";
                if($add_condition!='')
                       $sql.=" AND ".$add_condition." ";
            }

        }
        else {
            if(!empty($add_condition))
                $sql.=" WHERE ".$add_condition." ";
        }
    }else{
        
        $where_condition=where_condition($table,$db);
        if(empty($group_by))
          $sql="SELECT ".$attributs." FROM ".$table[0];
        else
          $sql="SELECT ".$attributs.",count(*) as nombreElementParGroup FROM ".$table[0];
        for ($j=1 ;$j<count($table); $j++) {
            if(end($table)==$j){
                $sql.=" ";
                }else{
                    $sql.=", ".$table[$j];
                }
            }
            if($where_condition!='')
            {
                if(empty($data))
                    $sql.=" WHERE ".$where_condition;
                else
                    $sql.=" WHERE ".$where_condition." AND ".$sql_;
            }
            
            else {
                if(!empty($data))
                    $sql.=" WHERE ".$sql_;

            }
            if($add_condition!='')
                       $sql.=" AND ".$add_condition." ";
    }

    if($order_by!=''){
        $order=explode(' ',htmlentities(trim($order_by)) );
        $order_by1=$order[0];

    }
    $group_by=htmlentities(trim($group_by));
    $order_by=htmlentities(trim($order_by));
    if($group_by!='')
        $sql.=" GROUP BY ".alias($data,$table_array,$group_by).".".$group_by;
    if($order_by!='' && ($order_by1!='nombreElementParGroup' && $order_by1!='count(*)' )){
        $sql.=" ORDER BY ".alias($data,$table_array,$order_by).".".$order_by;
    }

    else if($order_by!='' && ($order_by1=='nombreElementParGroup' || $order_by1=='count(*)')){
                $sql.=" ORDER BY ".$order_by;
    }

    if(!empty($limit))
        $sql.=" LIMIT ".$limit[0].",".$limit[1]." ";
    $results['sql']=$sql;
    $results['ligne']=$plusieurs_lignes;
    $results['array_values']=$array_values;
    return $results;
}

function treatForm($post_array){
        $post=array();
        if(array_key_exists('table_name', $post_array)){
            foreach ($post_array as $key => $value) {
            if($key=="table_name")
                $table=htmlentities(trim($value));
            else
                $post[$key]=iconv(mb_detect_encoding(trim($value)), "UTF-8", trim($value));
        }
        $result['table']=$table;
        $result['post']=$post;
        $result['message']=1;//cette table existe
        }
        else{
            $result['table']='';
            $result['post']=array();
            $result['message']=0;//la table n'existe pas
        }
        return $result;
        }

function updateTable1($table,$post,$condition,$add_conditions=''){
    $sql="UPDATE ".$table." SET ";
    $tab=array_keys($post);
    $last_key=end($tab);
    foreach ($post as $key => $value) {
      if($key!=$last_key)
         $sql.=$key."=?, ";
      else
         $sql.=$key."=? WHERE ";
    }
    $post=array_values($post);
    $tab=array_keys($condition);
    $last_key=end($tab);
    foreach ($condition as $k => $v) {
      if($k!=$last_key)
         $sql.=$k."=?, ";
      else
         $sql.=$k."=? ";
      array_push($post, $v);
    }
    if(!empty($add_conditions)){
        if(!empty($condition))
           $sql.="AND ( ".$add_conditions.") ";
        else
           $sql.=" ".$add_conditions;
    }
$stmt['sql']=$sql;
$stmt['values']=$post;
return $stmt;
}


function deleteTable1($table,$condition=array(),$add_conditions=''){
    $sql="DELETE FROM ".$table." WHERE ";
    $tab=array_keys($condition);
    $last_key=end($tab);
    foreach ($condition as $key => $value) {
      if($key!=$last_key)
         $sql.=$key."=? AND ";
      else
         $sql.=$key."=? ";
    }
    if(!empty($add_conditions)){
        if(!empty($condition))
           $sql.=" AND ( ".$add_conditions.") ";
        else
           $sql.=" ".$add_conditions;
    }
    $stmt['sql']=$sql;
    if(!empty($condition))
        $stmt['values']=array_values($condition);
    else
        $stmt['values']=array();
    return $stmt;
}

function Enregistrer($tables_database,$table,$data1){
    if(in_array($table, $tables_database)){
    $sql="INSERT INTO  ".$table." (";
    $array_values=array();
    $j=0;
    foreach ($data1 as $key => $value) {
        $array_values[$j]=htmlentities(trim($value));
        $j++;
        if(count($data1)!=$j)
            $sql.=$key.",";
        else
            $sql.=$key.")";
    }
    $sql.=" VALUES (";
    for($i=1; $i<=count($data1);$i++){
        if(count($data1)==$i)
            $sql.="?)";
        else
            $sql.="?,";
    }
    $message=1;
}else{
    $message=0;//table inexistante
    $array_values=array();
    $sql='';
}


    $result['requete']=$sql;
    $result['data']=$array_values;
    $result['message']=$message;

    return $result;

}
function VerifierDonneesExiste($tables_database,$table,$data1=array()){
    if(in_array($table, $tables_database)){
    $sql="SELECT * FROM ".$table." WHERE ";
    $array_values=array();
    $j=0;
    foreach ($data1 as $key => $value) {
        $array_values[$j]=$value;
        $j++;
        if(count($data1)!=$j)
            $sql.=$key."=? AND ";
        else
            $sql.=$key."=?";
    }
    $message=1;
}else{
    $message=0;
    $array_values=array();
    $sql='';
}


    $result['requete']=$sql;
    $result['data']=$array_values;
    $result['message']=$message;

    return $result;

}











date_default_timezone_set('Europe/London');
function time_ago($timestamp){


       $time_ago = strtotime($timestamp);
       $current_time = time();

       $time_difference = $current_time - $time_ago;

       $seconds = $time_difference;
       $minutes = round($seconds / 60);
       $hours = round($seconds / 3600);

       $days = round($seconds /86400);

       $weeks = round($seconds / 604800);

       $months = round($seconds / 2629440);

       $years = round($seconds / 31553280);

       if($seconds <= 60){

            return "juste maintenant";
       }else if($minutes <=60){


                if($minutes==1){

                     return "il y a une minute";
                }else{

                    return "il y a $minutes minutes";
                }
       }else if($hours <= 24){


              if($hours==1){

                   return "il y a une heure";
              }else{


                     return "il y a $hours hrs";
              }
       }else if($days <=7){


               if($days==1){

                   return "hier";
               }else{

                    return "il y a $days jours";
               }
       }else if($weeks <=4.3){


        if($weeks==1){

            return "il y a une semaine";
        }else{

             return "il y $weeks semaines";
        }
}else if($months <=12){


    if($months==1){

        return "il y a un mois";
    }else{

         return "il y a $months mois";
    }
}else{



         if($years==1){

             return "il y 1 an";
         }else{

               return "il y a $years ans";
         }
}











}











     
?>


