<?php
class connexion {

    private $host="localhost";
    private $login="root"; 
    private $password="";
    private $base="poo";
    private $connexion;
  
    // function __construct() {
        
    // }
	
      function __construct(){
        try{
           
        	$this->connexion = new PDO('mysql:host='.$this->host.';dbname='.$this->base, $this->login,  $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        	$this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	}
            catch(Exception $e){
        	$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
        	die($msg);
   		}
    
    }
	

    public function getRow($sql,$array=array()){
    $stmt=$this->connexion->prepare($sql);
    $stmt->execute($array);
    $resultat=$stmt->fetch(PDO::FETCH_ASSOC);
    return $resultat;
}

public function getRows($sql,$array=array()){
    $stmt=$this->connexion->prepare($sql);
    $stmt->execute($array);
    $resultat=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
}


public function insertRow($sql,$array){
    $stmt=$this->connexion->prepare($sql);
    $stmt->execute($array);
    return $stmt->rowCount();
}

public function updateRow($sql,$array){
   return  $this->insertRow($sql,$array);
}

public function deleteRow($sql,$array){
    return  $this->insertRow($sql,$array);
}

}

?>
