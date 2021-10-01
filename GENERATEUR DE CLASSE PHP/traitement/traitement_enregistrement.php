<?php
include('../connexion/init.php'); 
$array_page=explode('/', $_SERVER["HTTP_REFERER"]);
$pageRedirection=end($array_page);
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../sweat_alert/sweetalert.css">
    <script type="text/javascript" src="../sweat_alert/sweetalert.js"></script>
    <script type="text/javascript" src="../sweat_alert/sweetalert.min.js"></script>
    <script type="text/javascript" src="../sweat_alert/sweetalert-dev.js"></script>
    <script type="text/javascript">
        function JSalert(titre,typ){
             swal({   title: titre,   
             text: "",   
             type: typ,   
             showCancelButton: false,   
             confirmButtonColor: "#DD6B55",   
             confirmButtonText: "OK",   
             closeOnConfirm: false,   
             closeOnCancel: false }, 
             function(isConfirm){   
                if (isConfirm) 
                    {   
                        window.location='<?php echo "../".$pageRedirection; ?>'; 
                    } 
                else {     
                    swal("Hurray", "Account is not removed!", "error");   
                } 
            });
        }
    </script>

</head>
<body>


<?php
if(!empty($_FILES)){
    $image=treatFile($_POST['table_name'],$_FILES);
    foreach ($image as $key => $value) {
    	$_POST[$key]=$value;
	}
}

if(!empty($_POST)){
    $_data=treatForm($_POST);
    if($_data['message']==1){
    	//fonction d'enregistrement des données dans la bdd
    	$result=enregistrerTable($_data['table'],$_data['post']);
    	// si result=1:enregistrer avec succes
    	if($result==1){
        	 echo "<script>JSalert('OPERATION FAITE AVEC SUCCES!','success'); </script>"; 
    	}
    	//si resultat=0: vous n'avez pas inseré le nom de la table dans la liste des bases de données
    	else if($result==0){
        	echo "<script>JSalert('ERREUR TECHNIQUE! TABLE NON EXISTANTE','danger');</script>";
    	}else if($result==2){
    		echo "<script>JSalert('CETTE OPERATION A ETE DEJA OPEREE!','warning');</script>";
    	}else
      		echo "<script>JSalert('PROBLEME TECHNIQUE!','danger'); </script>"; 
    	}else{
        echo "<script>JSalert('ERREUR TECHNIQUE! LA TABLE NE FIGURE PAS DANS LE FORMULAIRE!','danger');</script>";
    }

}else{
	echo "<script>window.location='../".$pageRedirection."';</script>";
}

?>
