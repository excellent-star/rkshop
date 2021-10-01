<?php 
$array_page=explode('/', $_SERVER["HTTP_REFERER"]);
$pageRedirection=end($array_page);
// var_dump($pageRedirection);
// var_dump($_POST);
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
include('../connexion/init.php');
if(!empty($_FILES)){
    $image=treatFile($_POST['table_name'],$_FILES);
    foreach ($image as $key => $value) {
        $_POST[$key]=$value;
    }
}
//pour separer l'identifiant et sa valeur;
$treat=explode('+', $_POST['id_value']);
$id=$treat[0];//identifiant de la table à modifier
$value=$treat[1];//la valeur de cette identifiant
// var_dump($_POST);

// var_dump($_POST);
$_POST=extractArrays($_POST,array("id_value"));//enlever id_value dans le formulaire
//toujours mettre table_name et sa valeur:(nom de la table à modifier dans le formulaire de modification)
//appel de la fonction updateTable, premier parametre:tableau des donnees du formulaires, i.e: $_POST.
//deuxieme parametre: le tableau à clé valeur dont la clé est l'identifiant de la table et la valeur est sa valeur;


$result=updateTable($_POST,array($id=>$value));

// var_dump($result);
// var_dump($_POST,$id,$value);
if($result==0)
	echo "<script>JSalert('AUCUNE MODIFICATION APPORTEE!','warning'); </script>";
else
	echo "<script>JSalert('OPERATION FAITE AVEC SUCCES!','success'); </script>";
 ?>
