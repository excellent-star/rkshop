<?php 
include("config.php");
// $nomBaseDonnees="boost_corporation";
$nomBaseDonnees="ecommerce";
$data=new database("localhost",$nomBaseDonnees,"root","");
// Obligatoire, c'est la liste de toutes les tables existantes
$tables_database=array("agent","direction","document","parcelle","parcelle_section","proprietaire","province","quartier","section","ville");

// fonction pour obtenir tous les attributs d'une table précise
function columnnames($table){
    global $data;
    
        // $stmt=$data->getRows("DESCRIBE etudiant".$table);
        $stmt=$data->getRows("SHOW COLUMNS FROM ".$table);
        // $stmt=$data->getRows("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name='$table'");
        $i=0;
		$field=array();
		foreach ($stmt as $key => $value) {
			$field[$i]=$value['Field'];
			$i++;
		}

    return $field;
}

function allTables(){
    global $data;
    global $nomBaseDonnees;
    
        // $stmt=$data->getRows("DESCRIBE etudiant".$table);
        $stmt=$data->getRows("SHOW TABLES FROM ".$nomBaseDonnees);
        // $stmt=$data->getRows("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name='$table'");
        $tabs=array();
        foreach ($stmt as $key => $value) {
            foreach ($value as $k => $table_name) {
                array_push($tabs, $table_name);
            }
        }

    return $tabs;
}


// Supprimer une ligne en precisant la table, la clé et la valeur de la clé
// eg: SupprimerTable('etudiant','id',5);
function SupprimerTable($table,$key,$value){
    global $data;
    $data->deleteRow("DELETE FROM ".$table." WHERE ".$key."=?",array($value));
}
// function permettant de mettre a jour une table par état
// eg:UpdateTableEtat('etudiant','statut_etut','id',5);
function UpdateTableEtat($table,$etat_name,$id_table,$id_table_value){
    global $data;
    $sql="UPDATE ".$table." SET ".$etat_name."=? WHERE ".$id_table."=?";
    // var_dump($sql);
    $data->updateRow($sql,array(1,$id_table_value));
}

// Vérifier si les données existent dans une table 
function checkdata($table,$data1){
    global $data;
    global $tables_database;
    $result=VerifierDonneesExiste($tables_database,$table,$data1);
    if($result['message']==1){
        $stmt=$data->getRow($result['requete'],$result['data']);
    }
    else
        $stmt=0;
    return $stmt;
}

// enregistrer les donnees dans une table précise
// enregistrerTable('etudiant',$_POST);
function enregistrerTable($table,$data1){
    global $data;
    global $tables_database;
    $result=Enregistrer($tables_database,$table,$data1);
    // var_dump($data1);
    if($result['message']==1 && checkdata($table,$data1)==0){
        $stmt=1;
        $data->insertRow($result['requete'],$result['data']);
    }
    else if($result['message']!=1)
        $stmt=0;//table inconnue;
    else if(checkdata($table,$data1)!=0)
        $stmt=2;
    return $stmt;
}

// FONCTION APPELEE POUR L'AFFICHAGE DES DONNEES
// e.g $data=getDataRequest(array("etudiant"))['data']
// e.g $data=getDataRequest(array("etudiant","classe"))['data']
// e.g $data=getDataRequest(array("etudiant","classe"),array("id"=>2))
// e.g $data=getDataRequest(array("etudiant","classe"),array("id"=>2,"age"=>34))
// e.g $data=getDataRequest(array("etudiant","classe"),array("id"=>2,"age"=>34),$limit=array(),$order_by='','',false) renvoyer sur une seule ligne
// e.g $data=getDataRequest(array("etudiant"),array(),array(),'','',false)['data'] renvoyer sur une seule ligne
// e.g $data=getDataRequest(array("etudiant","classe"),array("id"=>2,"age"=>34),$limit=array(),$order_by='',$group_by,true)
// e.g $data=getDataRequest(array("etudiant","classe"),array("id"=>2,"age"=>34),$limit=array(),$order_by='',$group_by,false,'age NOT IN (SELECT age FROM etudiant)');
function getDataRequest($table=array(),$data_array=array(),$limit=array(),$order_by='',$group_by='', $plusieurs_lignes=true,$add_condition='',$attributs_select=''){
	global $data;
	$values=jointure($table,$data_array,$limit,$order_by,$group_by, $plusieurs_lignes,$add_condition,$attributs_select);
	if($plusieurs_lignes==true)
		$getrows=$data->getRows($values['sql'],$values['array_values']);
	else
		$getrows=$data->getRow($values['sql'],$values['array_values']);
	    $getrow['sql']=$values['sql'];
	    $getrow['values']=$values['array_values'];
		$getrow['data']=$getrows;
	return $getrow;
}



// updateTable($_POST,$condition=array("id"=>$id));
// updateTable($_POST,array("id"=>12),$add_conditions='age<=4');
// updateTable(array("table_name"=>'etudiant',"nom"=>"pascal"),$condition,$add_conditions='id =(SELECT id FROM classe ) ');
// updateTable($_POST,array("etat"=>1),$add_conditions='');
function updateTable($post_array,$condition,$add_conditions=''){
	global $data;
	$r=treatForm($post_array);
	$result=updateTable1($r['table'],$r['post'],$condition,$add_conditions);
	$getrow=$data->updateRow($result['sql'],$result['values']);
	return $getrow;
}

// delteTable('etudiant',array('id'=>7));
// delteTable('etudiant',array(),"id IN (SELECT id FROM etudiant)");
function deleteTable($table,$condition=array(),$add_conditions=''){
	global $data;
	$result=deleteTable1($table,$condition,$add_conditions);
   	$getrow=$data->updateRow($result['sql'],$result['values']);
   	return $getrow;
}

?>