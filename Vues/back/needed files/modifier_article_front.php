<!DOCTYPE html>
<html lang="en">
 
<!-- Mirrored from 99webpage.com/theme-review/html/cekas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 12:55:01 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="keywords" content="corporate html template, agency theme, business html template, creative theme, portfolio html template, gallery bootstrap, furniture html template, package delivery theme, restaurant theme, medical theme, ecommerce template, travel theme, app template, free landing page, construction template, real estate theme">
    <meta name="description" content="Bootstrap HTML5 template for agency corporate, business app and creative portfolio, it is suitable for any kind website like ecommerce, restaurant, medical, and retail website">
    <meta name="author" content="nce18cex">
    <link rel="icon" href="http://atoutdame.epizy.com/assets/logo/petit_logo1.jpeg">


    <meta property="og:url" content="http://atoutdame.epizy.com/index.php">
    <meta property="og:type" content="product.item">
    <meta property="og:title" content="Atouts de Dames">
    <meta property="og:description" content="Page d'accueil d'atouts de dames">
    <meta property="og:image" content="http://atoutdame.epizy.com/assets/logo/logo1_1.jpeg">
    <meta property="og:image:width" content="100" />
<meta property="og:image:height" content="60" />

    <title>Liste des articles</title>

     <link href="assets/assets1/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/assets1/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/assets1/css/style1.css" rel="stylesheet">
   
    <!-- Theme skins -->
    <link id="skin" href="assets/assets1/skins/default.css" rel="stylesheet">

    <!-- dataTable -->
    <link rel="stylesheet" type="text/css" href="assets/dataTable/media/css/jquery.dataTables.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/dataTable/resources/syntax/shCore.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/dataTable/resources/demo.css"> -->
   
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/assets1/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/assets1/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

<!-- End Navbar -->
<?php include("header.php"); ?>

