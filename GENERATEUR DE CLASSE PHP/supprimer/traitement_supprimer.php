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

//pour separer l'identifiant et sa valeur;
$treat=explode('---', $_GET['id_value']);
$id=$treat[0];//identifiant de la table à modifier
$value=$treat[1];//la valeur de cette identifiant

//deuxieme parametre: le tableau à clé valeur dont la clé est l'identifiant de la table et la valeur est sa valeur;


$result=deleteTable($_GET['table_name'],array($id=>$value));
// $result=deleteTable($_GET['table_name'],$_GET['id'],$_GET['value']);

// var_dump($result);
// var_dump($_POST,$id,$value);
if($result==0)
	echo "<script>JSalert('AUCUNE MODIFICATION APPORTEE!','warning'); </script>";
else
	echo "<script>JSalert('OPERATION FAITE AVEC SUCCES!','success'); </script>";
 ?>
