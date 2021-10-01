<?php
    function chargerClasse($classname) // On enregistre notre autoload
    {
      require('class/'.$classname.'.class.php');
    }
                             
    spl_autoload_register('chargerClasse');

                             // connexion à la base de données
    $dbh = new PDO('mysql:host=localhost;dbname=poo', $user='root', $pass='');
    $connexion = new connexion();
    // $db=$connexion->Connexion();
    $classe = new ClasseManager($dbh);
    // $etudiant = new EtudiantManager($db);
    $etudiant = new EtudiantManager($connexion);

    // ajouter
    $cla=new Classe(array("libelle_cla"=>"AP2"));
    $classe->AddClasse($cla);
    var_dump($cla->getId_cla());
    $data=$classe->AfficherClasse();
    var_dump($data); 
    die();

    $etu=new Etudiant(array("nom_etu"=>"dissi","age_etu"=>18,"id_cla"=>'2'));
    $etudiant->AddEtudiant($etu);
    $data=$etudiant->AfficherEtudiant();
    var_dump($data);

    // $cla=new Classe(array("libelle_cla"=>"AP10","id_cla"=>'7'));
    // var_dump($cla);
    // $classe->UpdateClasse($cla);
    // $data=$classe->AfficherClasse();
    // var_dump($data);
                  //$=$MFonction->AfficherFonction();
    // if(isset($_POST['Creer']))
    //       {        
    // $LibelleFonction=$_POST['LibelleFonction'];
        
    // $fonction= new Fonction(array('LibelleFonction'=>$LibelleFonction));
    //   //var_dump($Pharmacie); 
    //   $MFonction->AddFonction($fonction);
        
    //     if($MFonction){
      
    //   echo "<script> alert('Vous avez crée une fonction')</script>";
      
    // } else { "<script> alert('Echec')</script>";}     
          
          // } 
                  
     
          
                   ?>