<div id="warpper1">


    <!-- Start Inner head -->
    <div class="parallax inner-head">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <i class="fa fa-list-alt"></i>
                    <h4>Gestion des articles</h4>
                    <ol class="breadcrumb">
                        <li><a href="#">Articles</a></li>
                        <li><a href="#">Catégories</a></li>
                        <!-- <li class="active">Tabs</li> -->
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- End Inner head -->
   
    <!-- Start tab secondary -->
                <div class="col-md-12 col-sm-12">
                    <h5>Gestion des articles</h5>
                    <div class="tab-secondary">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab5" role="tab" data-toggle="tab">Modification</a></li>
                            <li role="presentation"><a href="?p=<?=$fonction->double_cryptage('admin_articles')?>" role="tab" >Liste articles</a></li>
                           
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab5">
                            <form action="?p=<?=$fonction->double_cryptage('save_modifie_produit')?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Catégorie</label>
                                        <select class="form-control" name="categorie_id">
                                            <?php if(!empty($liste_categorie)): ?>
                                            <?php foreach ($liste_categorie as $key => $value): ?>
                                            <option <?=$liste_article->categorie_id==$value->getCategorie_id()?'selected=""':'' ?> value="<?=$value->getCategorie_id()?>"><?=$value->getCategorie_libelle()  ?></option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Libellé (Obligatoire)</label>
                                        <input type="text" required="" value="<?=!empty($liste_article->produit_libelle)?$liste_article->produit_libelle:''; ?>" name="produit_libelle" class="form-control"  placeholder="Libellé de l'article" />
                                    </div>

                                    <div class="form-group">
                                        <label>Prix (Obligatoire)</label>
                                        <input type="number" required="" name="produit_montant" class="form-control"  placeholder="Prix de l'article" value="<?=!empty($liste_article->produit_montant)?$liste_article->produit_montant:''; ?>" />
                                    </div>

                                    <div class="form-group">
                                        <label>Nouveau prix (Optionel)</label>
                                        <input type="number" name="produit_nouveauPrix" class="form-control"  placeholder="Prix de l'article" value="<?=!empty($liste_article->produit_nouveauPrix)?$liste_article->produit_nouveauPrix:''; ?>" />
                                    </div>

                                    <div class="form-group" style="display: none;">
                                        <label>Quantité en stock (Obligatoire)</label>
                                        <input type="number"  name="produit_quantite" class="form-control"  placeholder="Quantité de l'article" value="<?=!empty($liste_article->produit_quantite)?$liste_article->produit_quantite:''; ?>" />
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group" style="overflow-x:auto;">
                                                <label>Taille *(Optionel) et quantité || Couleur *(Optionel) et quantité</label>
                                                <table class="table taille_couleur" style="width: 100%">
                                                    <?php if(!empty($liste_taille)): ?>
                                                    <?php foreach ($liste_taille as $key => $value): ?>
                                                    <tr>
                                                        <td style="width: 15%;">
                                                            <div class="checkbox">
                                                                <label>
                                                                <input  type="checkbox" <?=checked($value->getTaille_libelle(),$taille_seul)  ?> value="<?=$value->getTaille_libelle() ?>" name="taille_id[]">
                                                                <?=$value->getTaille_libelle() ?>
                                                                </label>
                                                                <input class="nombre_taille" style="width: 60px;" type="number"  name="<?=$value->getTaille_libelle() ?>" value="<?=value($value->getTaille_libelle(),$taille_enregistree) ?>" >
                                                            </div>
                                                        </td>
                                                        <td style="width: 85%;">
                                                            <?php $la_taille=$value->getTaille_libelle(); ?>
                                                            <?php if(!empty($liste_couleur)): ?>
                                                            <?php foreach ($liste_couleur as $key => $val): ?>
                                                            <div class="checkbox affiche_couleur" style="display: none;">
                                                                <label>
                                                                <input <?=checkedCouleur($la_taille,$val->getCouleur_libelle(),$couleur_qte)  ?> class="input_couleur" type="checkbox" value="<?=$la_taille.'|'.$val->getCouleur_libelle() ?>" name="couleur_id[]">
                                                                <?=$val->getCouleur_libelle() ?>
                                                                </label>
                                                                <input class="nombre_couleur" style="width: 60px;" type="number" value="<?=valueCouleur($value->getTaille_libelle(),$val->getCouleur_libelle(),$couleur_qte) ?>"  name="<?=$la_taille.'|'.$val->getCouleur_libelle() ?>">
                                                            </div>
                                                            <?php endforeach ?>
                                                            <?php endif ?>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
                                                    <?php endif ?>
                                                    <tr>
                                                        <div style="display: none;" class="count_couleur"><?=count($liste_couleur)  ?></div><div style="display: none;" class="count_taille"><?=count($liste_taille)  ?></div>
                                                        <td><button class="btn btn-default btn-xs tab_9">Ajouter une taille</button> </td>
                                                        <td><button class="btn btn-default btn-xs tab_4">Ajouter une couleur</button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>

     
                                    </div>

                                   <div class="form-group">
                                        <label>Description de l'article *(Optionel)</label>
                                        <textarea class="form-control summernote" name="produit_description" rows="3" placeholder="Description"><?=!empty($liste_article->produit_description)?$liste_article->produit_description:''; ?></textarea>
 
                                    </div>

                                    <div class="form-group">
                                        <label>Informations complémentaires *(Optionel)</label>
                                        <textarea class="form-control summernote" name="produit_autreDetail" rows="3" placeholder="Info compl."><?=!empty($liste_article->produit_autreDetail)?$liste_article->produit_autreDetail:''; ?></textarea>
 
                                    </div>
                                   
                                    <input type="hidden" name="produit_dateCreated" value="<?=$liste_article->produit_dateCreated  ?>">
                                    <input type="hidden" name="produit_dateUpdate" value="<?=date("Y-m-d")  ?>">
                                    <input type="hidden" name="produit_etat" value="0">
                                    <input type="hidden" name="produit_statut" value="0">
                                    <input type="hidden" name="produitInfo" value="0">
                                    <input type="hidden" name="produit_etoile" value="0">
                                    <input type="hidden" name="produit_nouveauPrix" value="0">
                                    <input type="hidden" name="produit_nouveauPrix" value="0">
                                    <input type="hidden" name="produit_id" value="<?=$liste_article->produit_id ?>">

                                    <div class="form-group">
                                        <button class="A btn btn-default btn-bordered btn-icon joindre_image" id="importer">JOINDRE UNE IMAGE <i class="fa fa-download"></i></button>
                                    </div>

                                    <div class="form-group">
                                        <button class="B btn btn-default btn-bordered btn-icon " id="ajouter"  >AJOUTER UNE AUTRE IMAGE<i class="fa fa-download"></i></button>
                                    </div>

                                    <div class="col-md-6" style="display: none; text-align: center; margin-bottom: 1%">
                                        <div class="section">
                                            <label  class="field prepend-icon ad_input">
                                                <input type="file" accept="image/*" name="image_libelle[]" id="image_libelle" onchange="readURL(this);" >
                                                <input type="file" accept="image/*" name="image_libelle[]" id="image_libelle1" onchange="readURL_(this);" >
                                            </label>
                                        </div>
                                    </div>

                                     
                                    <!-- <div style="display: none;">
                                        <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30 im" onchange="readURL(this);" accept="image/*" type="file" name="image_libelle[]" placeholder="Selectionnez la photo"  style="border: 4px solid #f1f1f1">
                                    </div> -->
                                    <!-- <input type="hidden" name="produit_id" value="<?=!empty($liste_articles[0]->produit_id)?$liste_articles[0]->produit_id:''  ?>"> -->

                                 

                            <table id="examples" class="displays" style="width:100%" border="1">
                                <thead>
                                    <tr style="background-color: #23262a;color: white;">
                                        <th style="width: 70%;height: 40px;padding-left: 10px;">Images</th>
                                        <th style="width: 30%;padding-left: 10px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody class="ajoute_tr">
                                    <?php if(!empty($liste_articles)): ?>
                                    <?php foreach ($liste_articles as $key => $value): ?>
                                    <tr>
                                        <td style="width: 70%;">
                                            <?php if(!empty($value->image_libelle)){ ?>
                                            <a target="_blank" title="Voir l'image" href="<?=$value->image_libelle ?>">
                                            <img height="200" width="200" src="<?=$value->image_libelle ?>" >
                                            </a>
                                            <?php } ?>
                                        </td>
                                       
                                        <td style="text-align: center;width: 30%;">
                                           
                                           <?php $id=$fonction->double_cryptage($value->produit_id); ?>
                                           <a title="Supprimer cette image" class="btn btn-sm btn-xs" style="border-radius: 50%;background-color: #f43438;" href="#" onclick="DelProduit(<?=$value->image_id ?>,<?=$value->produit_id ?>)"  ><i style="font-size: 45px;color:white;" class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                    <?php endif ?>

                                    <div class="aj" style="float: left; padding-left:10px;padding-bottom: 5px;">
                                        <img src="" class="image" style=""/>
                                                <br>
                                    </div>

                                </tbody>
                               
                            </table>

                                    <div style="text-align: center;margin-top: 5px;">
                                        <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                    </div>

                                </form>
                            <br><br>
                            </div>
                           

                        </div>
                    </div>
                    <div style="margin-bottom:100px;"></div>
                </div>
                <!-- End tab secondary -->
       
     
<?php include("footer.php"); ?>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/assets1/js/jquery.min.js"></script>
    <script src="assets/assets1/js/bootstrap.min.js"></script>
    <script src="assets/assets1/js/jquery.easing-1.3.min.js"></script>

   
   
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/assets1/js/ie10-viewport-bug-workaround.js"></script>
   
    <!-- jquery nicescroll -->
    <script src="assets/assets1/js/jquery.nicescroll.min.js"></script>

    <!-- dataTable -->
    <!-- <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
    <script type="text/javascript" language="javascript" src="assets/dataTable/media/js/jquery.dataTables.js"></script>
    <!-- <script type="text/javascript" language="javascript" src="assets/dataTable/resources/syntax/shCore.js"></script> -->
    <!-- <script type="text/javascript" language="javascript" src="assets/dataTable/resources/demo.js"></script> -->
    <script>
        $(document).ready(function(){
            var count_couleur=$(".count_couleur").text();
            count_couleur=parseInt(count_couleur);

            var count_taille=$(".count_taille").text();
            count_taille=parseInt(count_taille);

            if(count_taille>0){
                var objet=$(".taille_couleur");
                for(var i=0;i<count_taille;i++){
                    var cocher=objet.find("input[name='taille_id[]']:eq("+i+")").prop("checked");
                    // alert(cocher);
                   // var objet=$(this).closest("tr");
                    var valeur=objet.find(".nombre_taille:eq("+i+")").val();
                    var ob=objet.find(".nombre_taille:eq("+i+")").closest("tr");
                    var cocher=objet.find("input[name='taille_id[]']:eq("+i+")").prop("checked");
                    if(parseInt(valeur)>0){
                    // alert(cocher);
                    if(cocher==true)
                        ob.find(".affiche_couleur").show();
                   
                    }
                }  
            }

            $(".nombre_couleur").attr("readonly","");

            $(".taille_couleur").on("click","input[name='taille_id[]']",function(e){
                var objet=$(this).closest("tr");
                var cocher=objet.find("input[name='taille_id[]']").prop("checked");
                var valeur=objet.find(".nombre_taille").val();
                if(parseInt(valeur)>0){
                if(cocher==true)
                    objet.find("td:eq(1)>.affiche_couleur").show();
                else
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }else{
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }
            });

            $(".taille_couleur").on("keyup click",".nombre_taille",function(e){
                var objet=$(this).closest("tr");
                var valeur=objet.find(".nombre_taille").val();
               
                if(parseInt(valeur)>0){
                var cocher=objet.find("input[name='taille_id[]']").prop("checked");

                if(cocher==true)
                    objet.find("td:eq(1)>.affiche_couleur").show();
                else
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }else{
                    objet.find("td:eq(1)>.affiche_couleur").hide();
                }

                for(i=0;i<count_couleur;i++){
                        val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                        val_couleur=parseInt(val_couleur);
                        if(!Number.isInteger(val_couleur)){
                            objet.find(".input_couleur:eq("+i+")").removeAttr("disabled");
                        }    
                }

            });


            $(".taille_couleur").on("click",".input_couleur",function(e){
                var objet=$(this).closest("tr");
                for(var i=0;i<count_couleur;i++){
                    var cocher=objet.find("input[name='couleur_id[]']:eq("+i+")").prop("checked");
                    if(cocher)
                        objet.find(".nombre_couleur:eq("+i+")").removeAttr("readonly");
                }  
            });

            $(".taille_couleur").on("keyup click",".nombre_couleur",function(e){
                var objet=$(this).closest("tr");
                var nombre_taille=objet.find(".nombre_taille").val();
                nombre_taille=parseInt(nombre_taille);

                var valeur=objet.find(".nombre_couleur").val();
               
                var total=0;
                var val_couleur;
                var total_atteint=false;
                var total_depasse=false;

                for(var i=0;i<count_couleur;i++){
                    val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                    val_couleur=parseInt(val_couleur);
                   
                    if(val_couleur>0)
                        total+=val_couleur;

                    if(total==nombre_taille){
                        total_atteint=true;
                        objet.find(".nombre_couleur").attr("border","");
                    }else if(total>nombre_taille) {
                        objet.find(".nombre_couleur:eq("+i+")").val("");
                        total_depasse=true;
                    }
                }
               
                if(total_depasse){
                    alert("Vous avez depassé le nombre total:"+nombre_taille);

                    for(i=0;i<count_couleur;i++){
                        val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                        val_couleur=parseInt(val_couleur);
                        if(!Number.isInteger(val_couleur)){
                            objet.find(".input_couleur:eq("+i+")").removeAttr("disabled");
                        }    
                    }
                }

                if(total_atteint){
                    for(i=0;i<count_couleur;i++){
                        val_couleur=objet.find(".nombre_couleur:eq("+i+")").val();
                        val_couleur=parseInt(val_couleur);
                        if(!Number.isInteger(val_couleur)){
                            objet.find(".nombre_couleur:eq("+i+")").attr("readonly","");
                            objet.find(".input_couleur:eq("+i+")").attr("checked",false);
                            objet.find(".input_couleur:eq("+i+")").attr("disabled",true);
                        }
                       
                    }
                }
               
            });
        });
    </script>
    <script>
         function DelProduit(id,id_art){
            if(confirm("Voulez vous vraiment supprimer cette image ?")){

                 window.location="?p=<?=$fonction->double_cryptage('supprime_image_mod')?>&id_supprimer="+id+"&id_supprimer1="+id_art;

            }
            else{
            }
        }

        function readURL_cat(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.image_cat').attr('src', e.target.result).width(110).height(50);
            };
            reader.readAsDataURL(input.files[0]);
           }
        }

        $(document).ready(function(){
            $(".joindre_image_cat").click(function(ev){
                ev.preventDefault();
                $(".im_cat").trigger("click");
            });
        });
    </script>
     <script>
       function readURL(input) {
    $(document).ready(function(){

        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            // $('.image').attr('src', e.target.result).width(70).height(70);
            $(".ajoute_tr").prepend('<tr><td><img  width="200" height="200" src="'+e.target.result+'"></td><td style="width: 55%;text-align: center;"><a href="#" style="border-radius: 50%;background-color: #f43438;" class="btn btn-sm btn-xs delete" ><i style="font-size: 45px;color:white;" class="fa fa-trash"></i></a></td></tr>');
            // $(".display_button").show();
            // $(".joindre_image").hide();
            // $(".sauvegarder").html('<a href="#" id="sauver" class="sauver" title="Ajouter une image" role="tab" style="background-color: #988a81;text-decoration:none;" ><i style="color:white;" class="fa fa-save"></i> Valider</a>');
        };
         // alert(reader.readAsDataURL(input.files[0]));
        reader.readAsDataURL(input.files[0]);
        // console.log(reader);
       
    }
    });
}
        var i=0;
        function readURL_(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    i++;
                   $(".ajoute_tr").prepend('<tr><td><img  width="200" height="200" src="'+e.target.result+'"></td><td style="width: 55%;text-align: center;"><a href="#" style="border-radius: 50%;background-color: #f43438;" class="btn btn-sm btn-xs delete" ><i style="font-size: 45px;color:white;" class="fa fa-trash"></i></a></td></tr>');
                            };
                 // alert(reader.readAsDataURL(input.files[0]));
                reader.readAsDataURL(input.files[0]);
                // console.log(reader);
               
            }
        }

        $(document).ready(function(){
        $(".ajoute_tr").on("click",".delete",function(ev){
                ev.preventDefault();
                $(this).closest("tr").remove();
                $(".A").hide();
                $(".B").show();
            });

        $(".B").hide();
        $("button#importer").click(function(ev){
            ev.preventDefault();
            $(".B").show();
            $(".A").hide();
            $("#image_libelle").trigger("click");
        });

        var j=1;
        $("button#ajouter").click(function(ev){
            ev.preventDefault();
            if(j!=1)
                $(".ad_input").append('<input type="file" name="image_libelle[]" id="image_libelle'+j+'" onchange="readURL_(this);" accept="image/*">');
            $("#image_libelle"+j).trigger("click");
            j++;

           
        });
        })
    </script>
    <script type="text/javascript" language="javascript" class="init">
       

        $(document).ready(function() {
            $(".tab_9").on("click",function(e){
                e.preventDefault();
                $("a[href='#tab9']").trigger("click");
            });

            $(".tab_4").on("click",function(e){
                e.preventDefault();
                $("a[href='#tab4']").trigger("click");
            });
            $('#example').DataTable( {
                "paging":   false,
                "ordering": true,
                "info":     false,
                "scrollX": true,
                "searching": false
                });
            $('#example11').DataTable( {
                     "paging":   false
                });
            $('#example1').DataTable( {
                     "paging":   false
                });

            $('#example2').DataTable( {
                     "paging":   false
                });
         } );


    </script>
    <!-- Custom form -->

    <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/monokai.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/lang/summernote-ko-KR.min.js"></script>

<!-- include summernote css/js-->
<link href="summernote.css">
<script src="summernote.js"></script>

<script>
    $(document).ready(function(){
        $(document).ready(function() {
  $('.summernote').summernote({
  height: 150,   //set editable area's height
  placeholder: 'Taper la description de l\'article...',
  codemirror: { // codemirror options
    theme: 'monokai'
  }
});
});
    });
</script>



    <script src="assets/assets1/js/form/jcf.js"></script>
    <script src="assets/assets1/js/form/jcf.scrollable.js"></script>
    <script src="assets/assets1/js/form/jcf.select.js"></script>
   
    <!-- Custom checkbox and radio -->
    <script src="assets/assets1/js/checkator/fm.checkator.jquery.js"></script>
    <script src="assets/assets1/js/checkator/setting.js"></script>
   
    <!-- PrettyPhoto -->
    <script src="assets/assets1/js/prettyPhoto/jquery.prettyPhoto.js"></script>  
    <script src="assets/assets1/js/prettyPhoto/setting.js"></script>
   
    <!-- masonry -->
    <script src="assets/assets1/js/masonry/masonry.min.js"></script>  
    <script src="assets/assets1/js/masonry/masonry.filter.js"></script>
    <script src="assets/assets1/js/masonry/setting.js"></script>
   
    <!-- ticker -->
    <script src="assets/assets1/js/ticker/ticker.js"></script>
   
    <!-- Twitter -->
    <!--[if lte IE 9]>
        <script src="assets/assets1/js/tweecool/jquery.xdomainrequest.min.js"></script>      
    <![endif]-->
    <script src="assets/assets1/js/tweecool/tweecool.js"></script>
    <script src="assets/assets1/js/tweecool/setting.js"></script>

    <!-- Custom javaScript for this theme -->
    <script src="assets/assets1/js/custom.js"></script>

    <!-- Theme option-->
    <script src="assets/assets1/js/theme-option/demosetting.js"></script>  
  </body>

<!-- Mirrored from 99webpage.com/theme-review/html/cekas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jun 2020 12:57:04 GMT -->
</html>
