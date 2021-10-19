<?php 





class Ec_option_parametre{
    private $option_parametre_id;
    private $option_parametre_parametre;
    private $option_parametre_libelle;
    private $article_id;
    
    public function __construct(array $donnees){
    $this->hydrate($donnees);
    }
    
    public function hydrate(array $donnees){
    foreach($donnees as $key => $value){
    $method = 'set'.ucfirst($key);
    if(method_exists($this, $method))
    {
    $this->$method($value);
    }
    }
    }
    
    public function getOption_parametre_id(){
    return $this->option_parametre_id;
    }
    
    public function getOption_parametre_parametre(){
    return $this->option_parametre_parametre;
    }
    
    public function getOption_parametre_libelle(){
    return $this->option_parametre_libelle;
    }
    
    public function getArticle_id(){
    return $this->article_id;
    }
    
    
    public function setOption_parametre_id($option_parametre_id){
    $this->option_parametre_id=$option_parametre_id;
    }
    
    public function setOption_parametre_parametre($option_parametre_parametre){
    $this->option_parametre_parametre=$option_parametre_parametre;
    }
    
    public function setOption_parametre_libelle($option_parametre_libelle){
    $this->option_parametre_libelle=$option_parametre_libelle;
    }
    
    public function setArticle_id($article_id){
    $this->article_id=$article_id;
    }
    
    }















?>